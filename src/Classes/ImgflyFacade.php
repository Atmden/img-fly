<?php

namespace AtmDen\ImgFly\Classes;


use Illuminate\Support\Facades\Facade;

class ImgflyFacade extends Facade
{

	protected static function getFacadeAccessor()
	{
		return new ImgFly();
	}

}
