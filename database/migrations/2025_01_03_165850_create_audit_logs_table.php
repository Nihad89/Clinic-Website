<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()

    {
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notice_id');
            $table->string('des_a');
            $table->string('des_b');
            $table->unsignedBigInteger('deleted_by')->nullable(); // Allow NULL
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        
            // Foreign key relationships
            $table->foreign('notice_id')->references('id')->on('notices')->onDelete('cascade');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('audit_logs');
    }
};






