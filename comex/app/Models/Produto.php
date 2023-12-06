<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nome','descricao','precoUnitario','qtdEstoque','categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder){
            $queryBuilder->orderBy('nome');
        });
    }
}
