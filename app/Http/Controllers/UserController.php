<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register_page()
    {
        return view("register");
    }

    public function register(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            "email"=>"required|string|email|unique:users",
            "password"=>"required|string|min:6",
            "confirmPassword"=>"required|string|same:password"
        ]);

        if($validator->fails())
        {
            $message="There was an error with your submission.There may be an account with this name, or check the password";
            return view("register",["message"=>$message]);
        }
        else{
            $hash_password=Hash::make($request->input("password"));
            User::create(["email"=>$request->input("email"),"password"=>$hash_password]);
            return redirect("/showC");
        }
       
    }

    public function login_page()
    {
        return view("login");   
    }

    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[
            "email"=>"required|string|email|",
            "password"=>"required|string"
        ]);

        if($validator->fails())
        {
            $message="There was an error with your submission";
        }
        else{
            $user=User::where("email",$request->input("email"))->first();
            if($user && Hash::check($request->input("password"),$user->password))
            {
                return redirect("/showC/$user->id");
            }
            else{
                $message="Incorrect email or password. Try again";
                return view("login",["message"=>$message]);
            }
        }
    }

    public function showC($id)
    {
        $user=User::findorfail($id);
        $drugs=Drug::all();
        return view("showC",["drugs"=>$drugs,"user"=>$user]);
    }   

    public function descriptionC($id,$id_user)
    {
        $drug=Drug::findorfail($id);
        $user=User::findorfail($id_user);
        return view("descriptionC",["drug"=>$drug,"user"=>$user]);
    }


}
