<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;
use DB;
use App\profile;

class ProfileController extends Controller
{
    public function addProfile(Request $request){
        $this->validate($request, [
          'id' => ['required', 'numeric', 'max:255'],
          'firstname' => ['required', 'string', 'max:255'],
          'lastname' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
          'address' => ['required', 'string', 'max:255'],
          'joineddate'=>['required'],
          'jobtype'=>['required'],
          'basicsalary'=>['required'],
         ]);

         $profiles = new profile();
         $profiles->id = $request->input('id');
         $profiles->firstname = $request->input('firstname');
         $profiles->lastname = $request->input('lastname');
         $profiles->email = $request->input('email');
         $profiles->address = $request->input('address');
         $profiles->joineddate = $request->input('joineddate');
         $profiles->jobtype = $request->input('jobtype');
         $profiles->basicsalary = $request->input('basicsalary');

             
         $profiles->save();
         return redirect('home')->with('status', 'Profile Added Sucessfully');
      }



      public function deleteprofile($id){
        DB::table('profiles')->where('id', $id)->delete();
        return redirect()->back()->with('statusdelete', 'Profile Delete Sucessfully');
      }

      public function editprofile($id){
        $profile = DB::table('profiles')->where(['systemid'=>$id])->first();
        return view('update',['profile'=>$profile]);
      }



      public function updateProfile(Request $request){
        $this->validate($request, [
          'id' => ['required', 'numeric', 'max:255'],
          'firstname' => ['required', 'string', 'max:255'],
          'lastname' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
          'address' => ['required', 'string', 'max:255'],
          'joineddate'=>['required'],
          'jobtype'=>['required'],
          'basicsalary'=>['required'],
         ]);

         $profiles = new profile();
         $id = $request->input('id');
         $profiles->firstname = $request->input('firstname');
         $profiles->lastname = $request->input('lastname');
         $profiles->email = $request->input('email');
         $profiles->address = $request->input('address');
         $profiles->joineddate = $request->input('joineddate');
         $profiles->jobtype = $request->input('jobtype');
         $profiles->basicsalary = $request->input('basicsalary');
        //  return $id;

         $data=array(
          'firstname' => $profiles->firstname,
          'lastname'=>$profiles->lastname,
          'email'=>$profiles->email,
          'address'=>$profiles->address,
          'joineddate'=>$profiles->joineddate,
          'jobtype'=>$profiles->jobtype,
          'basicsalary'=>$profiles->basicsalary,
        );
        profile::where('id',$id)->update($data);
             
        //  $profiles->update->where('id',$id);
         return redirect('home')->with('statusupdate', 'Profile Update Sucessfully');
      }
}
