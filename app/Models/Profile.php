<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'description', 'github_link', 'linkedin_link', 'twitter_link', 'facebook_link'];
}
