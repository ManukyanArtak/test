<?php

namespace ForOverReferralsLib;

use ForOverReferralsLib\Controllers\AdvocatesController;

/**
 * InfluenceClient client class
 */
class InfluenceClient
{
    /**
     * @var mixed|null
     */
    private $authToken;

    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($AuthToken = null) {

        $this->authToken = $AuthToken;
    }



    /**
     * Singleton access to Advocates controller
     */
    public function getAdvocates()
    {
        return AdvocatesController::getInstance();
    }

}
