<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 27/05/2018
 * Time: 11:12
 */


class Disease
{
    public $name;
    public $type;
    public $meridian;

    /**
     * Construct
     */
    public function __construct($name, $type, $meridian)
    {
        $this->name = $name;
        $this->type = $type;
        $this->meridian = $meridian;
    }
}
