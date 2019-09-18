<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateRolePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permissions', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->unsignedBigInteger('role_id')->index()->unsigned()->comment('comment');
            $table->unsignedBigInteger('permission_id')->index()->unsigned()->comment('comment');
            //FOREIGN KEY CONSTRAINTS
            //$table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
            //SETTING THE PRIMARY KEYS
            //$table->primary(['role_id','permission_id']);
        });
        
        Schema::table('role_permissions', function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            $table->primary(['role_id','permission_id'], ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('role_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('permission_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permissions');
    }
}
