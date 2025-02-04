<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'clients';

    protected $fillable = [
        'firstName', 'lastName', 'email', 'company', 'phone', 'country'
    ];
}
