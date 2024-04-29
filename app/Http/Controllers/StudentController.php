<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function create()
    {
        return view('student_details'); // Render the form
    }
    
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'roll_no' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
        ]);

        // Create new student record
        $student = new Student();
        $student->id = $request->id;
        $student->name = $request->name;
        $student->roll_no = $request->roll_no;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->save();

        return redirect('/student/list');
    }
    public function list()
    {
        $students = Student::all();
        // echo "<pre>";
        // print_r($students);
        // echo "</pre>";
        // die();
//  compact function creates array of the key/string
        $data = compact('students');
        return view('student_record')->with($data);
    }
    public function destroy($id)
    {
        $students =Student::find($id)->delete();
        return redirect('/student/list');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        // echo "<pre>";
        // print_r($student);
        // die;
        return view('edit_student', compact('student'));
    }
    
public function update(Request $request, $id)
{
    
    $validatedData = $request->validate([
        'name' => 'required',
        'roll_no' => 'required',
        'email' => 'required|email',
        'contact' => 'required',
    ]);

    $student = Student::findOrFail($id);
    
   
    $student->name = $request->name;
    $student->roll_no = $request->roll_no;
    $student->email = $request->email;
    $student->contact = $request->contact;
    $student->save();

    return redirect('student/list');
}




   
};