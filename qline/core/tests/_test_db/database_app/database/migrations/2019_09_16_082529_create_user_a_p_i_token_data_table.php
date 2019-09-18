<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateUserAPITokenDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_a_p_i_token_data', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            $table->string('data_key')->index()->nullable()->comment('comment');
            $table->string('data_value')->index()->nullable()->comment('comment');
            $table->unsignedBigInteger('user_a_p_i_token_id')->unsigned()->index()->nullable()->comment('comment');
        });
        
        Schema::table('user_a_p_i_token_data', function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('user_a_p_i_token_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('user_a_p_i_tokens')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_a_p_i_token_data');
    }
}
