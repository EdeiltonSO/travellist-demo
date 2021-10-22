<?php
namespace App;
use Jenssegers\Mongodb\Eloquent\Model;

class Place extends Model
{
    // protected $connection = 'sqlite';
    // protected $primaryKey = 'uuid';
    // protected $table = 'places2';

    //Para converter tipos
    // protected $casts = [
    //     'visited' => 'integer',
    // ];

    //Para definir valores padrão
    // protected $attributes = [
    //     'visited' => 0,
    // ];

    // Para proteger os atributos
    // protected $guarded = [
    //     'visited',
    // ];

    protected $fillable = [
        'name', 'visited', 'user_id',
    ];

    // protected $timestamp = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}

// App\Place(['name' => 'Cuiaba', 'visited' => 0, 'user_id' => $user->id]);
/**
 * $user = App/User::find($id);
 * $user->place()->create(['name' => 'Cuiaba', 'visited' => 0]);
 *
 * $user->place //Obter a relação
 */
