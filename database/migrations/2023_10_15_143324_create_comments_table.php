<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Post::class)->constrained()->cascadeOnDelete();
            //CASCADE: When a row is deleted from the parent table, all related rows in the child table(s) are deleted as well.
            $table->foreignIdFor(User::class)->constrained()->restrictOnDelete();
            //RESTRICT: When a row is deleted from the parent table, the delete operation is aborted if there are any related rows in the child table(s).
            $table->longText('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
