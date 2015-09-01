<?php


function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0)
    {
        return $flash;
    }

    return $flash->info($title, $message); // the default i.e: flash('Hello World!', 'this is the message');
}