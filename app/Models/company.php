<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','address','updated_at', 'deleted_at'
    ];


    // Scopes...

    // Functions ...

    // Relations ...

}
