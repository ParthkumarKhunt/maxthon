<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;
    protected $table = 'our_team';

    public function getdatatable(){
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'our_team.id',
            1 => 'our_team.image',
            2 => 'our_team.name',
            3 => 'our_team.designation'

        );
        $query = RequestList ::from('our_team')
                    ->where("our_team.is_deleted","No");


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
                ->select('our_team.id','our_team.image','our_team.name','our_team.designation','our_team.facebook','our_team.twiter','our_team.instagram','our_team.linkedin')
                ->get();
        $data = array();
        $i = 0;
        foreach ($resultArr as $row) {
            $socialMedia ='';

            if($row['facebook'] != NULL|| $row['facebook'] != '' || $row['facebook'] != null){
                $socialMedia = $socialMedia . '<a href="' . $row['facebook'] . '" class="btn btn-icon primary"><i class="fa fa-facebook"> </i></a>';
            }
            if($row['twiter'] != NULL|| $row['twiter'] != '' || $row['twiter'] != null){
                $socialMedia = $socialMedia . '<a href="' . $row['twiter']  . '" class="btn btn-icon primary"><i class="fa fa-twiter"> </i></a>';
            }
            if($row['instagram'] != NULL|| $row['instagram'] != '' || $row['instagram'] != null){
                $socialMedia = $socialMedia . '<a href="' . $row['instagram'] . '" class="btn btn-icon primary"><i class="fa fa-instagram"> </i></a>';
            }
            if($row['linkedin'] != NULL|| $row['linkedin'] != '' || $row['linkedin'] != null){
                $socialMedia = $socialMedia . '<a href="' . $row['linkedin'] . '" class="btn btn-icon primary"><i class="fa fa-linkedin"> </i></a>';
            }

            $image = url("public/upload/ourteam/" . $row['image']);

            $actionhtml = '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  deleteTeam" data-id="' . $row["id"] . '" ><i class="fa fa-trash" ></i></a>'
            .'<a href="' . route('admin-our-tean-edit', $row['id']) . '" class="btn btn-icon primary"><i class="fa fa-edit"> </i></a>';

            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = '<img class="rounded-circle" height="50px" width="50px" src="' . $image . '" style="margin:10px;">';
            $nestedData[] = ucfirst($row['name']);
            $nestedData[] = ucfirst($row['designation']);
            $nestedData[] = $socialMedia;
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
}
