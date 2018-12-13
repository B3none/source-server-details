<?php

namespace B3none\ServerDetails;

use B3none\ServerDetails\Helpers\ServerHelper;
use B3none\ServerDetails\Models\ServerModel;

class Client
{
    public static function create()
    {
        return new self(new ServerHelper());
    }

    /**
     * @var ServerHelper
     */
    protected $serverHelper;

    /**
     * Client constructor.
     *
     * @param ServerHelper $serverHelper
     */
    public function __construct(ServerHelper $serverHelper)
    {
        $this->serverHelper = $serverHelper;
    }

    /**
     * @param string $ip
     * @param string $port
     * @return null|ServerModel
     * @throws \Exception
     */
    public function getServer(string $ip, string $port): ?ServerModel
    {
        try {
            return $this->serverHelper->getServerDetails($ip, $port);
        } catch (\Exception $exception) {
            return null;
        }
    }
}