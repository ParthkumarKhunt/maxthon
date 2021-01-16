<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestList extends Model
{
    use HasFactory;
    protected $table = "request_list";

    public function saveDetails($request){

        $objRequestList = new RequestList();
        $objRequestList->name =$request->input('name');
        $objRequestList->email =$request->input('email');
        if($request->input('phone') == NULL || $request->input('phone') == ''){
            $objRequestList->phone = NULL;
        }else{
            $objRequestList->phone = $request->input('phone');
        }

        $objRequestList->message =$request->input('message');
        $objRequestList->updated_at = date("Y-m-d h:i:s");
        $objRequestList->updated_at = date("Y-m-d h:i:s");
        if($objRequestList->save()){
            return true;
        }else{
            return false;
        }
    }
}
