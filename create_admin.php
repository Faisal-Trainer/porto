<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

$email = 'faisalyusra51@gmail.com';
$name = 'faisal';
$password = 'Reka070299';

$user = User::where('email', $email)->first();

if (!$user) {
    $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => Hash::make($password),
        'email_verified_at' => now(),
        'is_active' => true,
        'status' => 'active',
    ]);
    echo "USER_CREATED\n";
} else {
    $user->update([
        'is_active' => true,
        'status' => 'active',
    ]);
    echo "USER_UPDATED\n";
}

if (method_exists($user, 'assignRole')) {
    $user->assignRole('super_admin');
    echo "ROLE_ASSIGNED\n";
} else {
    echo "METHOD_ASSIGN_ROLE_NOT_FOUND\n";
}
