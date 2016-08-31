<?php namespace Farhatabbas\Faye\Facade; //VendorName\PackageName\Facade

use Illuminate\Support\Facades\Facade;

class Faye extends Facade {

    protected static function getFacadeAccessor() { return 'faye'; }

}
