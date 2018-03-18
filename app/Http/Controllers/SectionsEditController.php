<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Section;

use DB;

use Validator;

class SectionsEditController extends Controller
{
    //
   public function execute(Section $section, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				

   			$section->delete();

   			return redirect('admin')->with('status', 'section has been successfully deleted');

   		}


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

   			$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];
    		
   			$validator = Validator::make($input, [

   				'title' => 'required',
   				    			   				

   			], $messages);
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('sectionsEdit', ['section' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		$section->fill($input);

    		if($section->update())  {
    			return redirect('admin')->with('status', 'Section has been successfully updated');
    		}


   		}
   		
   		$old = $section->toArray();

   		if(view()->exists('admin.sections_edit')) {

        
   			$data = [
   						'title' => 'Editing section - '.$old['title'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.sections_edit', $data);   		

   		}	

   }
}
