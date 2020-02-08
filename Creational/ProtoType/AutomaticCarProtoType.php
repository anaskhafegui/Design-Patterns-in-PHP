<?php

namespace DesignPatternsInPHP\Creational\ProtoType;

class AutomaticCarProtoType extends AbstractCarProtoType
{
    protected $model='Automatic';

   public function __clone()
   {
       // TODO: Implement __clone() method.
   }
}