<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
	protected $table = 'novedades';

	protected $fillable = [
    	'title_es', 'subtitle_es', 'text_es',
    	'title_en', 'subtitle_en', 'text_en',
    	'title_br', 'subtitle_br', 'text_br',
    	'image', 'date', 'order', 'route',
	];
}
