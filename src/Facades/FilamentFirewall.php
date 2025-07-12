<?php

namespace Afsdarif\FilamentFirewall\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Collection;

/**
 * @method static Collection getWhiteList()
 * @method static bool withinWhiteList($ip)
 * @method static Collection getBlackList()
 * @method static bool withinBlackList($ip)
 * @method static string getFirewallIpModel()
 * 
 * @see \Afsdarif\FilamentFirewall\FilamentFirewall
 */
class FilamentFirewall extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Afsdarif\FilamentFirewall\FilamentFirewall::class;
    }
}
