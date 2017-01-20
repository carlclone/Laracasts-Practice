<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 13:25
 */

// Think it as an Basic Event System , Exactly How Laravel thinks it
// You can use Dependencies injection , but this object should not aware of any knowledge about Observer


interface Subject { //Publisher
    public function attach(Observer $observer);
    public function detach($observer);
    public function notify();
}

interface Observer { //Subscriber or Listener
    public function handle();
}

class Login implements Subject {

    protected $observers = [];

    public function attach($observable)
    {
        if (is_array($observable))
        {
            foreach ($observable as $observer)
            {
                if(! $observer instanceof Observer)
                    throw new Exception;

                $this->attach($observer);
            }
            return; //abort
        }
        $this->observers[] = $observer;
        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->handle();
        }

    }
}

class LogHandler implements Observer {
    public function handle()
    {
        var_dump('log something important');
    }
}

class EmailHandler implements Observer {
    public function handle()
    {
        var_dump('fire off an email');
    }
}

$login = new Login;
$login->attach([
    new LogHandler,
    new EmailHandler
]);