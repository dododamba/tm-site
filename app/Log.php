<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['action', 'adresseIp', 'location', 'user', 'table','logger_token'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
