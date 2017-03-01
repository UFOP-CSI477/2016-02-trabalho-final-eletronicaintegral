<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    protected $fillable = [
        'id', 'defeito', 'data_nota_fiscal', 'numero_nota_fiscal', 'orcamento', 'status', 'tecnico',
        'data_entrada', 'data_saida', 'aprovacao', 'peca', 'servico', 'observacao', 'user_id',
        'name', 'marca', 'estado', 'modelo',
    ];

    protected $hidden = [
        'id',
    ];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
