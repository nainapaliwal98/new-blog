<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ccustomer extends Model
{
    protected $table = "ccustomer";
    protected $primaryKey = "customer_id"; // Note the correct spelling of primaryKey

    public function setUserNameAttribute($value)
    {
        $this->attributes['user_name'] = ucwords($value);
        // Mutator is used for capitalising the data during submitting the data using set attribute
        // Accessor is used when want to access the data using get attribute 
    }
}

