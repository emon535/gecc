<?php

namespace App\Models\Admin\FAQ;

use Illuminate\Database\Eloquent\Model;

class FrequentlyAskQuestion extends Model
{
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

    protected $fillable = [
        'question', 'answer', 'position', 'status', 'created_by', 'updated_by'
    ];
}