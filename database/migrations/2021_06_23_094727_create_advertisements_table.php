<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                    ->constrained('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('child_category_id')->nullable();
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('currency')->nullable();
            $table->string('price');
            $table->string('price_status')->nullable();
            $table->boolean('isPublished')->default(1);
            $table->text('description');

           
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
        Schema::dropIfExists('advertisements');
    }
}
