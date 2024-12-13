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
        Schema::create('plan_option_languages', function (Blueprint $table) {
            $table->id();
            $table->string('lang')->default('en');
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->foreignId('plan_option_id')
                ->nullable()
                ->constrained('plan_options')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('plan_option_languages');
    }
};
