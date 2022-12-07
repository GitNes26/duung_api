<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'round_id',
        'round_name',
        'round_subjet_id',
        'round_difficult_id',
        'round_quantity_items',
        'round_correct_min'
    ];

    /**
     * Nombre de la tabla asociada al modelo.
     * @var string
     */
    protected $table = 'rounds';

    /**
     * LlavePrimaria asociada a la tabla.
     * @var string
     */
    protected $primaryKey = 'round_id';

    /**
     * Obtener la materia asociado con la rounda.
     */
    public function subjet()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Subjet::class,'subjet_id','round_subjet_id');
    }

    /**
     * Obtener la dificultad asociado con la rounda.
     */
    public function difficult()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Difficult::class,'difficult_id','round_difficult_id');
    }

    // /**
    //  * Obtener los items asociados con la ronda.
    //  */
    public function item()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->hasMany(Item::class,'item_round_id','round_id');
    }

    public function games()
    {
        return $this->hasMany(Game::class,'game_round_id','round_id');
    }
}
