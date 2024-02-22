<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebchatSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal',
        'data_collect',
        'answers_settings',
        'message_headline',
        'disclaimer_notice',
        'disclaimer_description',
        'welcome_message',
    ];

    // WebchatSetting model

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
