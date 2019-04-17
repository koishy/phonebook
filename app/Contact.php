<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        "name",
        "job",
        "comment",
        "email",
        "category"
    ];

    public function numbers()
    {
        return $this->hasMany(\App\PhoneNumbers::class);
    }

    public function formattedCategory()
    {
        $formatted = [
            "tech" => "Computers / tech",
            "it" => "IT",
            "health" => "Health & Care",
            "art" => "Art",
            "music" => "Music",
            "other" => "Other"
        ];

        return $formatted[$this->category];
    }
}
