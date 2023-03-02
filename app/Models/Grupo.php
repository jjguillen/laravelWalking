<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Sendero;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Grupo extends Model
{
    use HasFactory;


    public function componentes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_grupo');
    }

    public function senderosRealizados(): BelongsToMany 
    {
        return $this->belongsToMany(Sendero::class, 'sendero_grupo');
    }

}
