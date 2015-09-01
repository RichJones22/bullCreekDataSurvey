<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'surveys';

    protected $fillable = [
        'name',
        'email',
        'website',
        'message'
    ];

    public function survey()
    {
        return $this->all();
    }



}
