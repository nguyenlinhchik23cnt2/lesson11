<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class nlcnhacc extends Controller
{
    //list /craate/ edit/ delete
   // public function list(){
        //lay du lieu tu db thong qua orm
       // $nlcnhaccs = nlcnhacc::all();
        //return view('nlcnhacc.list',['nlcnhaccs'=>$nlcnhaccs]);
    //}
    
    public function nlcnhacc()
    {
        // truy van du lieu tu bang khoa
        $nlckhoas =DB::select('Select * from nlcnhacc');
        // chuyen du lieu len view de hien thi
        return view('nlcnhacc.list',['nlcnhacc'=>$nlcnhaccs]);
    }
    #edit
    public function nhaccedit($nhacc)
    {
    $khoa =DB::select('select *from nlcnhacc where nlcnanhacc=?',[$nhacc])[0];
        return view('nlcnhcc.list',['nhacc'=>$nhacc]);
    }
    #edit submit
    public function editsubmit( request $request)
    {
        //lay du lieu moi tren form sua
        $manhacc= $request->input('nlcnanhacc');
        $tennhacc= $request->input('nlctennhacc');
        DB::update("UPDATE nlcnhacc SET nlctennhacc =? where nlcnanhacc=?",[$mancc,$tenncc]);
        return redirect('/nhacc');
    }

    //deletenhacc
    public function deletenhacc($mancc)
    {
        DB::delete("delete from nlcnhacc where nlcnanhacc=?",[$mancc]);
        return redirect('/nhacc');
    }

}
