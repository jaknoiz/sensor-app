<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Data</title>
    <style>
        /* Global styles */
        body {
            font-family: Kanit, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #1219b3;
            margin-top: 40px;
        }

        /* Navbar styles */
        .navbar {
            background-color: #1219b3;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;  /* Align logo to the left and title to the right */
            align-items: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .navbar img {
            height: 100px;
            margin-left: 5px;
            border-radius: 8px;
        }
        .navbar-title {
            font-size: 28px;
            font-weight: bold;
            transition: color 0.3s;
            margin-left: auto; /* Ensure title stays on the right */
        }
        

        /* Layout for cards */
        .card-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 15px;
        }

        /* Card styles */
        .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #1219b3;
        }
        .card p {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Footer styles */
        .footer {
            background-color: #1219b3;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
        }
        .footer:hover {
            background-color: #0d1373;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <img src="{{ asset('image/tsu.png') }}" alt="Logo">
        <div class="navbar-title">ระบบตรวจคนเข้าห้องสมุดอัตโนมัติ</div>
    </div>

    <!-- Main content with cards -->
    <div class="card-container">
        <!-- Card 1 -->
        <div class="card">
            <h3>Sensor 1</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 2 -->
        <div class="card">
            <h3>Sensor 2</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 3 -->
        <div class="card">
            <h3>Sensor 3</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 4 -->
        <div class="card">
            <h3>Sensor 4</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 5 -->
        <div class="card">
            <h3>Sensor 5</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 6 -->
        <div class="card">
            <h3>Sensor 6</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 7 -->
        <div class="card">
            <h3>Sensor 7</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 8 -->
        <div class="card">
            <h3>Sensor 8</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>

        <!-- Card 9 -->
        <div class="card">
            <h3>Sensor 9</h3>
            @if ($sensorData)
                <p>Humidity: {{ $sensorData->humidity }}%</p>
                <p>Temperature: {{ $sensorData->temperature }}°C</p>
                <p>Recorded at: {{ $sensorData->created_at }}</p>
            @else
                <p>No data available.</p>
            @endif
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; {{ date('Y') }} Room Booking System. All rights reserved.
    </div>
</body>
</html>
