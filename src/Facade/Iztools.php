<?php


namespace Biggo6\Iztools\Facade;

use Illuminate\Support\Facades\Facade;

class Iztools extends Facade{
	protected static function  getFacadeAccessor(){
		return 'iztools';
	}
}