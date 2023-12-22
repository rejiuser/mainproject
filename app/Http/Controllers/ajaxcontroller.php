<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ajaxmodel;

class ajaxcontroller extends Controller
{
 public function insert()
 {
    return view('laravel_ajax/insert');
 }
public function inserttb(Request $request)
{
$name=$request->input('n');
$place=$request->input('p');
$dob=$request->input('d');
$data=array('Name'=>$name,'Place'=>$place,'Dob'=>$dob);
ajaxmodel::create($data);
}
public function viewtb()
{
    $data=ajaxmodel::get();
    return response()->json($data);
}
public function edit($id)
{
$data=ajaxmodel::where('id',$id)->first();
return view('laravel_ajax/edit',['result'=>$data]);
}

public function update(Request $request,$id)
{
    $name=$request->input('n');
    $place=$request->input('p');
    $dob=$request->input('d');
    $data=array('Name'=>$name,'Place'=>$place,'Dob'=>$dob);
    ajaxmodel::where('id',$id)->update($data);
    // return redirect('viewurl');
}
public function delete($id)
{
    $data=ajaxmodel::where('id',$id)->delete();
}
public function viewtable()
{
    $data=ajaxmodel::get();
    return view('laravel_ajax/viewtable',['result'=>$data]);

}
public function searchbtn(Request $request)
{
$search=$request->input('texted');

$data=ajaxmodel::where('Name',$search)->get();

return response()->json($data);

}


}
