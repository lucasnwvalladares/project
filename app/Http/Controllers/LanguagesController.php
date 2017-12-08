<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Language;

class LanguagesController extends Controller
{
    
    public function index() {

        $languages = Language::all();

        return view('languages.index', compact('languages'));

    }

    public function create() {

        return view('languages.create');

    }

    public function store(Request $request) {

    	$language = new Language();

    	$language->name = $request->input('name');

    	$language->save();

    	return redirect('languages/create');

    }

    public function edit($id) {

        $language = Language::findOrFail($id);

    	return view('languages.edit', compact('language'));

    }

    public function update(Request $request, $id) {

    	$language = Language::findOrFail($id);

        $language->name = $request->input('name');

        $language->save();

        return redirect('languages');

    }

    public function destroy($id) {

        $language = Language::findOrFail($id);

        $language->delete();

        return redirect('languages');

    }

    
}
