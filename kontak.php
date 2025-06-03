<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
       .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            background: rgba(0, 0, 0, 0.65);
            padding: 15px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 8px rgba(0,0,0,0.3);
            transition: background-color 0.3s ease;
            overflow-x: hidden;
        }
        .navbar:hover {
            background: rgb(1, 1, 1);
        }
        .nav-logo {
            display: flex;
            align-items: center;
            padding-left: 40px;
        }
        .nav-logo img {
            height: 40px;
            filter: drop-shadow(1px 1px 1px rgba(0,0,0,0.4));
        }
        .nav-category {
            display: flex;
            gap: 20px;
            padding-right: 40px;
        }
        .nav-category a {
            color: #f1f1f1;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }
        .nav-category a:hover {
            background-color: rgb(106, 124, 144);
            color: white;
        }   

        .container {
            border-radius: 12px;
            background-color: #ffffff;
            margin: 120px auto;
            max-width: 1200px;
            padding: 50px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        .container h1 {
            color: #0b3d91;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }
        .box-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .box {
            background-color: #f5f5f5;
            text-align: center;
            border-radius: 12px;
            padding: 40px 20px;
            width: 300px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .icon-circle {
            width: 70px;
            height: 70px;
            background-color: #0077c0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 28px;
            margin: 0 auto 20px auto;
            transition: background-color 0.3s;
        }
        .box:hover .icon-circle {
            background-color: #005b96;
        }
        
    </style>
</head>
<body>
    <div class="navbar" id="navbar">
        <div class="nav-logo">
            <img src="logobpjs.png" alt="logo BPJS">
        </div>
        <div class="nav-category">
            <a href="halamanuser.php">Home</a>
            <a href="halamanuser.php">Informasi Kepesertaan</a>
            <a href="#">Kontak</a>
        </div>
    </div>

    <div class="container">
        <h1>Layanan Masyarakat BPJS Ketenagakerjaan</h1>
        <div class="box-container">
            <div class="box">
                <div class="icon-circle"><i class="fas fa-phone"></i></div>
                <h4>Call Center</h4>
                <p>175</p>
            </div>
            <div class="box">
                <div class="icon-circle"><i class="fas fa-envelope"></i></div>
                <h4>Email</h4>
                <p>care@bpjsketenagakerjaan.go.id</p>
            </div>
            <div class="box">
                <div class="icon-circle"><i class="fas fa-globe"></i></div>
                <h4>Social Media</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
