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
        'item_round_id',
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
     * Obtener la ronda asociado con el item.
     */
    public function round()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Round::class,'round_id','item_round_id');
    }

    /**
     * Obtener tipo de pregunta asociado con el item.
     */
    public function type_question()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Type_question::class,'tq_id','item_tq_id');
    }

    /**
     * Obtener la partida asociado con la dificultad.
     */
    public function answer()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->hasMany(Answer::class,'answer_item_id','item_id');
    }
}
