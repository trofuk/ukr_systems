<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Business;
use App\Contact;
use App\Faq;
use App\Section;
use App\Service;
use App\Tab;
use App\Team;
use App\Testimonial;

class IndexController extends Controller
{
 
	 public function execute(Request $request) {

	 	$businesses = Business::all();
	 	$contacts = Contact::all(); 
        $faqs = Faq::all();
    	$sections = Section::all();
    	$services = Service::all();
    	$tabs = Tab::all();
    	$teams = Team::all();
    	$testimonials = Testimonial::all();
      
    	
    	
    	//main menu logic

    	$menu = array();

    	$item = array('title' => 'Напрямки', 'alias' => 'section_1');
    	array_push($menu, $item);

    	$item = array('title' => 'Доброчинність', 'alias' => 'services');
    	array_push($menu, $item);

    	$item = array('title' => 'Проекти', 'alias' => 'portfolios');
    	array_push($menu, $item);

    	$item = array('title' => 'Членство', 'alias' => 'pricing');
    	array_push($menu, $item);

    	$item = array('title' => 'Наші бренди', 'alias' => 'team');
    	array_push($menu, $item);

    	$item = array('title' => 'Новини', 'alias' => 'blog');
    	array_push($menu, $item);

    	$item = array('title' => 'Звязатися', 'alias' => 'contact');
    	array_push($menu, $item);



			return view('site.index', array(
	    								'menu' => $menu,
	    								'businesses' => $businesses,
	                                    'contacts' => $contacts,
	    								'faqs' => $faqs,
	    								'sections' => $sections,
	    								'services' => $services,
	    								'tabs' => $tabs,
	    								'teams' => $teams,	
	    								'testimonials' => $testimonials	    									

	    				));


	}


}
