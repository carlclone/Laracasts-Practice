<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 11:35
 */

namespace Acme;


class eReaderAdapter implements BookInterface
{
    private $reader;
    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}