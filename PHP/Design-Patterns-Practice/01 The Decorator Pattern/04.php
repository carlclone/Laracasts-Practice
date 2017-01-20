<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 12:25
 */

namespace Acme;


class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('turn the nook on');
    }

    public function  pressNextButton()
    {
        var_dump('press the next button on the nook');
    }
}