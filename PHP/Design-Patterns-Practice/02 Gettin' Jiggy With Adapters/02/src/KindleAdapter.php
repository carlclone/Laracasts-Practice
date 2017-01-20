<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 11:17
 */
require 'vendor/autoload.php';

use Acme\Book;
use Acme\BookInterface;

class Person {
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new eReaderAdapter(new Kindle));