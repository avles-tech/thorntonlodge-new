<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    protected $fillable = [
        'category_id',
        'name',
        'position',
        'image',
        'description',
        'order',
        'status',
        'qualification',
        'bio'
    ];

    public function category()
    {
        return $this->belongsTo(StaffCategory::class, 'category_id');
    }
}
