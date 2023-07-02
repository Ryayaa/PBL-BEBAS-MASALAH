<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function programstudi()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
