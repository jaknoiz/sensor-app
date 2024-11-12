<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorController extends Controller
{
    // ฟังก์ชัน store() สำหรับบันทึกข้อมูลจาก Arduino
public function store(Request $request)
{
    // ตรวจสอบข้อมูลที่ได้รับจาก Arduino
    $validated = $request->validate([
        'humidity' => 'required|numeric',
        'temperature' => 'required|numeric',
    ]);

    // หาก validate สำเร็จ
    if ($validated) {
        $sensorData = new SensorData();
        $sensorData->humidity = $request->input('humidity');
        $sensorData->temperature = $request->input('temperature');
        $sensorData->save();

        // ส่งผลลัพธ์เป็น JSON เมื่อบันทึกสำเร็จ
        return response()->json(['message' => 'Data saved successfully'], 201);
    }

    // ส่งผลลัพธ์เมื่อ validation ไม่สำเร็จ
    return response()->json(['message' => 'Validation failed'], 400);
}

    // ดึงข้อมูลจากฐานข้อมูลและส่งไปยัง view
    public function index()
    {
        // ดึงข้อมูลล่าสุดจากฐานข้อมูล
        $sensorData = SensorData::latest()->first();  // ดึงข้อมูลล่าสุดที่บันทึก

        return view('sensor.index', compact('sensorData'));
    }

    // API ที่ให้ AJAX สามารถดึงข้อมูลมาได้
    public function getSensorData()
    {
        $sensorData = SensorData::latest()->first();  // ดึงข้อมูลล่าสุด
        return response()->json($sensorData);
    }
}
