<?php

use Illuminate\Support\Facades\Cache;

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$email = 'test@example.com';
$otp = (string) 123456;

Cache::put("otp_{$email}", $otp, 10);
$cached = Cache::get("otp_{$email}");

echo "Type of input OTP: " . gettype($otp) . " ($otp)\n";
echo "Type of cached OTP: " . gettype($cached) . " ($cached)\n";

if ("123456" !== $cached) {
    echo "STRICT COMPARISON FAILED!\n";
} else {
    echo "STRICT COMPARISON PASSED!\n";
}
