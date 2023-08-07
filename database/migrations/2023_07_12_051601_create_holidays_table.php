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
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->string('slug');
            $table->integer('days');
            $table->text('itinerary');
            $table->mediumText('description');
            $table->string('image')->nullable();
            $table->string('meta_title');
            $table->mediumText('meta_description');
            $table->mediumText('meta_keyword');
            $table->tinyInteger('status')->default('0');
            $table->integer('created_by')->default('0');
            $table->timestamps();
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
};
