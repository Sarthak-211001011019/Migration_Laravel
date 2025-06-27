<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;
use App\Models\Post;

class PostController extends Controller
{
    //RegForm
    public function Regform(){
        return view('Regform');
    }
    //DataInsert
    public function Datainsert(Request $req){
        // dd($req->all());
        $title = $req->input('Title');
        $descrp = $req->input('Description');

        $objpost = new Post();  // Post(Models) Class Object 
        $objpost->title = $title; //inserting data in table column
        $objpost->description = $descrp; //inserting data in table column
        $objpost->save();  // This will Upload data into Database
        return redirect('/Display_rout');
    }
    //Display Data 
    public function Display(){
        $all_data = Post::all();    //this will get all data from Databse  
        return view('Display')->with('Alldata', $all_data);
    }
    // Edit & Update Data
    public function Editdata($id){
        $edit_data = Post::find($id); // if default id Attribute is used
       // $edit_data = Post::where('user_id', $id)->first();  // If we use id Attribute asper our choice 
       return view('Edit')->with('Edit_Data', $edit_data);  // Edit.blade.php
    }
    public function UpdateData(Request $req){
        $id = $req->input('ID');
        $title = $req->input('Title');
        $descrp = $req->input('Description');

        $update_data = ['title'=> $title , 'description' => $descrp];
        Post::whereId($id)->update($update_data);   // If  Default id Attribute is used 
        //Post::where('user_id', $id)->update($update_data);    // If we use id Attribute asper our choice 
        return redirect('/Display_rout'); 
    }
    //Delete Data
    public function DeleteData($id){
        Post::whereId($id)->delete();   // If  Default id Attribute is used 
        //Post::where('user_id', $id)->delete($update_data);    // If we use id Attribute asper our choice 
        return redirect('/Display_rout'); 
    }


}
