<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function showRegister(Request $request){
        return view('auth.register');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
        ]);
        
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        //need to be fixed:
        return redirect('/login')->with('success','Registered successfully');
    }

    public function authenticate( Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            # code...
            return redirect()->route('login')->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd("jai");
            if (Auth::user()->is_admin) {
                // dd("jai");
                return redirect('/admin')->with('success','Logged In successfully');
            }
            return redirect()->route('home')->with('success','Logged In successfully');
        } else {
            // dd("shantaramag bedi");
            return redirect()->route('login')->with('error', 'Either email/password is incorrect');
        }
    }

    public function logout(){
        // dd("logout");
        Auth::logout();
        return redirect()->route('home')->with('success', "Logged Out Sucessfully!");
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        // dd($googleUser);

        $user = User::where('google_id', $googleUser->id)->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('home');
        }else{
            $newUser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'password' => Hash::make($googleUser->name . time() . $googleUser->id),
                'email_verified_at' => now(),
                'image' => $googleUser->avatar, 
            ]);

            if ($newUser) {
                Auth::login($newUser);
                return redirect()->route('home');
            }
        }
        } catch (Exception $e) {
            //throw $th;
            dd($e->getMessage());
        }
    }

    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        try{
            $githubUser = Socialite::driver('github')->user();
            
            // dd($githubUser);
            
            $user = User::where('github_id', $githubUser->id)->first();
            
            if ($user) {
                Auth::login($user);
                return redirect()->route('home');
            }else{
                $newUser = User::create([
                    'name' => $githubUser->name,
                    'email' => $githubUser->email,
                    'github_id' => $githubUser->id,
                    'password' => Hash::make($githubUser->name . time() . $githubUser->id),
                    'email_verified_at' => now(),
                    'image' => $githubUser->avatar, 
                ]);
                
                if ($newUser) {
                    Auth::login($newUser);
                    return redirect()->route('home');
                }
            }
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}