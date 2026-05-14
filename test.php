<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$user = App\Models\User::where('email', 'admin@ims.com')->first();
if (!$user) {
    echo "User not found\n";
    exit;
}

echo "Password hash: " . $user->password . "\n";
echo "Hash check 'password123': " . (Illuminate\Support\Facades\Hash::check('password123', $user->password) ? 'Match' : 'No Match') . "\n";
