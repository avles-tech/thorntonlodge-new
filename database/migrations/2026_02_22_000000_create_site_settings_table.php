<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('type')->default('text'); // text, file, image, etc.
            $table->string('label')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Insert default menu PDF setting
        DB::table('site_settings')->insert([
            'key' => 'menu_pdf_path',
            'value' => '/Uploads/menu_of_the_year/MenuOfTheYear.pdf',
            'type' => 'file',
            'label' => 'Menu of the Year PDF',
            'description' => 'Upload the annual menu PDF file',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
