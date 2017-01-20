<?php namespace App;
/**
 * Created by PhpStorm.
 * User: sierra
 * Date: 20/01/2017
 * Time: 12:31 PM
 */

anstract class Sub {
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    public function layBread()
    {
        var_dump('laying down the bread');
        return $this;
    }

    public function addLettuce()
    {
        var_dump('add some lettuce');
        return $this;
    }

    public function addSauces()
    {
        var_dump('add sauces');
        return $this;
    }

    protected abstract function PrimaryTopping();
    //abstract makes any subclass is require to offer this method
}