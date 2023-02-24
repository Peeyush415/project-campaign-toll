<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'campaign_name',
        'opens',
        'clicks',
        'status',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
