<?php

namespace App\Http\Controllers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;

class todocontroller extends Controller
{
    public function tampiltodo()
    {
       #Query Builder
        $todolist = \DB::table("tbltodo")->get();


        return view("todo")
            ->with("todolist", $todolist);
    }

    public function tambahtodo(request $request){
        //Query Builder
        \DB::table("tbltodo")
        ->insert([
            "keterangan" => $request->keterangan,
            "status" => "pending",
            "created_at" => now(),
            "updated_at" => now()
        ]);



        return redirect("/");
    }

    public function hapustodo($id){
        //Query Builder
        \DB::table("tbltodo")->where("id",$id)->delete();

        return redirect("/");
    }

    public function updatetodo($id){
        //Query Builder
        \DB::table("tbltodo")->where("id",$id)->update([
            "status" => "selesai",
            "updated_at" => now()
        ]);

        return redirect("/");
    }
}
