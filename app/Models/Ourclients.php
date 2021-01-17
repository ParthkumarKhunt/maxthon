<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourclients extends Model
{
    use HasFactory;
    protected $table = 'our_clients';

    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'our_clients.id',
            1 => 'our_clients.image',

        );
        $query = RequestList ::from('our_clients')
                    ->where("our_clients.is_deleted","No");


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
                ->select('our_clients.id','our_clients.image')
                ->get();
        $data = array();
        $i = 0;
        foreach ($resultArr as $row) {
            $image = url("public/upload/ourclients/" . $row['image']);

            $actionhtml = '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteClients" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>'
            .'<a href="' . route('admin-our-clients-edit', $row['id']) . '" class="btn btn-icon primary"><i class="fa fa-edit"> </i></a>';

            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img class="rounded-circle" height="50px" width="50px" src="' . $image . '" style="margin:10px;">';
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

    public function addDetail($request)
    {
        $obj= new Ourclients();
        if ($request->file('logo')) {
            $imagenew = $request->file('logo');
            $logo = time() . '1.' . $imagenew->getClientOriginalExtension();
            $destinationPath = public_path('/upload/ourclients');
            $imagenew->move($destinationPath, $logo);
            $obj->image = $logo;
        }
        $obj->updated_at = date("Y-m-d h:i:s");
        if($obj->save()){
            return true;
        }else{
            return false;
        }
     

    }
    public function editDetail($request,$id){
        $obj = Ourclients::find($id);
        // $obj = Ourclients::find($request);
            if ($request->file('logo')) {
            $imagenew = $request->file('logo');
            $logo = time() . '1.' . $imagenew->getClientOriginalExtension();
            $destinationPath = public_path('/upload/ourclients');
            $imagenew->move($destinationPath, $logo);
            $obj->image = $logo;
        }
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();
    }
  
  
    public function  deleteOurclients($data){
        $obj = Ourclients::find($data['id']);
        $obj->is_deleted = "Yes";
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();
    }
    public function getDetails($id){
        return Ourclients::select("image")->where("id",$id)->get();
    }
    public function getAllDetails() {
        return Ourclients::select("image")->get();
    }


}
