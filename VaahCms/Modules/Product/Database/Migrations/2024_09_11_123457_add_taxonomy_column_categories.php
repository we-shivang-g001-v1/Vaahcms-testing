<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTaxonomyColumnCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('vh_categories', function (Blueprint $table) {
            $table->string('taxonomy_id')->nullable()->index();


        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {

        Schema::table('vh_categories', function (Blueprint $table) {
            $table->dropColumn('taxonomy_id');

        });
    }

}
