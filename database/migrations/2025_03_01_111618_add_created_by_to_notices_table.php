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
        $table->unsignedBigInteger('created_by')->nullable()->after('des_b');
        $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
public function down()
{
    Schema::table('notices', function (Blueprint $table) {
        $table->dropForeign(['created_by']);
        $table->dropColumn('created_by');
    });
}


};
