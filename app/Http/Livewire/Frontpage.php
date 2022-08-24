<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;


class Frontpage extends Component
{
    //public $urlslug;
    public $modalFormVisible = true; 
    public $title;
    public $content;

    /**
     * The livewire mount function
     * 
     * @param mixed $urlslug
     * @return void
     */
    public function mount($urlslug = null){
        $this->retrieveContent($urlslug);
    }

    /**
     * Retrieves the content of the page
     * 
     * @param mixed $urlslug
     * @return void
     */
    public function retrieveContent($urlslug){

        //get home page if slug is empty
        if(empty($urlslug)){
            $data = Page::where('is_default_home', true)->first();
        }else{
            //get the page according to the slug value
            $data = Page::where('slug', $urlslug)->first();

            //if we can't retrieve anything, let's get the default 404 not found page
            if(!$data){
                $data = Page::where('is_default_not_found', true)->first();
            }
        }
        $this->title = $data->title;
        $this->content = $data->content;
    }

    /**
     * Get all the sidebar links
     * 
     * @param mixed $urlslug
     * @return void
     */
    private function sideBarLinks(){
        return DB::table('navigation_menus')->where('type', '=', 'SidebarNav')->orderBy('sequence', 'asc')
        ->orderBy('created_at', 'asc')->get();
    }

    /**
     * Get the top nav links
     * 
     * @param mixed $urlslug
     * @return void
     */
    private function topNavLinks(){
        return DB::table('navigation_menus')->where('type', '=', 'TopNav')->orderBy('sequence', 'asc')
        ->orderBy('created_at', 'asc')->get();
    }

    private function tableHarga(){
        return DB::table('hargas')->get();
    }

    private function tableTesti(){
        return DB::table('testimonis')->get();
    }

    public function login(){
        $this->modalFormVisible = true;
    }
    
    /**
     * The livewire render function
     * 
     * @param mixed $urlslug
     * @return void
     */
    public function render()
    {
        return view('livewire.frontpage', [
            'sidebarLinks' => $this->sideBarLinks(), //pass the sidebar links to the frontend component
            'topNavLinks' => $this->topNavLinks(),
            'tableHarga' => $this->tableHarga(),
            'tableTesti' => $this->tableTesti(),
        ])->layout('layouts.frontpage');
    }
}
