<?php
/**
 * Created by PhpStorm.
 * User: bp
 * Date: 7/3/21
 * Time: 11:23 AM
 */
namespace Peter\FootballAPI\Facades;

use Illuminate\Support\Facades\Facade;

class FootballAPIFacades extends Facade
{
    protected static function getFacadeAccessor() { return 'football'; }
}