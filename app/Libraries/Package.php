<?php

namespace App\Libraries;

class Package
{
    private $id;
    private string $name;
    private $price;
    private $bandwidth;
    private $every;
    private $totalips;

    public function __construct($id, string $name, $price, $bandwidth, $every, $totalips){
        $this->name = $name;
        $this->price = $price;
        $this->bandwidth = $bandwidth;
        $this->every = $every;
        $this->id = $id;
        $this->totalips = $totalips;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getBandwidth()
    {
        return $this->bandwidth;
    }

    /**
     * @param mixed $bandwidth
     */
    public function setBandwidth($bandwidth): void
    {
        $this->bandwidth = $bandwidth;
    }

    /**
     * @return mixed
     */
    public function getEvery()
    {
        return $this->every;
    }

    /**
     * @param mixed $every
     */
    public function setEvery($every): void
    {
        $this->every = $every;
    }

    /**
     * @return mixed
     */
    public function getTotalips()
    {
        return $this->totalips;
    }

    /**
     * @param mixed $totalips
     */
    public function setTotalips($totalips): void
    {
        $this->totalips = $totalips;
    }

}
