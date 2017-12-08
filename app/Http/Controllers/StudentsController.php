<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Teacher;
use App\Model\Student;

class StudentsController extends Controller
{

    public function index() {

        $students = Student::all();

        return view('students.index', compact('students'));

    }

    public function create() {

        return view('students.create');

    }

    public function store(Request $request) {

    	$student = new Student();

    	$student->name = $request->input('name');

        $student->phone = $request->input('phone');

        $student->email = $request->input('email');

        $student->teacher_id = $request->input('teacher');

    	$student->save();

    	return redirect('/students/edit');

    }

    public function edit($id) {

        $student = Student::findOrFail($id);

    	return view('student.edit', compact('student'));

    }

    public function update(Request $request, $id) {

    	$student = Student::findOrFail($id);

        $student->name = $request->input('name');

        $student->phone = $request->input('phone');

        $student->email = $request->input('email');

        $student->teacher_id = $request->input('teacher');

        $student->save();

        return redirect('students');

    }

    public function destroy($id) {

        $student = Student::findOrFail($id);

        $student->delete();

        return redirect('students');

    }

    public function teacher() {

        $teachers = Teacher::all();

        return view('students/edit', compact('teachers'));

    }

}
