<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // remember to uncomment the extension: ;extension=php_pdo_mysql.dll in php.ini
        /*
            To summarize, you can log into mysql via command line then change the password type from caching_sha2_password to mysql_native_password type.

            The code to achieve this within mysql is:

            ALTER USER 'user'@"localhost" IDENTIFIED WITH mysql_native_password BY 'password'
            You can replace 'user' and 'password' with your username and password to mysql.

            Then within mysql again:

            mysql> FLUSH PRIVILEGES;
        */
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->mediumText('description');
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
        Schema::dropIfExists('posts');
    }
}
