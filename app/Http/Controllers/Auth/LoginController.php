<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use Webpatser\Uuid\Uuid;
use Redirect;

class LoginController extends Controller
{
  /*  use AuthenticatesUsers;
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        return view('welcome');
    }*/

    public function controlar(){
      $logueado = true;
      if (Auth::guest()){
          $logueado = false;
          return view('Auth.login')->with('logueado',$logueado);
      }
      else
       return redirect('home');
    }

    public function showLoginForm(){
      $logueado = true;
      return view ('auth.login');
    }

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(){
      Auth::logout();
      
      return redirect('home');
    }

  public function redirectToProvider(){
      return Socialite::driver('github')->redirect();
  }

  public function postLogin(){
    return view ('home');
  }

  public function handleProviderCallback(){

      $github = Socialite::driver('github')->user();
      $user = User::whereEmail($github->getEmail())->first();
       if (!$user) {
           $user = User::create([
               'email' => $github->getEmail(),
               'name' => $github->getName(),
               'password' => Uuid::generate(),
           ]);
       }
       auth()->login($user);
       return redirect()->to('/home');
   }
}
