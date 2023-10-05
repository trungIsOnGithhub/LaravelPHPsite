<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameThoughtTable extends Migration
{
    private static $tableName1 = "thought";
    private static $tableName2 = "thoughts";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename(self::$tableName1, self::$tableName2);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename(self::$tableName2, self::$tableName1);
    }
}
