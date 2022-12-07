<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difficult extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden solicitar.
     * @var array<int, string>
     */
    protected $fillable = [
        'difficult_id',
        'difficult_name',
        'difficult_score'
    ];

    /**
     * Nombre de la tabla asociada al modelo.
     * @var string
     */
    protected $table = 'difficults';

    /**
     * LlavePrimaria asociada a la tabla.
     * @var string
     */
    protected $primaryKey = 'difficult_id';

    /**
     * Obtener la partida asociado con la dificultad.
     */
    public function game()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Game::class,'game_difficult_id','difficult_id');
    }
    public function round()
    {
        return $this->hasMany(Round::class, 'round_difficult_id', 'difficult_id');
    }
}
