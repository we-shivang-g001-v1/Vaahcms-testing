<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VhTaxonmiesshivang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('vh_taxonmies_shivang')) {
            Schema::create('vh_taxonmies_shivang', function (Blueprint $table) {

                $table->increments('id');
                $table->uuid('uuid')->nullable()->index();
                $table->integer('parent_id')->nullable()->index();
                $table->integer('vh_taxonmies_shivang_id')->nullable()->index();
                $table->string('name')->nullable()->index();
                $table->string('slug')->nullable()->index();

                $table->mediumText('excerpt')->nullable();
                $table->mediumText('details')->nullable();
                $table->text('notes')->nullable();

                $table->boolean('is_active')->nullable()->index();

                //----common fields
                $table->text('meta')->nullable();
                $table->bigInteger('created_by')->nullable()->index();
                $table->bigInteger('updated_by')->nullable()->index();
                $table->bigInteger('deleted_by')->nullable()->index();
                $table->timestamps();
                $table->softDeletes();
                $table->index(['created_at', 'updated_at', 'deleted_at']);
                //----/common fields

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
        Schema::dropIfExists('vh_taxonmies_shivang');
    }
}
