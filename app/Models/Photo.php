<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'WxH',
        'is_active',
        'post_id',
        'credential_id',
        'home_page_id',


    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function companycredential()
    {
        return $this->belongsTo(CompanyCredential::class);
    }

    public function homePage()
    {
        return $this->belongsTo(HomePage::class);
    }


    protected $uploads = '/';
    public function getFileAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
