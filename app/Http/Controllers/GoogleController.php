<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try{
            $user = Socialite::driver('google')->user();
            //dd($user->id);
            $finduser = User::where('google_id', $user->getId())->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/dashboard');
            }else{
                //dd($user->id);
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt('123456'),
                    'google_id' => $user->id,
                    'role' => 'user',
                    //'facebook_id' => '436474939',
                ]);

                //every user need a team for dahboard/jestream to work
                //create a personal team for user
                $newTeam = Team::forceCreate([
                    'user_id' => $newUser->id,
                    'name' => explode(' ', $user->name, 2)[0]."'s Team",
                    'personal_team' => true,
                ]);
                //save the tam and add the team to the user
                $newTeam->save();
                $newUser->current_team_id = $newTeam->id;
                $newUser->save();
                Auth::login($newUser);
                //Auth::login($newUser);
                return redirect()->intended('/dashboard');
            }
        }catch(\Throwable $th){
            dd($th->getMessage());
        }
    }
}
