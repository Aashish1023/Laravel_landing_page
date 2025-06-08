<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('short_Name')->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_footer')->nullable();
            $table->string('description')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('tw_url')->nullable();
            $table->string('insta_url')->nullable();
            $table->string('li_url')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
