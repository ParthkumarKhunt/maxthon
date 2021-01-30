<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
 
    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'id',
            1 => 'image',
            2 => 'title',
            3 => 'description',
            4 => 'profile_image',
            5 => 'firstname',
            6 => 'lastname',
            7 => 'designation'
       );
        $query = Blog ::from('blog')
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
                ->select('id','image','title','description','profile_image','firstname','lastname','designation','category_id')
                ->where("is_deleted","No")
                ->get();
        $data = array();


        $i = 0;
        foreach ($resultArr as $row) {
            $image = url("public/upload/blog/" . $row['image']);
            $profile_image = url("public/upload/blog/" . $row['profile_image']);

            $actionhtml = '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteBlog" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>'
            .'<a href="' . route('admin-blog-edit', $row['id']) . '" class="btn btn-icon primary"><i class="fa fa-edit"> </i></a>';

            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img class="rounded-circle" height="100px" width="100px" src="' . $profile_image . '" style="margin:10px;">';
            $nestedData[] = $row['firstname'].' '.$row['lastname'];
            $nestedData[] = $row['designation'];
            $nestedData[] = '<img height="100px" width="100px" src="' . $image . '" style="margin:10px;">';
            $nestedData[] = $row['title'];
            $nestedData[] = $row['description'];             
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
    public function addBlog($request){
      
        $obj = new Blog();
   
        if ($request->file('image')) {
            $image = $request->file('image');
            $blogimage = time() . '1.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/blog');
            $image->move($destinationPath, $blogimage);
            $obj->image = $blogimage;
        }
        if ($request->file('profile_image')) {
            $image = $request->file('profile_image');
            $profile_image = time() . '2.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/blog');
            $image->move($destinationPath, $profile_image);
            $obj->profile_image = $profile_image;
        }
        $obj->firstname = $request->input('firstname');
        $obj->lastname = $request->input('lastname');
        $obj->title = $request->input('title');
        $obj->category_id = $request->input('category_id');  
        $obj->description = $request->input('description');
        $obj->designation = $request->input('designation');
        $obj->created_at = date("Y-m-d h:i:s");
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();

            
    }
    public function getDetail($id){
        return Blog::select('id','category_id','firstname','lastname','profile_image','image','title','description','designation')->where("id",$id)->get();
    }
    public function editDetail($request){
        $obj = new Blog();
        $obj  = Blog::find($request->input('editId'));
        if ($request->file('image')) {
            $image = $request->file('image');
            $blogimage = time() . '1.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/blog');
            $image->move($destinationPath, $blogimage);
            $obj->image = $blogimage;
        }
        if ($request->file('profile_image')) {
            $image = $request->file('profile_image');
            $profile_image = time() . '2.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/blog');
            $image->move($destinationPath, $profile_image);
            $obj->profile_image = $profile_image;
        }
        $obj->firstname = $request->input('firstname');
        $obj->lastname = $request->input('lastname');
        $obj->title = $request->input('title');
        $obj->category_id = $request->input('category_id');  
        $obj->description = $request->input('description');
        $obj->designation = $request->input('designation');
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();
    }

    public function getAllDetails(){
        return Blog::from('blog')
                    ->join("blog_category","blog_category.id","=","blog.category_id")
                    ->select('blog.id','blog_category.name','blog.firstname','blog.lastname','blog.profile_image','blog.image','blog.title','blog.description','blog.designation')
                    ->where("blog.is_deleted","No")
                    ->get();
    }
    public function  deleteBlog($data){
        $obj = Blog::find($data['id']);
        $obj->is_deleted = "Yes";
        $obj->updated_at = date("Y-m-d h:i:s");
        return $obj->save();
    }

}
