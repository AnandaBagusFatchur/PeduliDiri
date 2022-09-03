<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Perjalanan extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    protected $table = 'perjalanans';
    protected $fillable = ['id', 'user_id', 'tanggal', 'waktu', 'lokasi', 'suhu']; 
    public $timestamps = true;
}
