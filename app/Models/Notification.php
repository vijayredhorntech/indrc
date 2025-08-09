<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['notification_title', 'notification_description', 'notification_date', 'publication_date', 'notification_end_date', 'notification_file'];


    protected function casts()
    {
        return [
            'notification_date' => 'date',
            'publication_date' => 'date',
            'notification_end_date' => 'date',
        ];
    }
}
