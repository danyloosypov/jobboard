<?php

namespace App\Models;

use App\FastAdminPanel\Models\MultilanguageModel;
use App\Models\Vacancy;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
		'id_vacancies',
		'cv',
		'id_employees',
		'cover',
		'datetime',
	];

    #region Relationships

	public function vacancy() 
	{
		return $this->belongsTo(Vacancy::class, 'id_vacancies');
	}

	public function employee() 
	{
		return $this->belongsTo(Employee::class, 'id_employees');
	}

	#endregion
}