<?php

namespace Modules\Landing\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkOther extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    private static $data_work_other = [
        "title" => "Project No. 7",
    ];

    protected static function newFactory()
    {
        return \Modules\Landing\Database\factories\WorkOtherFactory::new();
    }
}
