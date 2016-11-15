<?php

namespace Biggo6\Iztools;

class Iztools {
	public static function sayHello(){
		return trans('iztools::messages.greeting');
		//return config('iztools.message');
	}
}