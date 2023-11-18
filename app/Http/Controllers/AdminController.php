<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function postpage(){
        return view("controll.postpage");
    }
    public function addpost(Request $request)
    {  
     
        $user_id = Auth::id();
        $user = DB::table('users')->where('id',$user_id  )->first();
        $data =new Posts;
        $data->title=$request->title;
        $data->des=$request->des;
        $data->user_id=$user_id;
        $data->name=$user->name;
        $data->usertype=$user->usertype;
       $image=$request->image;
       $imagename=time().".".$image->getClientOriginalExtension();
       $request->image->move("storeimg",$imagename);
       $data->image=$imagename;
        $data->save();
        // $data->save();
        return redirect()->back();
        

    }
    public function showpost()
    {
        $data=Posts::all();
     
        return view("controll.show_post",Compact("data"));

    }

    public function delete($id)
    {
        $data=Posts::find("$id");
        $data->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data=Posts::find($id);
        return view("controll.edit",compact("data"));


    }
    public function update(Request $request,$id)
    {
        $data=Posts::find($id);
        $data->title=$request->title;
        $data->des=$request->des;
        $image=$request->image;
        if($image){
            $imagename=time().".".$image->getClientOriginalExtension();
            $request->image->move("storeimg",$imagename);
            $data->image=$imagename;

        }
      
         $data->save();
         
         return redirect()->back()->with("message","Data Update Successfully");
         
    }
}