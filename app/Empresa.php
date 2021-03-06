<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use DB;

class Empresa extends Model
{
    
    protected $fillable = array('razon_social', 'sector_economico', 'ciudad_id', 'direccion', 'tel', 'email', 'nombres_contacto', 'apellidos_contacto', 'tel_contacto', 'cel_contacto', 'email_contacto');

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad');
    }

    public function get_score($id){
    	
        
        $results = array();

        $evaluaciones = DB::table('evaluaciones')
            ->join('eval_items', 'eval_items.evaluacion_id', '=', 'evaluaciones.id')
            ->join('items', 'items.id', '=', 'eval_items.item_id')
            ->select('items.id', 'items.nombre', 'items.categoria_id', DB::raw('round((sum(eval_items.puntaje)/count(items.id)), 2 ) as promedio'))
            ->where('evaluaciones.empresa_id', '=', $id)
            ->groupBy('items.id')->get();
       

        return $evaluaciones;
    }
}
