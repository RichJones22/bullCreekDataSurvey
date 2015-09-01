<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'surveys';

    /**
     * Fillable fields for a Survey.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'website',
        'message'
    ];

    // currently this app only has one table, Surveys.  Surveys has not relationships


}
