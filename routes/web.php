<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'web'], function(){

	Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
	// Route::match(['get', 'post'], '/#/contact', ['uses'=>'IndexController@execute', 'as'=>'contact']);
	// Route::match(['get', 'post'], '/#/about', ['uses'=>'IndexController@execute', 'as'=>'about']);
	// Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);
	
	// //Download Price
	// Route::get( '/download/price.zip', 'PriceController@download');

	Route::auth();

});



// Route::get('/', function () {
//     return view('welcome');
// });

//admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {

	//admin
	Route::get('/', function() {

			if(view()->exists('admin.index')) {
				$data = ['title' => 'Admin Panel'];

				return view('admin.index', $data);
			}

	});
	//admin/pages
	Route::group(['prefix'=>'sections'], function(){

		//admin/pages	
		Route::get('/', ['uses'=>'SectionsController@execute', 'as'=>'sections']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses'=>'SectionsAddController@execute', 'as'=>'sectionsAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{section}', ['uses'=>'SectionsEditController@execute', 'as'=>'sectionsEdit']);

	});	

	//admin/products
	Route::group(['prefix'=>'businesses'], function(){

		//admin/products	
		Route::get('/', ['uses'=>'BusinessesController@execute', 'as'=>'businesses']);

		//admin/products/add
		Route::match(['get', 'post'], '/add', ['uses'=>'BusinessesAddController@execute', 'as'=>'businessesAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{business}', ['uses'=>'BusinessesEditController@execute', 'as'=>'businessesEdit']);

	});

	//admin/partners
	Route::group(['prefix'=>'tabs'], function(){

		//admin/partners	
		Route::get('/', ['uses'=>'TabsController@execute', 'as'=>'tabs']);

		//admin/partners/add
		Route::match(['get', 'post'], '/add', ['uses'=>'TabsAddController@execute', 'as'=>'tabsAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{tab}', ['uses'=>'TabsEditController@execute', 'as'=>'tabsEdit']);

	});

	//admin/testimonians
	Route::group(['prefix'=>'testimonians'], function(){

		//admin/testimonians	
		Route::get('/', ['uses'=>'TestimoniansController@execute', 'as'=>'testimonians']);

		//admin/testimonians/add
		Route::match(['get', 'post'], '/add', ['uses'=>'TestimoniansAddController@execute', 'as'=>'testimoniansAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{testimonian}', ['uses'=>'TestimoniansEditController@execute', 'as'=>'testimoniansEdit']);

	});

	//admin/faqs
	Route::group(['prefix'=>'faqs'], function(){

		//admin/faqs	
		Route::get('/', ['uses'=>'FaqsController@execute', 'as'=>'faqs']);

		//admin/faqs/add
		Route::match(['get', 'post'], '/add', ['uses'=>'FaqsAddController@execute', 'as'=>'faqsAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{faq}', ['uses'=>'FaqsEditController@execute', 'as'=>'faqsEdit']);

	});

	//admin/services
	Route::group(['prefix'=>'services'], function(){

		//admin/services	
		Route::get('/', ['uses'=>'ServicesController@execute', 'as'=>'services']);

		//admin/services/add
		Route::match(['get', 'post'], '/add', ['uses'=>'ServicesAddController@execute', 'as'=>'servicesAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses'=>'ServicesEditController@execute', 'as'=>'servicesEdit']);

	});

	//admin/facts
	Route::group(['prefix'=>'teams'], function(){

		//admin/facts	
		Route::get('/', ['uses'=>'TeamsController@execute', 'as'=>'teams']);

		//admin/facts/add
		Route::match(['get', 'post'], '/add', ['uses'=>'TeamsAddController@execute', 'as'=>'teamsAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{team}', ['uses'=>'TeamsEditController@execute', 'as'=>'teamsEdit']);

	});



	//admin/contacts
	Route::group(['prefix'=>'contacts'], function(){

		//admin/contacts	
		Route::get('/', ['uses'=>'ContactsController@execute', 'as'=>'contacts']);

		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{contact}', ['uses'=>'ContactsEditController@execute', 'as'=>'contactsEdit']);

	});

	// video has to be edited!!!
		Route::group(['prefix'=>'video'], function(){

		//admin/price	
		Route::get('/', ['uses'=>'VideoAdminController@execute', 'as'=>'video']);

		//admin/edit/price
		Route::match(['get', 'post', 'delete'], '/edit/video', ['uses'=>'VideoEditAdminController@execute', 'as'=>'videoEdit']);

	});
		
});


// Route::auth();

// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
