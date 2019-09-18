<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id')->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            $table->string('colour_id')->index()->nullable()->comment('comment');
            //$table->string('slug')->index()->unique()->comment('comment'); // create-table
            $table->string('code')->index()->nullable()->comment('comment');
            $table->string('name')->index()->nullable()->comment('comment'); // create table
            $table->string('display_name')->index()->nullable()->comment('comment');
            $table->text('image_uri')->default(null)->nullable()->comment('uniform resource identifier'); 
            $table->unsignedBigInteger('status_id_parent')->unsigned()->index()->nullable()->comment('comment');
            //->charset('utf8')->change();
            //$table->softDeletes();
        });
        
        Schema::table('statuses', function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id_parent', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
        });
        
        //DB::statement('ALTER TABLE table_name MODIFY COLUMN id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
