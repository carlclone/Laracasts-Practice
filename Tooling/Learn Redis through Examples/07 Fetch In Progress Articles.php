<?php
/**
 * Created by PhpStorm.
 * User: sierra
 * Date: 20/02/2017
 * Time: 10:29 AM
 */

class LessonsController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();

        // zrevrange user.1.inProgress 0 -1 WITHSCORES
        $inProgressIds = Redis::zrevrange('user.1.inProgress', 0, 2);



        $inProgress = collect($inProgressIds)->map(function ($id) {
            return Lesson::find($id);
        });

        return view('lesson.index', compact('lesson','inProgress'));
    }

    public function show(Lesson $lesson)
    {
        //Push to Redis,
        //List => PHP array,
        //Set => Unique,
        //Set =>Sorted Set

        // score examples  : timestamp  time()
        //zadd : if the item already exist, it simply updates the score
        Redis::zadd('user.1.inProgress',time(),$lesson->id);
        return view('lessons.show',compact('lesson'));
    }
}

