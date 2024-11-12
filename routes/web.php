<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

// เส้นทางสำหรับหน้าแรก
Route::get('/', function () {
    return view('welcome');
});

// หน้าแสดงข้อมูล
Route::get('/sensor', [SensorController::class, 'index']);

// API ที่ให้ AJAX สามารถดึงข้อมูล
Route::get('/api/sensor-data', [SensorController::class, 'getSensorData']);

// รับข้อมูลจาก Arduino
Route::post('/sensor-data', [SensorController::class, 'store']);