<?php

namespace App\Services;
use Illuminate\Http\Response;
use Laravel\Socialite\Facades\Socialite;  
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleAuthService 
{
    protected $usuario;
    public function __construct(User $user){
            $this->usuario = $user;        
    } 
    public function googlepage()
    {    
        return socialite::driver('google')->redirect();      
    }
    public function googlecallback()
    {        
        try {
            $user = Socialite::driver('google')->user();
            $finduser = $this->usuario->where('google_id', $user->id)->first(); 
            if($finduser)
            {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else
            {
                $newUser = $this->usuario->create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt(env('PASS_DUMMY'))
                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            return $e->getMessage();
        }        
    }
 
    
}
