<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelcomeEmail extends Model
{
    protected $table = 'welcome_emails';

    protected $fillable = ['template', 'to', 'subject', 'user_id', 'created_at', 'updated_at'];
}
