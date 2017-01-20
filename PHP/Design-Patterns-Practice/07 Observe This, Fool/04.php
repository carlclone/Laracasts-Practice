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
    public function attach($observable);
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
            $this->attachObservers($observable);
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

    public function fire()
    {
        //perform the login
        $this->notify();
    }

    /**
     * @param $observable
     * @throws Exception
     */
    public function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer)
                throw new Exception;

            $this->attach($observer);
        }
        return; //abort
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

class LoginReporter implements Observer {
    public function handle()
    {
        var_dump('do some reporting');
    }
}

$login = new Login;
$login->attach([
    new LogHandler,
    new EmailHandler,
    new LoginReporter
]);

//Dont't forget that the Subject behavior may be extracted to a trait to DRY up your code

$login->fire();