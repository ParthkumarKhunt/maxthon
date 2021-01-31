<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrer extends Model
{
    use HasFactory;
    protected $table = 'carrer';
 
    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'id',
            1 => 'headline',
            2 => 'details',
            3 => 'experience'
        );
        $query = Carrer ::from('carrer')
                    ->where("is_deleted","No");


        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                ->take($requestData['length'])
                ->select('id','headline','department_id','details','experience')
                ->where("is_deleted","No")
                ->get();
        $data = array();
        $i = 0;
        foreach ($resultArr as $row) {
            $actionhtml = '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteCarrer" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>'
            .'<a href="' . route('admin-carrer-edit', $row['id']) . '" class="btn btn-icon primary"><i class="fa fa-edit"> </i></a>';

            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['headline'];
            $nestedData[] = $row['details'];
            $nestedData[] = $row['experience'];
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }
    public function addCarrer($request){      
        $obj = new Carrer();
        $obj->department_id = $request->input('department_id');
        $obj->headline = $request->input('headline');
        $obj->details = $request->input('details');
        $obj->experience = $request->input('experience');
        $obj->created_at = date("Y-m-d h:i:s");
        $obj->updated_at = date("Y-m-d h:i:s");
        $result = $obj->save();
        $lastid = $obj->id;
        if ($lastid != '') {
            $skill = $request->input('skills');
            $i = 0;
            $skills = array();
            if ($skill) {
                foreach ($skill as $key => $value) {
                    $objskill = new Skills();
                    $objskill->skills= $skill[$i];
                    $objskill->carrer_id = $lastid;
                    $objskill->created_at = date("Y-m-d h:i:s");
                    $objskill->updated_at = date("Y-m-d h:i:s");
                    $objskill->save();
                    $i++;
                } 
            }
            return "true";
        }
        return "true";            
    }
    public function getDetail($id){
        return Carrer::from('carrer')
        ->join("skills","carrer.id","=","skills.carrer_id")
        ->select('carrer.id','carrer.headline','carrer.details','carrer.experience','carrer.department_id','skills.skills as skills_details','skills.id as skills_id')
        ->where("carrer.is_deleted","No")
        ->where("carrer.id",$id)
        ->get();
     }

    public function editDetail($request){
        $obj  = Carrer::find($request->input('editId'));
        $obj->department_id = $request->input('department_id');
        $obj->headline = $request->input('headline');
        $obj->details = $request->input('details');
        $obj->experience = $request->input('experience');
        $obj->updated_at = date("Y-m-d h:i:s");
        $result = $obj->save();
        $skills = $request->input('skills');
        // echo "<pre>";
        // print_r($skills[0]);
        // die;            
        if($skills[0]){ 
            $skills = $request->input('skills');           
            $i = 0;
            foreach ($skills as $key => $value) {
                $objskill = new Skills();
                $objskill->skills= $skills[$i];
                $objskill->carrer_id = $request->input('editId');
                $objskill->updated_at = date("Y-m-d h:i:s");
                $objskill->save();
                $i++;
            }
            return "true";
        }else{
            return "true";
        }   
        return "true";
     }
    
    public function getAllDetails(){      
        return Carrer::from('carrer')
                        ->join("skills","carrer.id","=","skills.carrer_id")
                        ->select('carrer.id','carrer.headline','carrer.details','carrer.experience','carrer.department_id','skills.skills as skills_details')
                        ->where("carrer.is_deleted","No")
                        ->get();
    }

    public function  deleteCarrer($data){
        $obj = Carrer::find($data['id']);
        $obj->is_deleted = "Yes";
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();
    }
}
