<?php

namespace App\Models;

use App\FastAdminPanel\Models\MultilanguageModel;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_employers',
		'title',
		'description',
		'job_type',
		'job_base',
		'is_active',
    ];

    #region Relationships

    public function employer()
	{
		return $this->belongsTo(Employer::class, 'id_employers');
	}

    #endregion
}
