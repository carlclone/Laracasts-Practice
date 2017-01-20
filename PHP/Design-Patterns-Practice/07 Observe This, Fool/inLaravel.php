<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 17:03
 */

//in Route.php
Event::listen('user.login',function()
{
 var_dump('fire off an email');
});

Event::listen('user.login',function()
{
    var_dump('do some reporting');
});

get('/',function(){
    Event::fire('user.login');
});

//in Controller

//route.php
$route->get('/',HomeController@index);

//HomeController.php       ==>>>Subject or Publisher
public function index(Dispatcher $dispatcher)
{
    $dispatcher->fire('UserHasLoggedIn');
}

//Listeners/EmailNotifier.php           ==>>>Listener or Subscriber
class EmailNotifier {
    public function handle()
    {
        var_dump('fire off an email');
    }
}

//Providers/EventServiceProvider.php

class EventServiceProvider extends ServiceProvider {
    protected $listen = [
      'UserHasLoggedIn'=>[
          'App\Listeners\EmailNotifier',
      ]  ,
    ];
}

// php artisan example

php artisan event:scan  //Scan a directory for event **annotations**

class EmailNotifier {
    /**
     * @hears(""UserHasLoggedIn)
     */
    public function handle()
    {
        var_dump('fire off an email');
    }
}

//then automatically write into EventServiceProvider $listen