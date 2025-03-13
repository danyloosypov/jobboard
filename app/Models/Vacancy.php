<?php

namespace App\Models;

use App\FastAdminPanel\Models\MultilanguageModel;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_employers',
        'id_vacancy_categories',
		'title',
        'city',
		'description',
		'is_active',
    ];

    #region Relationships

    public function employer()
	{
		return $this->belongsTo(Employer::class, 'id_employers');
	}

    public function category()
    {
        return $this->belongsTo(VacancyCategory::class, 'id_vacancy_categories');
    }

    public function filterFields()
    {
        return $this->belongsToMany(FilterField::class, 'vacancies_filter_fields', 'id_vacancies', 'id_filter_fields');
    }

    #endregion
}
