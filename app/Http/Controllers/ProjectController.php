<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

//este se usa para msotrar el lsitado de proyectos
	public function index(){

		return view('projects.index', [
			'projects' => Project::latest()->paginate()
		]);

	}

	public function show($id){


		return view('projects.show', [
			'project' => Project::findOrFail($id)
		]);

	}

	public function create(){

		return view('projects.create');

	}

	public function store(){

		project::create(request()->all());
		return redirect()->route('projects.index');
	}
}