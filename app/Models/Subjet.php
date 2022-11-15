<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjet extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden solicitar.
     * @var array<int, string>
     */
    protected $fillable = [
        'subjet_id',
        'subjet_name',
    ];

    /**
     * Nombre de la tabla asociada al modelo.
     * @var string
     */
    protected $table = 'subjets';

    /**
     * LlavePrimaria asociada a la tabla.
     * @var string
     */
    protected $primaryKey = 'subjet_id';

    /**
     * Obtener la partida asociado con la materia.
     */
    public function game()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Game::class,'game_subjet_id','subjet_id');
    }
}
