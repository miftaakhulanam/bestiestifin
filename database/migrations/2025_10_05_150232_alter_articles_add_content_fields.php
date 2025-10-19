<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (!Schema::hasColumn('articles', 'title')) {
                $table->string('title')->after('id');
            }
            if (!Schema::hasColumn('articles', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }
            if (!Schema::hasColumn('articles', 'image_path')) {
                $table->string('image_path')->nullable()->after('slug');
            }
            if (!Schema::hasColumn('articles', 'content')) {
                $table->longText('content')->nullable()->after('image_path');
            }
            if (!Schema::hasColumn('articles', 'tags')) {
                $table->string('tags')->nullable()->after('content');
            }
            if (!Schema::hasColumn('articles', 'views')) {
                $table->unsignedBigInteger('views')->default(0)->after('tags');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (Schema::hasColumn('articles', 'views')) {
                $table->dropColumn('views');
            }
            if (Schema::hasColumn('articles', 'tags')) {
                $table->dropColumn('tags');
            }
            if (Schema::hasColumn('articles', 'content')) {
                $table->dropColumn('content');
            }
            if (Schema::hasColumn('articles', 'image_path')) {
                $table->dropColumn('image_path');
            }
            if (Schema::hasColumn('articles', 'slug')) {
                $table->dropColumn('slug');
            }
            if (Schema::hasColumn('articles', 'title')) {
                $table->dropColumn('title');
            }
        });
    }
};
