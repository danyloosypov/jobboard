<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\FastAdminPanel\Models\Language;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		$languages = Language::get();

		foreach ($languages as $lang) {

			Schema::create("filter_fields_{$lang->tag}", function (Blueprint $table) {
			$table->id();
			$table->string("title");
			$table->string("slug");
			$table->unsignedBigInteger("id_filters");
			$table->timestamp("created_at")->default(\DB::raw("CURRENT_TIMESTAMP"));
			$table->timestamp("updated_at")->default(\DB::raw("CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"));
			});
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		$languages = Language::get();

		foreach ($languages as $lang) {

        	Schema::dropIfExists("filter_fields_{$lang->tag}");
		}
    }
};
