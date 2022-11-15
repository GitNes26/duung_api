<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'answer_id',
        'answer_item_id',
        'answer_text',
        'answer_correct',
    ];

    /**
     * Nombre de la tabla asociada al modelo.
     * @var string
     */
    protected $table = 'answers';

    /**
     * LlavePrimaria asociada a la tabla.
     * @var string
     */
    protected $primaryKey = 'answer_id';

    /**
     * Obtener el item asociado con la respuesta.
     */
    public function game()
    {   //primero se declara FK y despues la PK del modelo asociado
        return $this->belongsTo(Item::class,'answer_item_id','item_id');
    }
}
