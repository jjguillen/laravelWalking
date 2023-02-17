<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Grupo extends Model
{
    use HasFactory;


    public function componentes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_grupo');
    }
}
