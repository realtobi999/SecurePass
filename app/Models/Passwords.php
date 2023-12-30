<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passwords extends Model
{
    use HasFactory;

    public $fillable = [
        "user_id",
        "website",
        "username",
        "password",
        "uri",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public $hidden = [
        "password",
    ];

    public $casts = [
        "password" => "encrypted",
        "username" => "encrypted",
        "website" => "encrypted",
    ];

    // Only add "https://" if $value is not null and does not already start with "https://"
    public function setUriAttribute($value)
    {
        if ($value !== null && strpos($value, 'https://') !== 0) {
            $this->attributes['uri'] = 'https://' . $value;
        } else {
            $this->attributes['uri'] = $value;
        }
    }

}
