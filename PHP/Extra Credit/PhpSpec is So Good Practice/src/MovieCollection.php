<?php

class MovieCollection implements Countable
{
    protected $collection;

    public function add($movie)
    {
        if (is_array($movie)) {
            return array_map([$this, 'add'], $movie);
        }
        /*
         * another version
         if(is_array($movie)) {
            foreach ($movie as $value) {
                $this->add($value);
            }
            return ;
        }
         */
        $this->collection[] = $movie;
    }


    public function count()
    {
        return count($this->collection);
    }

    public function markALLAsWatched()
    {
        foreach($this->collection as $movie)
        {
            $movie->watch();
        }
    }
}
