<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('parent_id')->nullable();
            $table->String('title')->nullable();
        });

        DB::table('tree')->insert([
            ['id' => 1, 'parent_id' => 0, 'title' => 'Animals'],
            ['id' => 2, 'parent_id' => 1, 'title' => 'Birds'],
            ['id' => 3, 'parent_id' => 1, 'title' => 'Pets'],
            ['id' => 4, 'parent_id' => 2, 'title' => 'Cuckoo'],
            ['id' => 5, 'parent_id' => 2, 'title' => 'Sparrow'],
            ['id' => 6, 'parent_id' => 2, 'title' => 'Stork'],
            ['id' => 7, 'parent_id' => 3, 'title' => 'Cats'],
            ['id' => 8, 'parent_id' => 3, 'title' => 'Dogs'],
            ['id' => 9, 'parent_id' => 3, 'title' => 'Hamster'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tree');
    }
}
