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
        Schema::table('users', function (Blueprint $table) {
            $table->longText('avatar')->nullable();
            $table->unsignedBigInteger('lib_officer_id')->nullable();
            $table->unsignedBigInteger('member_type_id');
            $table->date('date_balloted')->nullable();
            $table->date('date_of_conferral')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('lib_officer_id');
            $table->dropColumn('member_type_id');
            $table->dropColumn('date_balloted');
            $table->dropColumn('date_of_conferral');
        });
    }
};
