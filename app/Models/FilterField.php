<?php

namespace App\Models;

use App\FastAdminPanel\Models\MultilanguageModel;
use App\Models\Filter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterField extends MultilanguageModel
{
    use HasFactory;

    protected $table = 'filter_fields';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
		'slug',
		'id_filters',
    ];

    #region Relationships
    
    public function filter() 
	{
		return $this->belongsTo(Filter::class, 'id_filters');
	}

    #endregion
}