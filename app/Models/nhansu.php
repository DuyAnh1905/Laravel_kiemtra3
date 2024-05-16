<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhansu extends Model
{
  
    use HasFactory;
    protected $table ='nhansu';
    public $timestamps =false;
    protected $fillable =[
        'name','giothieu', 'bangcap','ttnggith','cakinang','kinhngiem','image',
    ];
    public function team(){
        return $this->belongsTo(team::class);
    }
}
    // 

