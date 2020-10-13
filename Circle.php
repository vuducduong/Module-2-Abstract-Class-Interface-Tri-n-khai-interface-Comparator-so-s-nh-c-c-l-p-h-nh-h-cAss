<?php


class Circle
{
    protected $radius;
    protected $name;

    public function __construct($radius,$name){
        $this->radius=$radius;
        $this->name=$name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

}