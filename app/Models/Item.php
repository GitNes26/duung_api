<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'item_id',
        'item_game_id',
        'item_tq_id',
        'item_question',
        'item_time',
        'item_used'
    ];

    /**
     * Nombre de la tabla asociada al modelo.
     * @var string
     */
    protected $table = 'items';

    /**
     * LlavePrimaria asociada a la tabla.
     * @var string
     */
    protected $primaryKey = 'item_id';

    /**
     * Obtener partida asociado con el item.
     */
    public function game()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Game::class,'item_game_id','game_id');
    }

    /**
     * Obtener tipo de pregunta asociado con el item.
     */
    public function type_question()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Type_question::class,'item_tq_id','tq_id');
    }

    /**
     * Obtener la partida asociado con la dificultad.
     */
    public function answer()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->hasMany(Answer::class,'item_answer_id','answer_id');
    }
}
