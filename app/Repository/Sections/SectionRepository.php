<?php

namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;
use Astrotomic\Translatable\Locales;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Mcamara\LaravelLocalization\LaravelLocalization;

// use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SectionRepository implements SectionRepositoryInterface {

    public function index() {

        $sections = Section::get();
        
        
        return view('Dashboard.Sections.index',compact('sections'));
    }

    public function store($request) {
        Section::create([
            'name' => $request->name,
        ]);

        session()->flash('add');
        return redirect()->route('Sections.index');
    }

    public function update($request)
    {
        $section = Section::findOrFail($request->id);

        $section->update([
            'name' => $request->name,
        ]);

        session()->flash('edit');
        return redirect()->route('Sections.index');
    }

    public function destroy($request) {
        $section = Section::findOrFail($request->id);

        $section->delete();
        session()->flash('delete');
        return redirect()->route('Sections.index');
    }

}