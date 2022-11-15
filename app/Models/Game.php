<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden solicitar.
     * @var array<int, string>
     */
    protected $fillable = [
        'game_id',
        'game_user_id',
        'game_subjet_id',
        'game_difficult_id',
        'game_title',
        'game_description',
        'game_score',
        'game_rate',
        'game_quantity_items',
        'game_time_item',
        'game_complete'
    ];

    /**
     * Nombre de la tabla asociada al modelo.
     * @var string
     */
    protected $table = 'games';

    /**
     * LlavePrimaria asociada a la tabla.
     * @var string
     */
    protected $primaryKey = 'game_id';

    /**
     * Obtener el empleado relacionado a la nota.
     */
    public function subjet()
    {
        return $this->hasMany(Subjet::class,'game_subjet_id','subjet_id'); //primero se declara FK y despues la PK
    }
    /**
     * Obtener la mesa relacionado a la nota.
     */
    public function difficult()
    {
        return $this->hasMany(Difficult::class,'game_difficult_id','difficult_id'); //primero se declara FK y despues la PK
    }

    /**
     * Obtener usuario asociado con la partida.
     */
    public function user()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(User::class,'game_user_id','id');
    }

    /**
     * Valores defualt para los campos especificados.
     * @var array
     */
    // protected $attributes = [
    //     'role_active' => true,
    // ];
}
