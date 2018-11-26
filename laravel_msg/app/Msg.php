<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    //
    protected $table = 'msgs';

    protected $fillable = ['title', 'content'];

//    public $title, $content;

    public $timestamps = true;

    public function getDateFormat()
    {
        return time();
    }


    public function fromDateTime($val)
    {
        return $val;
    }

    protected function asDateTime($val)
    {
        return $val;
    }
}
