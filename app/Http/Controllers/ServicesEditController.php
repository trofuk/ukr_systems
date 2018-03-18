<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use DB;

use Validator;

class ServicesEditController extends Controller
{
    //
   public function execute(Service $service, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				

   			$service->delete();

   			return redirect('admin')->with('status', 'service has been successfully deleted');

   		}


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

   			$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];
    		
   			$validator = Validator::make($input, [

   				'name' => 'required',
   				'text' => 'required',
   				    			   				

   			], $messages);
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('servicesEdit', ['service' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		$service->fill($input);

    		if($service->update())  {
    			return redirect('admin')->with('status', 'Service has been successfully updated');
    		}


   		}
   		
   		$old = $service->toArray();

   		if(view()->exists('admin.services_edit')) {

        
   			$data = [
						'title' => 'Editing service - '.$old['name'],
						'data' => $old,
   					];
   			

			return view('admin.services_edit', $data);   		

   		}	

   }
}
