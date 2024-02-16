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
            if (!Schema::hasColumn('users', 'dept_id')) {
                $table->integer('dept_id')->unsigned()->nullable();
                $table->foreign('dept_id')->references('id')->on('depts');
            
            }
            $table->boolean('status')->default(false);
            $table->time('pointing_time')->nullable();
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['dept_id']);
        });
        Schema::table('users', function (Blueprint $table) {
            // Drop the columns
            $table->dropColumn(['dept_id', 'status', 'pointing_time']);
        });

        // Drop the foreign key constraint
      
    }
    
};
