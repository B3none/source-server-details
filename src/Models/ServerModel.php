<?php

namespace B3none\ServerDetails\Models;

class ServerModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $map;

    /**
     * @var string
     */
    protected $game;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $players;

    /**
     * @var int
     */
    protected $maxPlayers;

    /**
     * @var int
     */
    protected $bots;

    /**
     * @var bool
     */
    protected $isDedicated;

    /**
     * @var string
     */
    protected $os;

    /**
     * @var bool
     */
    protected $hasPassword;

    /**
     * @var bool
     */
    protected $hasVAC;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param string $map
     */
    public function setMap($map)
    {
        $this->map = $map;
    }

    /**
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param string $game
     */
    public function setGame($game)
    {
        $this->game = $game;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param int $players
     */
    public function setPlayers($players)
    {
        $this->players = $players;
    }

    /**
     * @return int
     */
    public function getMaxPlayers()
    {
        return $this->maxPlayers;
    }

    /**
     * @param int $maxPlayers
     */
    public function setMaxPlayers($maxPlayers)
    {
        $this->maxPlayers = $maxPlayers;
    }

    /**
     * @return int
     */
    public function getBots()
    {
        return $this->bots;
    }

    /**
     * @param int $bots
     */
    public function setBots($bots)
    {
        $this->bots = $bots;
    }

    /**
     * @return bool
     */
    public function isDedicated()
    {
        return $this->isDedicated;
    }

    /**
     * @param bool $isDedicated
     */
    public function setIsDedicated($isDedicated)
    {
        $this->isDedicated = $isDedicated;
    }

    /**
     * @return string
     */
    public function getOS()
    {
        return $this->os;
    }

    /**
     * @param string $os
     */
    public function setOS($os)
    {
        $this->os = $os;
    }

    /**
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->hasPassword;
    }

    /**
     * @param bool $hasPassword
     */
    public function setHasPassword($hasPassword)
    {
        $this->hasPassword = $hasPassword;
    }

    /**
     * @return bool
     */
    public function getHasVAC()
    {
        return $this->hasVAC;
    }

    /**
     * @param bool $hasVAC
     */
    public function setHasVAC($hasVAC)
    {
        $this->hasVAC = $hasVAC;
    }
}