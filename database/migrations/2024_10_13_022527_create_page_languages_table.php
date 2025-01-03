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
        Schema::create('page_languages', function (Blueprint $table) {
            $table->id();
            $table->string('lang')->default('en');
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->longText('content')->nullable();
            $table->string('address')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('keywords')->nullable();
            $table->foreignId('page_id')
                ->nullable()
                ->constrained('pages')
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
        Schema::dropIfExists('page_languages');
    }
};
