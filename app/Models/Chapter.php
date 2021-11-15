<?php

namespace App\Models;

use App\Models\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;
    protected $table = 'chapter';
    protected $timestamp = false;
    protected $fillable = ['name', 'content','time', 'trainingId'];

    public function getChapters(){
        return $this->belongsTo(Training::class, 'id', 'trainingId');
    }

    
}
