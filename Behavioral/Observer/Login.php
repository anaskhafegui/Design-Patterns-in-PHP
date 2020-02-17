<?php

namespace DesignPatternsInPHP\Behavioral\Observer;

class Login implements Subject
{
   protected $Observers=[];

   public function attach($Observable)
   {
       if (is_array($Observable))
       {
           return; $this->attachobservers($Observable);
       }
       $this->Observers[]=$Observable;

       return $this;
   }
   public function detach($index)
   {
        unset($this->Observers[$index]);
   }
    public function notify()
    {
        foreach ($this->Observers as $Observer)
        {
          $Observer->handle();
        }
    }

    /**
     * @param $Observable
     */
    public function attachobservers($Observable)
    {
        foreach ($Observable as $Observer) {
            if (!$Observable instanceof Observer) {
                Throw new Exception;
            }
            $this->attach($Observer);
        }
    }
    public function fire()
    {
        // peform login
        $this->notify();
    }

}