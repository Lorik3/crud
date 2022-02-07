<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->lastName = $request->input('lastName');
        $student->tech = $request->input('tech');
        if($request->hasfile('profile_picture'))
        {
            $file = $request->file('profile_picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.' .$ext;
            $file->move('uploads/',$filename);
            $student->profile_picture=$filename;
        }

        $student->save();
        return redirect()->back()->with('status' , 'Sukses');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit',compact('student'));
    }
    public function update(Request $request,$id)
    {
       $student = Student::find($id);
       $student->name = $request->input('name');
       $student->lastName = $request->input('lastName');
       $student->tech = $request->input('tech');
       if($request->hasfile('profile_picture'))
       {
                $destination = 'uploads'.$student->profile_picture;
              if(File::exists($destination))
              {
                    File:delete($destination);
              }
                $file = $request->file('profile_picture');
               $ext = $file->getClientOriginalExtension();
               $filename = time().'.'.$ext;
               $file -> move('uploads/',$filename);
               $student->profile_picture = $filename;
       }
       $student->update();
       return redirect()->back()->with('status' , 'Sukses');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $destination = 'uploads'.$student->profile_picture;
        if(File::exists($id))
        {
            File::delete($destination);
        }
        $student->delete();
       return redirect()->back()->with('status' , 'Sukses');

    }
}
