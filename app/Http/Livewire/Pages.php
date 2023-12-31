<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Notification;
use App\Notifications\OffersNotification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PDF;

class Pages extends Component
{
    use WithPagination;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $slug;
    public $title;
    public $content;
    public $isSetToDefaultHomePage;
    public $isSetToDefaultNotFoundPage;
    public $dataaa;

    /**
     * The validation rules
     * 
     * @return void
     */
    public function rules()
    {
        return[
            'title' => 'required',
            'slug' => ['required', Rule::unique('pages', 'slug')->ignore($this->modelId)],
            'content' => 'required',
        ];
    }

    /**
     * The validation mount function
     * 
     * @return void
     */
    public function mount()
    {
        // Resets the pagination after reloading the page
        $this->resetPage();
        $this->dataaa = ['title' => 'Halo, ini halaman PDF'];
    }

    /**
     * Runs everytime the title 
     * variable is updated
     * 
     * @return void
     */
    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }

    public function updatedIsSetToDefaultHomePage(){
        $this->isSetToDefaultNotFoundPage=null;
    }

    public function updatedIsSetToDefaultNotFoundPage(){
        $this->isSetToDefaultHomePage=null;
    }

    /**
     * The create function
     * 
     * @return void
     */
    public function create()
    {
        $this->validate();
        $this->unassginDefaultHomePage();
        $this->unassginDefaultNotFoundPage();
        Page::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();

        $dataLuar = [
            'pesan' => 'membuat page baru'
        ];

        auth()->user()->notify(new OffersNotification($dataLuar));
    }

    /**
     * The read function
     * 
     * @return void
     */
    public function read()
    {
        return Page::paginate(5);
    }

    /**
     * The update function
     * 
     * @return void
     */
    public function update()
    {
        $this->validate();
        $this->unassginDefaultHomePage();
        $this->unassginDefaultNotFoundPage();
        Page::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
    }

    /**
     * The delete function
     * 
     * @return void
     */
    public function delete(){
        Page::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
        $dataLuar = [
            'pesan' => 'Anda telah menghapus page'
        ];

        auth()->user()->notify(new OffersNotification($dataLuar));
    }

    /**
     * Show the form modal
     * of the create function.
     * 
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }

    /**
     * Show the form modal
     * in update mode
     * 
     * @param mixed $id
     * @return void
     */
    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->reset();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }

    /**
     * Show the delete confirmation modal
     * 
     * @param mixed $id
     * @return void
     */
    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }
    /**
     * Load the model data
     * of this component
     * 
     * @return void
     */
    public function loadModel(){
        $data = Page::find($this->modelId);
        $this->title = $data->title;
        $this->slug = $data->slug;
        $this->content = $data->content;
        $this->isSetToDefaultHomePage = !$data->is_default_home ? null:true;
        $this->isSetToDefaultNotFoundPage = !$data->is_default_not_found ? null:true;
    }

    /**
     * The data for the model mapped
     * in this component.
     * 
     * @return void
     */

    public function modelData()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content, 
            'is_default_home' => $this->isSetToDefaultHomePage,
            'is_default_not_found' => $this->isSetToDefaultNotFoundPage,
        ];
    }

    /**
     * Unassigns the default home page in the database table
     * 
     * @return void
     */
    private function unassginDefaultHomePage(){
        if($this->isSetToDefaultHomePage != null){
            Page::where('is_default_home', true)->update([
                'is_default_home' => false, 
            ]);
        }
    }

    /**
     * Unassigns the default 404 page in the database table
     * 
     * @return void
     */
    private function unassginDefaultNotFoundPage(){
        if($this->isSetToDefaultNotFoundPage != null){
            Page::where('is_default_not_found', true)->update([
                'is_default_not_found' => false, 
            ]);
        }
    }

    //pdf
    public function createPDF(){
        //retrieve all records from db 
        $data = Page::all();
        //share data to view
        //view()->share('admin.cetak', $this->dataaa);
        $pdf = PDF::loadView('admin.cetak', ['data' => $data])->output();
        //$pdf = PDF::loadView('admin.cetak', ['data' => $data])->setPaper('A4', 'portrait')->stream();
        //download PDF file with download method
        return response()->streamDownload(fn()=>print($pdf), "test1.pdf");
    }

    /**
     * The livewire render function
     * 
     * @return void
     */
    public function render()
    {
        return view('livewire.pages', [
            'data' => $this->read(),
        ]);
    }
}
