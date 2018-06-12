<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
     public function postSignUp(Request $request){
     	//echo "OK";
     	//Validate the SignUp
     	$this->validate($request,[
     		'email' => 'required|email|unique:users',
     		'first_name' => 'required|max:120',
     		'password' => 'required|min:4'
     	]);

     	$email = $request['email'];
          	$first_name = $request['first_name'];
             $password = bcrypt($request['password']);
     
             $users = new User();
             $users->email = $email;
             $users->first_name = $first_name;
             $users->password = $password;
     
             $users->save();
     
     		Auth::login($users);
            
     		return Redirect::to('/dashboard');
            
         }
         
     	 public function postSignIn(Request $request){
     	//echo "OK";
     	 	$this->validate($request,[
     		'email' => 'required',
     		'password' => 'required'
     	]);

     	if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return Redirect::to('/dashboard');
        }
        return redirect()->back();
        }
        public  function getAccount(){
        //echo "ok";
        return view('account', ['user' => Auth::user()]);
        }
         public function postSaveAccount(Request $request)
        {
        $this->validate($request, [
           'first_name' => 'required|max:120'
        ]);

        $user = Auth::user();
        $old_name = $user->first_name;
        $user->first_name = $request['first_name'];
        $user->update();
        $file = $request->file('image');
        $filename = $request['first_name'] . '-' . $user->id . '.jpg';
        $old_filename = $old_name . '-' . $user->id . '.jpg';
        $update = false;
        if (Storage::disk('local')->has($old_filename)) {
            $old_file = Storage::disk('local')->get($old_filename);
            Storage::disk('local')->put($filename, $old_file);
            $update = true;
        }
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
        if ($update && $old_filename !== $filename) {
            Storage::delete($old_filename);
        }
        return Redirect::to('/dashboard');
        }

        public function getUserImage($filename)
        {
            $file = Storage::disk('local')->get($filename);
            return new Response($file, 200);
        }

}
