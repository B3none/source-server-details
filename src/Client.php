<?php

namespace B3none\ServerDetails;

use B3none\Helpers\ServerHelper;
use B3none\ServerDetails\Models\ServerModel;

class Client
{
    /**
     * @var ServerHelper
     */
    private $serverHelper;

    /**
     * Client constructor.
     *
     * @param ServerHelper $serverHelper
     */
    public function __construct(ServerHelper $serverHelper)
    {
        $this->serverHelper = $serverHelper;
    }

    public function getServer(): ServerModel
    {
        print_r($this->serverHelper->getServerDetails());
    }
}