<?php

namespace Biggo6\Iztools\Controllers;
use App\Http\Controllers\Controller;

class IztoolsController extends Controller{

	public function foo(){
		// Init
	    $page_title      = '2 Bananas';
	    $welcome_message = 'Welcome! Welcome! Have 2 bananas.';
	 
	    $data = compact('page_title', 'welcome_message');
	    return view('iztools::welcome', $data);
	}

}

