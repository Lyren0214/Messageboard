<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messageboard extends Model
{
    protected $table = 'message';

    public $timestamps = true;

    public function getDateFormat()
    {
        return time();
    }

    public function asDateTime($value)
    {
        return $value;
    }
}