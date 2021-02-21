<?php

namespace App\Models\employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employeelist';
    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'id',
            1 => 'fullname',
            2 => 'dob',
            3 => 'address',
            4 => 'mobile',
            5 => 'emrgencyContact',
            6 => 'email',
            7 => 'edu_with_passing_year',
            8 => 'expreiance',
            9 => 'adharCard',
            10=> 'panCard',
            11 => 'employeeImage',
            12 => 'dateofJoining',
            13 => 'basicSalary',
            14 => 'designation',
            15 => 'department',
            16 => 'notes',        
               );
        $query = Employee ::from('employeelist')
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
                ->select('*')
                ->where("is_deleted","No")
                ->get();
        $data = array();


        $i = 0;
        foreach ($resultArr as $row) {
            $image = url("public/upload/employeeImage/" . $row['employeeImage']);
            $actionhtml = '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteEmployee" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>'
            .'<a href="' . route('employee-edit', $row['id']) . '" class="btn btn-icon primary"><i class="fa fa-edit"> </i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img height="100px" width="100px" src="' . $image . '" style="margin:10px;">';
            $nestedData[] = $row['fullname'];  
            $nestedData[] = $row['dob'];  
            $nestedData[] = $row['address'];  
            $nestedData[] = $row['mobile'];  
            $nestedData[] = $row['emrgencyContact'];  
            $nestedData[] = $row['email'];  
            $nestedData[] = $row['edu_with_passing_year'];  
            $nestedData[] = $row['expreiance'];  
            $nestedData[] = $row['adharCard'];  
            $nestedData[] = $row['panCard']; 
            $nestedData[] = $row['dateofJoining'];  
            $nestedData[] = $row['basicSalary'];  
            $nestedData[] = $row['notes'];   
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
    public function addEmployee($request){      
        $obj = new Employee();
        if ($request->file('employeeImage')) {
            $image = $request->file('employeeImage');
            $employeeImage = time() . '1.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/employeeImage');
            $image->move($destinationPath, $employeeImage);
            $obj->employeeImage = $employeeImage;
        }  
        $obj->fullname = $request->input('fullname');
        $obj->dob = $request->input('dob'); 
        $obj->address = $request->input('address'); 
        $obj->mobile = $request->input('mobile'); 
        $obj->emrgencyContact = $request->input('emrgencyContact'); 
        $obj->email = $request->input('email'); 
        $obj->edu_with_passing_year = $request->input('edu_with_passing_year'); 
        $obj->expreiance = $request->input('expreiance'); 
        $obj->adharCard = $request->input('adharCard'); 
        $obj->panCard = $request->input('panCard'); 
  
        $obj->dateofJoining = $request->input('dateofJoining'); 
        $obj->basicSalary = $request->input('basicSalary'); 
        $obj->designation = $request->input('designation'); 
        $obj->department = $request->input('department'); 
        $obj->notes = $request->input('notes'); 
        $obj->created_at = date("Y-m-d h:i:s");
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();            
    }
    public function getDetail($id){
        return Employee::select('*')->where("id",$id)->get();
    }
    public function editDetail($request){
        $obj = new Employee();
        $obj  = Employee::find($request->input('editId'));
        if ($request->file('employeeImage')) {
            $image = $request->file('employeeImage');
            $employeeImage = time() . '1.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/employeeImage');
            $image->move($destinationPath, $employeeImage);
            $obj->employeeImage = $employeeImage;
        }  
        $obj->fullname = $request->input('fullname');
        $obj->dob = $request->input('dob'); 
        $obj->address = $request->input('address'); 
        $obj->mobile = $request->input('mobile'); 
        $obj->emrgencyContact = $request->input('emrgencyContact'); 
        $obj->email = $request->input('email'); 
        $obj->edu_with_passing_year = $request->input('edu_with_passing_year'); 
        $obj->expreiance = $request->input('expreiance'); 
        $obj->adharCard = $request->input('adharCard'); 
        $obj->panCard = $request->input('panCard'); 
        $obj->dateofJoining = $request->input('dateofJoining'); 
        $obj->basicSalary = $request->input('basicSalary'); 
        $obj->designation = $request->input('designation'); 
        $obj->department = $request->input('department'); 
        $obj->notes = $request->input('notes'); 
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();
    }
    public function  deleteEmployee($data){
        $obj = Employee::find($data['id']);
        $obj->is_deleted = "Yes";
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();
    }
}
