<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Notifications\Notifiable;

class Dashboards extends Component
{
    //use Notifiable;
    /****
     * public $user;

    public function mount(){
        $this->user = User::where('role', 'admin');
    }
     */
    

    public function render()
    {
        return view('livewire.dashboards');
        /***
         * return view('livewire.dashboards', [
            'notifications' => $this->user->unreadNotifications(),
        ]);
         */
    }

    /****
     * public function markNotification($id){
        return User::where('id', $id)->unreadNotifications->markAsRead();
    }
     */
    
}
