<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AddCarbohydratesToRecipesTable extends Migration
{
    public function up()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->integer('carbohydrates')->nullable();
        });
    }

    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('carbohydrates');
        });
    }
}
