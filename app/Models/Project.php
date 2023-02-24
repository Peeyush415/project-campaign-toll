<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['project_name', 'open_cost', 'target_opens', 'click_cost', 'target_clicks', 'status'];

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }


}
