<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MgmtRecord extends Model
{
    protected $table = 'mgmt_records';
    protected $fillable = [
        'title', 'description', 'tags'
    ];
    protected $casts = [
        'tags' => 'array',
    ];
}