<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Medicine;
use Exception;
use Illuminate\Contracts\Concurrency\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function admin_page()
    {
        return view("admin");
    }

    public function admin(Request $request)
    {
        $password = $request->input("password"); // استرجاع كلمة المرور المدخلة
        $stored_password = DB::table("passwords")->value("password"); // استرجاع كلمة المرور المخزنة (المشفرة)
        
        // تحقق مما إذا كانت كلمة المرور المدخلة تطابق الكلمة المخزنة
        if (Hash::check($password, $stored_password)) {
            return redirect("/welcomeAdmin"); // إعادة التوجيه في حالة المطابقة
        } else {
            $message = "Wrong password, Try again"; // رسالة خطأ في حالة عدم المطابقة
            return view("admin", ["message" => $message]); // عرض الصفحة مع رسالة الخطأ
        }
        
    }
    
/*
    // البحث عن المستخدم بناءً على البريد الإلكتروني
    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
*/

    public function welcome_admin()
    {
        return view("welcomeAdmin");
    }

    public function create_page()
    {
        return view("create");
    }

   public function create(Request $request)
   {
        $validator=Validator::make($request->all(),[
            "name"=>'string|unique:drugs,name',
            "description"=>'string',
            "price"=>'numeric|min:0.1'
        ]);

        if($validator->fails())
        {
            $message="There was an error with your submission";
            return view("create",["message"=>$message]);
        }
        else{
            Drug::create($request->all());
            $message="The medicine was added successfully";
            return view("create",["message"=>$message]);
        }
   }

   public function show()
   {
        $drugs= Drug::all();
        return view("/show",["drugs"=>$drugs]);
   }

   public function delete($id)
   {
        $drug=Drug::findorfail($id);
        $drug->delete();
        return redirect("/show");
   }

   public function edit_page($id)
   {
        $drug=Drug::findorfail($id);
        return view("edit",["drug"=>$drug]);
   }

   public function edit(Request $request,$id)
   {
        $validator=Validator::make($request->all(),[
            "newPrice"=>'numeric|min:0.1',
            "confirmPrice"=>"numeric|min:0.1|same:newPrice"
        ]);

        if($validator->fails()){
            $drug=Drug::findorfail($id);
            $message="There was an error with your submission";
            return view("edit",["message"=>$message,"drug"=>$drug]);
        }
        else{
            $drug = Drug::findOrFail($id); 
            $price = $request->input('newPrice'); 
            
            // قم بتحديث السعر مباشرة
            $drug->update(['price' => $price]);
            
            return redirect("/show");
        }
   }
   public function add()
   {
        return "hi";
   }
   public function description($id)
   {
        $drug=Drug::findorfail($id);
        return view("description",["drug"=>$drug]);
   }
   









}
