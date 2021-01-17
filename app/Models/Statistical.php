<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistical extends Model
{
    use HasFactory;
    protected $table="statistical";

    public function getDetails(){
            return Statistical::select("image","icon1","count1","icon2","count2","icon3","count3","icon4","count4")->where("id",1)->get();
    }
    public function editDetail($request){
        $objDetails = Statistical::find(1);    
        $objDetails->title = $request->input('image');
        $objDetails->details = $request->input('icon1');
        $objDetails->details = $request->input('count1');
        $objDetails->details = $request->input('icon2');
        $objDetails->details = $request->input('count2');
        $objDetails->details = $request->input('icon3');
        $objDetails->details = $request->input('count3');
        $objDetails->details = $request->input('icon4');
        $objDetails->details = $request->input('count4');
        $objDetails->updated_at = date("Y-m-d h:i:s");
        return $objDetails->save();
    }
}
