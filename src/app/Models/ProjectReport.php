<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectReport extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'problem_analysis',
        'system_requirements',
        'architecture',
        'tech_stack',
        'progress_status',
        'diagram_image',
    ];
}
