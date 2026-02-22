<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('staff_categories', function (Blueprint $table) {
            $table->string('section_title')->nullable()->after('name'); // Custom section title
            $table->string('parent_section')->nullable()->after('section_title'); // Group under parent (e.g., "Management Team")
            $table->enum('display_type', ['card-grid', 'name-list', 'individual-cards'])->default('card-grid')->after('parent_section');
            $table->boolean('is_active')->default(true)->after('display_type');
            $table->text('description')->nullable()->after('is_active'); // Section description
        });
    }

    public function down(): void
    {
        Schema::table('staff_categories', function (Blueprint $table) {
            $table->dropColumn(['section_title', 'parent_section', 'display_type', 'is_active', 'description']);
        });
    }
};
