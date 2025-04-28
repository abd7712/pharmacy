<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("drugs",function(Blueprint $table)
        {
            $table->id();
            $table->string("name")->unique();
            $table->integer("price");
            $table->string("description");
            $table->timestamps();
        });
    }
};
