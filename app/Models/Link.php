<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cv;

class Link extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'link_domaine',
        'link_content',
        'cv_id'
    ];
    


    public function Cv()
    {
        return $this->belongsTo(Cv::class);
    }
  
}
