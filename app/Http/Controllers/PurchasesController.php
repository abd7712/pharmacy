<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Metadata\Uses;

class PurchasesController extends Controller
{
    public function buy($id,$user_id)
    {
        
        $drug=Drug::findorfail($id);
        $user=User::findorfail($user_id);
        Purchase::create(["user_id"=>$user->id,"drug_id"=>$drug->id]);
    
        return view("details_buy",["drug"=>$drug, "user"=>$user]);
    }
}
