<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AttendenceController extends Controller
{
    public function attendence()
    {
        $profiles =DB::table('profiles')->orderby('id','asc')->paginate(10);
        return view('attendence',['profiles'=>$profiles]);
    }
}
