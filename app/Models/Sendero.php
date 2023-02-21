<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Grupo;

class Sendero extends Model
{
    use HasFactory;


    public function grupos(): BelongsToMany {
        return $this->belongsToMany(Grupo::class, 'sendero_grupo');
    }

}
