<?php

namespace DesignPatternsInPHP\Creational\ProtoType;

abstract class AbstractCarProtoType
{
   protected $model;

   Private $flag;

   abstract function __clone();

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param mixed $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

}