<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Section;

class SectionsController extends Controller
{
    //
	public function execute()  {

		if(view()->exists('admin.sections'))  {

			$sections = Section::all();

			$data = [

					'title' => 'Sections',
					'sections' => $sections	

					];
			return view('admin.sections', $data);
		}

		abort(404);

	}

}
