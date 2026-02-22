<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'section_title',
        'parent_section',
        'display_type',
        'is_active',
        'description',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function staffs()
    {
        return $this->hasMany(Staff::class, 'category_id');
    }
}
