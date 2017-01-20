<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 11:34
 */
namespace Acme;

interface eReaderInterface
{
    public function turnOn();

    public function pressNextButton();
}