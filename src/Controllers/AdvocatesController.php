<?php


namespace ForOverReferralsLib\Controllers;

use GeniusReferralsLib\APIException;
use GeniusReferralsLib\APIHelper;
use GeniusReferralsLib\Configuration;
use GeniusReferralsLib\Models;
use GeniusReferralsLib\Exceptions;
use GeniusReferralsLib\Http\HttpRequest;
use GeniusReferralsLib\Http\HttpResponse;
use GeniusReferralsLib\Http\HttpMethod;
use GeniusReferralsLib\Http\HttpContext;
use Unirest\Request;

class AdvocatesController
{

    public function __construct($test = null) {

        var_dump($test);
        die();
    }

    /**
     * @var AdvocatesController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AdvocatesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static(12);
        }
        
        return static::$instance;
    }
}
