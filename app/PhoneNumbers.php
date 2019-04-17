<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumbers extends Model
{
    protected $fillable = ['number', 'contact_id'];
}
