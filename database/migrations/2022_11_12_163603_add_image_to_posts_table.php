<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->json('ImageObj')->default(null);
            $table->string('image')->default('https://media.istockphoto.com/id/1316559477/de/vektor/set-von-verschiedenen-lieferwagen-distribution-und-logistische-cliparts.jpg?s=612x612&w=0&k=20&c=22tZGb1eIj3SNwBqSK4uFRfakSTYPWU8yXnWP3XPnRU=');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
