<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate to Pet Adoption System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('../img/bg-img.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            text-align: center;
            padding: 0;
            margin: 0;
            position: relative;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
           
            z-index: -1;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255,255,255,0.5);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            position: relative;
            z-index: 1;
        }
        h1 {
            color: #ff6f61;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 20px;
        }
        .btn-google-pay {
            background-color: #4285f4;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .btn-google-pay:hover {
            background-color: #357ae8;
        }
        .qr-code {
            margin-top: 30px;
        }
        .qr-code img {
            border: 2px solid #ff6f61;
            border-radius: 8px;
            padding: 10px;
            background-color: #fff;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            .btn-google-pay {
                padding: 12px 20px;
                font-size: 16px;
            }
            .qr-code img {
                width: 150px;
            }
        }
        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }
            .btn-google-pay {
                padding: 10px 15px;
                font-size: 14px;
            }
            .qr-code img {
                width: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Support Our Pet Adoption System</h1>
        <p>Your donations help us provide care and find loving homes for pets in need.</p>
        
        

        <!-- UPI QR Code Section -->
        <div class="qr-code">
            <h2>Scan to Donate via UPI</h2>
            <img src="qr_code.jpg" alt="UPI QR Code" width="200">
            <p>UPI ID: anastaibani53@okhdfcbank</p>
        </div>
    </div>
</body>
</html>