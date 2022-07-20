<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','profile_img','position','experience','languages','github_link','linkedin_link','password',
    'about'];

    // search method
    public function scopeFilter($query, array $filters){
        
        // if($filters['language'] ?? false){ // in case tags
        //     $query->where('languages', 'like', '%' . request('language') . '%');
        // }

        if($filters['query'] ?? false){
            $query->where('languages', 'like', '%' . request('query') . '%');
        }
    }
}
