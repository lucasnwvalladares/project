<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Language;
use App\Model\Teacher;

class TeachersController extends Controller
{

    public function index() {

        $teachers = Teacher::all();

        return view('teachers.index', compact('teachers'));

    }

    public function create() {

        return view('teachers.create');

    }

    public function store(Request $request) {

    	$teacher = new Teacher();

    	$teacher->name = $request->input('name');

        $teacher->phone = $request->input('phone');

        $teacher->email = $request->input('email');

        $teacher->language_id = $request->input('languages');

    	$teacher->save();

    	return redirect('/teachers/edit');

    }

    public function edit($id) {

        $teacher = Teacher::findOrFail($id);

    	return view('teachers.edit', compact('teacher'));

    }

    public function update(Request $request, $id) {

    	$teacher = Teacher::findOrFail($id);

        $teacher->name = $request->input('name');

        $teacher->phone = $request->input('phone');

        $teacher->email = $request->input('email');

        $teacher->language_id = $request->input('language');

        $teacher->save();

        return redirect('teachers');

    }

    public function destroy($id) {

        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        return redirect('teachers');
        
    }

    public function languages() {

        $languages = Language::all();

        return view('teachers/create', 'languages');

    }

}
