<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function showDetails()
    {
        $data = DB::table("user as u")
        ->leftJoin("department as dp","dp.id","u.department")
        ->leftJoin("designation as de","de.id","u.designation")
        ->select([
            "u.id","u.name","dp.name as Department_Name","de.name as Desingation"
        ])
        ->get();

        //return response()->json(['success' => true, 'data' => $data]);  
        return view('emp.Emp_Details',compact('data'));
        
    }

}
