<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลจากเซ็นเซอร์</title>
    <style>
        .card { border: 1px solid #ddd; padding: 20px; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>ข้อมูลจากเซ็นเซอร์</h1>
    <div id="sensor-data">
        <div class="card">
            <h2>ความชื้น</h2>
            <p id="humidity">{{ $sensorData->humidity ?? 'Loading...' }}%</p>
        </div>
        <div class="card">
            <h2>อุณหภูมิ</h2>
            <p id="temperature">{{ $sensorData->temperature ?? 'Loading...' }} °C</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // ฟังก์ชันในการดึงข้อมูลจากเซิร์ฟเวอร์
        function fetchSensorData() {
            $.ajax({
                url: '/api/sensor-data',  // Route ที่ดึงข้อมูลจากเซิร์ฟเวอร์
                type: 'GET',
                success: function(data) {
                    // แสดงข้อมูลที่ได้รับ
                    $('#humidity').text(data.humidity + ' %');
                    $('#temperature').text(data.temperature + ' °C');
                },
                error: function(error) {
                    console.error('Error fetching data', error);
                }
            });
        }

        // เรียกใช้ฟังก์ชันทุก 2 วินาทีเพื่ออัปเดตข้อมูล
        setInterval(fetchSensorData, 2000);
    </script>
</body>
</html>
