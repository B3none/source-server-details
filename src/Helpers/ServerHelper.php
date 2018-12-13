<?php

namespace B3none\ServerDetails\Helpers;

use B3none\ServerDetails\Models\ServerModel;

class ServerHelper
{
    /**
     * @param string $ip
     * @param string $port
     * @return ServerModel
     * @throws \Exception
     */
    public function getServerDetails(string $ip, string $port): ServerModel
    {
        $socket = socket_create(AF_INET, SOCK_DGRAM, 0);
        $result = socket_connect($socket, $ip, $port);

        if ($result < 0) {
            throw new \Exception('Failed to connect. Reason: '.$result);
        }

        $data = "\xFF\xFF\xFF\xFF\x54\x53\x6F\x75\x72\x63\x65\x20\x45\x6E\x67\x69\x6E\x65\x20\x51\x75\x65\x72\x79\x00";
        socket_write($socket, $data, strlen($data));

        $out = socket_read($socket, 4096);

        $queryData = explode("\x00", substr($out, 6), 5);

        print_r($queryData);
        die();

        $server = new ServerModel();

        $server->setName($queryData[0]);
        $server->setMap($queryData[1]);
        $server->setGame($queryData[2]);
        $server->setDescription($queryData[3]);
        $server->setTags(explode(',', $queryData[4]));
        $server->setAppId(array_pop(unpack("S", substr($packet, 0, 2))));
        $server->setPlayers(ord(substr($packet, 2, 1)));
        $server->setMaxPlayers(ord(substr($packet, 3, 1)));
        $server->setBots(ord(substr($packet, 4, 1)));
        $server->setIsDedicated(substr($packet, 5, 1));
        $server->setOS(substr($packet, 6, 1));
        $server->setHasPassword(ord(substr($packet, 7, 1)));
        $server->setHasVAC(ord(substr($packet, 8, 1)));

        return $server;
    }
}