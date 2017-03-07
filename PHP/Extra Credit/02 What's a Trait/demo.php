<?php
/**
 * Created by PhpStorm.
 * User: sierra
 * Date: 06/02/2017
 * Time: 4:10 PM
 */

// A method for code reuse

trait OwnerTrait {
    public function owner()
    {
        //...
    }
}

class Thread {
    use OwnerTrait;
}

class Comment {
    use OwnerTrait;
}

var_dump((new Thread->owner()));


// But when is proper way to use trait ?