<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

$this->createTable('{{%users}}', [
    'id' => $this->char(36)->notNull()->append('PRIMARY KEY'),
    'phone' => $this->string(11)->notNull()->unique(),
    'auth_key' => $this->string(32)->notNull(),
    'password_hash' => $this->string(60)->notNull(),
    'status' => $this->tinyInteger(1)->notNull(),
    'created_at' => $this->dateTime()->notNull(),
    'updated_at' => $this->dateTime()->notNull(),
], $tableOptions);
