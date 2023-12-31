<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\OffersNotification;

class NotificationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('product');
    }

    public function sendOfferNotification(){
        $userSchema = User::first();

        $offerData = [
            'greeting' => 'Heloo',
            'body' => 'You received an offer',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007,
            'user' => 'Rizki',
            'text' => 'Berhasil! ini notif baru',
        ];

        Notification::send($userSchema, new OffersNotification($offerData));

        dd('Task Completed!');
    }
}
