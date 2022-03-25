<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
        // return $req->all();
        $user = User::where(['email' => $req->email])
            ->where(['password' => $req->password])->first();

        // $password= User::where(['password'=>$req->email])->first();
        // return 'User:'. $user .'<br>Password'. $password;
        if(!$user){
            return redirect('/')->with('alert', 'Login failed');
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/?success=true')->with('alert', 'Login successfully');
        }
    }
    function getuser(Request $req){
        $data= DB::table('users')
        //->join('table2','table2.id','=','user.id')
        ->where('id',$req->rid)
        ->first();
        return view('edituser',['users'=>$data]);

    }
    function edituser(Request $req){
        // DB::table('users')->where('id', $req->rid)
        // ->update(array(
        // 'name' => $req->fullname,
        // 'password' => $req->password,
        // 'email' => $req->email,
        // //'updated_at' => now()
        // 'updated_at' => DB::raw('now()')

        // ));
        // return redirect('editmyuser?rid='.$req->rid.'&success=1');

        try{
            DB::table('users')->where('id', $req->rid)
            ->update(array(
            'name' => $req->fullname,
            'password' => $req->password,
            'email' => $req->email,
            //'updated_at' => now()
            'updated_at' => DB::raw('now()')
        ));
        }
        catch(\Exception){
            return redirect()->back() ->with('alert', 'Failed to update account');
        }
        // return redirect('editmyuser?rid='.$req->rid.'&success=1');
        $user = User::where(['email' => $req->email])
            ->where(['password' => $req->password])->first();
            $req->session();
            return redirect('editmyuser?rid='.$req->rid.'&success=1')->with('alert', 'Update successful');
        // if(!$user){
        //     return redirect('/')->with('alert', 'Login failed');
        // }
        // else
        // {
        //     $req->session()->put('user',$user);
        //     req->session();
        //     return redirect('editmyuser?rid='.$req->rid.'&success=1');
        // }

    }
    function register(Request $req){
        try{
            DB::insert('insert into users (name, email, password, created_at) values (?,?,?,?)',[$req->fullname,$req->email,$req->password,now()]);
        }
        catch (\Exception){
            // return "Failed to register";
            return redirect()->back() ->with('alert', 'Failed to create account');
            // return view('register');
        }
        // return "Successfully register";
        // return view('register');
        $user = User::where(['email' => $req->email])
        ->where(['password' => $req->password])->first();
        if(!$user){
            return "Error while logging in";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/?success=true')->with('alert', 'Account successfully created');
        }
        // return redirect()->back() ->with('alert', 'Account successfully created');

    }
    function listuser(){
        return view('viewuser',['users'=>DB::table('users')->paginate(5)]);
    }
    function deleteuser(Request $req){
        DB::table('users')->where('id', $req->rid)
        ->delete();
        // return "Successfully delete";
        return redirect('/userlist')->with('alert', 'Account successfully deleted');
    }
    function search(Request $req){
        return view('viewuser',['users'=>DB::table('users')
        ->select(DB::raw('id, name, email, password, created_at'))
        ->where('email','like','%'.$req->search.'%')
        ->orwhere('name','like','%'.$req->search.'%')->paginate(5)]
    );
    }
}
