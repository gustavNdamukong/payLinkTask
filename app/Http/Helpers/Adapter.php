<?php

namespace App\Http\Helpers;

use Exception;

trait Adapter
{

    private $callingClass = '';


    public function __construct()
    {
        $this->callingClass = get_class($this);
    }


    /**
     * @param $property
     * @param $value
     * @throws Exception
     */
    public function __set($property, $value)
    {
        if (property_exists($this->callingClass, $property)) {
            $this->callingClass->{$property} = $value;
        }
        else
        {
            throw new Exception("Cannot set value. Property {$property} does not exist");
        }
    }


    /**
     * @param $property
     * @return mixed
     * @throws Exception
     */
    public function __get($property)
    {

        if (property_exists($this->callingClass, $property)) {
            return $this->callingClass->{$property};
        }
        else
        {
            throw new Exception("Cannot get value of the property {$property}, because it does not exist");
        }
    }


}
