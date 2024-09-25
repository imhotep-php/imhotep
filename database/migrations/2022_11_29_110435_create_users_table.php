<?php

use Imhotep\Database\Migrations\Migration;
use Imhotep\Database\Postgres\Schema\Table;
use Imhotep\Facades\Scheme;

return new class extends Migration
{
     /**
     * Up the migration.
     *
     * @return void
     */
    public function up(): void
    {
        Scheme::create('users', function (Table $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('email', 60);
            $table->string('password', 64);
            $table->timestamps();
        });
    }

    /**
     * Down the migration.
     *
     * @return void
     */
    public function down(): void
    {
        Scheme::dropIfExists('users');
    }
};