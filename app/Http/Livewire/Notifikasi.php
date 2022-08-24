<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Notifikasi extends Component
{
    public $userId;

    public function mount(){
        return $this->userId = Auth::user()->id;
    }

    public function isReadAll($id){
        $user =  User::find($id);

        return $user->unreadNotifications->markAsRead();
    }

    public function isRead($notifId){
        //$user = User::find($userId);
        $notification = auth()->user()->unreadNotifications()->where('id', $id)->first();

        
        return $notification->markAsRead();
    }

    public function render()
    {
        return view('livewire.notifikasi');
    }
}
