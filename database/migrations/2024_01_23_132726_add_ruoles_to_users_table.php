<?php

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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->after('email')->nullable()->default(false);
            $table->boolean('is_revisor')->after('is_admin')->nullable()->default(false);
            $table->boolean('is_writer')->after('is_revisor')->nullable()->default(false);
        });

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@theaulabpost.it',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        User::where('email', 'admin@theaulabpost.it')->delete();
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['is_admin', 'is_revisor', 'is_writer']);
        });
    }
};
