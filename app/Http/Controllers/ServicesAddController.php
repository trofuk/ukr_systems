<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Service;

use DB;

class ServicesAddController extends Controller
{
    //
    public function execute(Request $request)  {

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
            


            if($validator->fails()) {
    			return redirect()->route('servicesAdd')->withErrors($validator)->withInput();
    		}

            
            
       
    		              

    		$service = new Service();

    		$service->fill($input);

    		if($service->save())  {
    			return redirect('admin')->with('status', 'Service has been successfully added');
    		}
    		

    	}
    	
        if(view()->exists('admin.services_add'))  {

    		$data =[

    					'title' => 'New service',
                        

    				];

    		return view('admin.services_add', $data);

    	}

    	abort(404);

    }
}
