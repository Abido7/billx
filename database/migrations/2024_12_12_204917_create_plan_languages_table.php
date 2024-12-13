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
        Schema::create('plan_languages', function (Blueprint $table) {
            $table->id();
            $table->string('lang')->default('en');
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->foreignId('plan_id')
                ->nullable()
                ->constrained('plans')
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
        Schema::dropIfExists('plan_languages');
    }
};
