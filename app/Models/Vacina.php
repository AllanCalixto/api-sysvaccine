<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 10/03/2020
 * Time: 23:09
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    protected $fillable = [
        'nome',
        'dose',
        'descricao'
    ];

    public $timestamps = false;
}