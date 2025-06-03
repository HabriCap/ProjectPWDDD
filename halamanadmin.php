<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin BPJS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        .card h3 {
            margin-bottom: 20px;
            color: #007bff;
        }
        .card button {
            background-color: #007bff;
            border: none;
            color: #ffffff;
            padding: 15px 30px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .card button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <h3>Lihat Data Peserta</h3>
                    <button onclick="location.href='datapeserta.php'">Lihat Data</button>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="halamanloginadmin.php">
                        <button type="submit" name="update" class="btn btn-primary">kembali ke login</button>  
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
