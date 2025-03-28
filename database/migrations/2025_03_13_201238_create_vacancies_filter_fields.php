<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies_filter_fields', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger("id_vacancies");
			$table->unsignedBigInteger("id_filter_fields");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies_filter_fields');
    }
};
