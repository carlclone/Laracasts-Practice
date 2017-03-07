<?php
/**
 * Created by PhpStorm.
 * User: sierra
 * Date: 20/01/2017
 * Time: 2:13 PM
 */

// you will use it over and over
//define a family algorithm , encapsulate each one ,and makes them interchangeable

//Steps
//1.Define a family of algorithms
//2.encapsulate and make them interchangeable

//Example
//Log file to database,file,cloudserver(different strategy)

interface Logger {
    public function log($data);
}

class LogToFile implements Logger{
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger{
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToXWebService implements Logger{
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

3:25秒  04 Pick a Strategy

