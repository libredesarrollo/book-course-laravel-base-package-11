<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Http\Controllers\PaymentPaypalController;

Route::get('/', function () {
    dd(isMobile());
    return view('welcome');
});

Route::get('/qr', function () {
    QrCode::format('png')->generate('DesarrolloLibre');
    return view('welcome');
});

Route::get('/paypal', [PaymentPaypalController::class, 'paypal']);
Route::post('/paypal-process-order/{order}', [PaymentPaypalController::class, 'paypalProcessOrder']);
