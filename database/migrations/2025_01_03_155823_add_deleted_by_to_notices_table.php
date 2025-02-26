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
        Schema::table('notices', function (Blueprint $table) {
            $table->unsignedBigInteger('deleted_by')->nullable()->after('id');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('notices', function (Blueprint $table) {
            $table->dropForeign(['deleted_by']);
            $table->dropColumn('deleted_by');
        });
    }
    
};

