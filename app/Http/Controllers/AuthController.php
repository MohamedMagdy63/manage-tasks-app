<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; 
class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function loginPost(Request $request)
    {
        $request ->validate([
            'email'=> 'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginID',$user->user_id);
                return redirect('/');
            }else{
                return back()->with('fail', 'Password not matches.');
            }


        }else{
            return back()->with('fail',"This email is not register");
        }
    }
    public function dashboard()
    {
        $data = array();
        if(Session::has('loginID')){
            $data = User::where('user_id','=',Session::get('loginID'))->first();
        }
        return view("home",compact('data'));
    }

    public function signupPost(Request $request)
    {
        $request ->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'rule'=>'nullable'
        ]);

        $data['first_name'] = $request ->first_name;
        $data['last_name'] = $request ->last_name;
        $data['email'] = $request -> email;
        $data['password'] =Hash::make($request -> password);
        $data['rule'] = false;
        $user = User::create($data);
        if(!$user)
        {
            return redirect('signup')->with('error',"Registeration failed, please try again");
        }
        return redirect('login')->with('success',"Registeration success, Login to access to your tasks");
    }
    public function logout()
    {
        if(Session::has('loginID')){
            Session::pull('loginID');
            return redirect('login');
        }
    }

}
?>