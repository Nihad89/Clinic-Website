<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up() {
        Schema::create('notice_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notice_id'); // Foreign key to notices table
            $table->string('des_a');
            $table->text('des_b');
            $table->unsignedBigInteger('created_by')->nullable(); // Foreign key to users table
            $table->unsignedBigInteger('deleted_by')->nullable(); // Foreign key to users table
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
    
            // Foreign key constraints
            $table->foreign('notice_id')->references('id')->on('notices')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down() {
        Schema::dropIfExists('notice_logs');
    }
};


