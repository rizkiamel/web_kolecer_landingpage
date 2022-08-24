<?php 

    namespace App\Http\Livewire;

    use App\Models\Testimoni;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Testimonis extends Component{
        use WithPagination;
        public $modalFormVisible;
        public $modalConfirmDeleteVisible;
        public $modelId;

        /**
        *   Put yout custom public property here!
        */
        public $name;
        public $review;
        public $via;
        public $website;

        /**
        * The validation rules
        * 
        * @return void
        */
        public function rules()
        {
            return[
                'name' => 'required',
                'review' => 'required',
                'via' => 'required',
                'website' => 'required',
            ];
        }

        /**
        * Loads the model data 
        * of this component
        * 
        * @return void
        */
        public function loadModel(){
            $data = Testimoni::find($this->modelId);
            //Assign the vaiables here
            $this->name = $data->name;
            $this->review = $data->review;
            $this->via = $data->via;
            $this->website = $data->website;
        }

        /**
        * The data for the model mapped
        * in this component
        * 
        * @return void
        */
        public function modelData(){
            return[
                'name' => $this->name,
                'review' => $this->review,
                'via' => $this->via,
                'website' => $this->website,
            ];
        }

        /**
        * The create function
        * 
        * @return void
        */
        public function create(){
            $this->validate();
            Testimoni::create($this->modelData());
            $this->modalFormVisible = false;
            $this->reset();
        }

        /**
        * The read function
        * 
        * @return void
        */
        public function read()
        {
            return Testimoni::paginate(5);
        }

        /**
        * The update function
        * 
        * @return void
        */
        public function update(){
            $this->validate();
            Testimoni::find($this->modelId)->update($this->modelData());
            $this->modalFormVisible = false;
        }

        /**
        * The delete function
        * 
        * @return void
        */
        public function delete(){
            Testimoni::destroy($this->modelId);
            $this->modalConfirmDeleteVisible = false;
            $this->resetPage();
        }
        
        /**
        * Show the create modal
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
        * @return void
        */
        public function updateShowModal($id){
            $this->resetValidation();
            $this->reset();
            $this->modalFormVisible = true;
            $this->modelId = $id;
            $this->loadModel();
        }

        /**
        * Show the delete confirmation modal
        * 
        * @return void
        */
        public function deleteShowModal($id){
            $this->modelId = $id;
            $this->modalConfirmDeleteVisible = true;
        }

        public function render()
        {
            return view('livewire.testimonis', [
                'data' => $this->read(),
            ]);
        }
    }        
