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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('normal_price');
            $table->integer('VIP_price')->nullable();
            $table->date('date');
            $table->string('lieu');
            $table->integer('places');
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('category_id')
            ->constrained('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            // $table->boolean('status');
            $table->enum('status',['pending','accepted','rejected'])->default('pending');
            $table->time('event_time');
            // $table->boolean('reservation_approval')->default(0);
            $table->enum('reservation_approval',['manually','automatic'])->default('manually'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
