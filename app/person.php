<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'pid';
}
