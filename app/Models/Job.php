<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'NGO',
        'title',
        'email',
        'location',
        'ngo_logo',
        'website',
        'description'
    ];

    // scout searchable
    public function toSearchableArray(){

        return [

            'title' => $this->title,

            'description' => $this->description

        ];
    }
}
