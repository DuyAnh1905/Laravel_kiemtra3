<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $table ='team';
    public $timestamps =false;
    protected $fillable =[
        'name','is_active'
    ];
    public function nhansu(){
        return $this->hasMany(nhansu::class);
    }
}
//     public function nhansu(){
//         return $this->belongsTo(nhansu::class);
//     }
//     public function getteam(){
//         $team= team::all();
//        return view('team',compact('team'));
//     }
//     public function index(){
//         $Post = Category::with('nhansu')->get();
//         return view('nhansu.index',compact('nhansu'));
//     }
// }
