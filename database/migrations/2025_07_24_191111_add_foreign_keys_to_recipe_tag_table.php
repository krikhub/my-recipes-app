<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up()
            {
                Schema::table('recipe_tag', function (Blueprint $table) {
                    $table->foreignId('recipe_id')->constrained()->onDelete('cascade');
                    $table->foreignId('tag_id')->constrained()->onDelete('cascade');
                });
            }

    public function down()
    {
        Schema::table('recipe_tag', function (Blueprint $table) {
            $table->dropForeign(['recipe_id']);
            $table->dropForeign(['tag_id']);
            $table->dropColumn(['recipe_id', 'tag_id']);
        });
    }

};
