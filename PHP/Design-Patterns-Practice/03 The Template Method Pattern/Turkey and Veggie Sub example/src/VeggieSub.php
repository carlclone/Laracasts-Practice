<?php namespace App;
    /**
     * Created by PhpStorm.
     * User: sierra
     * Date: 20/01/2017
     * Time: 11:52 AM
     */

// Define the program skeleton of an algorithm in a method,called template method,which defers some steps to subclasses.

require 'vendor/autoload.php';

class VeggieSub extends Sub{



    //addVeggies to PrimaryTopping
    public function PrimaryTopping()
    {
        var_dump('add veggies');
        return $this;
    }



}