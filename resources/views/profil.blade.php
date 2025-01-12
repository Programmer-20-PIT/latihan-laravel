<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama Haytra</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
             background: linear-gradient(45deg, #833ab4, #951dfd, #fcb045);
            color: rgb(6, 6, 4);
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .header {
            text-align: center;
            z-index: 2;
        }

        .header h1 {
            font-size: 3.5rem;
            margin: 0;
            color: rgb(255, 255, 255);
        }

        .header .highlight {
            background-color: #FFD700;
            color: #2c27b4;
            padding: 0.2em 0.4em;
            font-weight: bold;
            border-radius: 5px;
        }

        .header p {
            font-size: 1.2rem;
            margin-top: 1em;
            max-width: 600px;
            line-height: 1.6;
        }

        .illustrations {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .illustrations img {
            width: 300px;
            height: auto;
        }

        .graphic {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: white;
            opacity: 0.2;
            animation: float 6s infinite ease-in-out;
        }

        .graphic:nth-child(1) {
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .graphic:nth-child(2) {
            top: 30%;
            right: 15%;
            animation-delay: 2s;
        }

        .graphic:nth-child(3) {
            bottom: 20%;
            left: 10%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: #FFD700;
            border-radius: 50%;
            animation: particle-float 8s infinite ease-in-out;
        }

        .particle:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            top: 50%;
            left: 40%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            top: 80%;
            left: 70%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            top: 30%;
            left: 80%;
            animation-delay: 6s;
        }

        .particle:nth-child(5) {
            top: 70%;
            left: 20%;
            animation-delay: 8s;
        }

        .particle:nth-child(6) {
            top: 15%;
            left: 50%;
            animation-delay: 1s;
        }

        .particle:nth-child(7) {
            top: 60%;
            left: 30%;
            animation-delay: 3s;
        }

        .particle:nth-child(8) {
            top: 40%;
            left: 90%;
            animation-delay: 5s;
        }

        .particle:nth-child(9) {
            top: 75%;
            left: 15%;
            animation-delay: 7s;
        }

        .particle:nth-child(10) {
            top: 25%;
            left: 70%;
            animation-delay: 9s;
        }

        @keyframes particle-float {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
            50% {
                transform: translateY(-30px) scale(1.2);
                opacity: 0.8;
            }
            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        .cloud {
            position: absolute;
            background: rgb(244, 24, 39);
            border-radius: 50%;
            opacity: 0.5;
        }

        .cloud.large {
            width: 200px;
            height: 100px;
            top: 10%;
            left: 5%;
            animation: cloud-move 15s infinite linear;
        }

        .cloud.medium {
            width: 150px;
            height: 75px;
            top: 30%;
            right: 10%;
            animation: cloud-move 20s infinite linear;
        }

        .cloud.small {
            width: 100px;
            height: 50px;
            bottom: 15%;
            left: 15%;
            animation: cloud-move 25s infinite linear;
        }

        @keyframes cloud-move {
            0% {
                transform: translateX(-100px);
            }
            100% {
                transform: translateX(100vw);
            }
        }

        .arrow {
            position: absolute;
            bottom: 10%;
            left: 5%;
            font-size: 2rem;
            color: rgb(221, 245, 8);
        }

        .arrow::before {
            content: "\2192";
        }

        .animated-link {
            position: absolute;
            bottom: 5%;
            font-size: 1.5rem;
            text-decoration: none;
            color: #FFD700;
            background: #272cb4;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #FFD700;
            animation: link-glow 2s infinite ease-in-out;
        }

        .animated-link:hover {
            background: #FFD700;
            color: #6E27B4;
        }

        @keyframes link-glow {
            0%, 100% {
                box-shadow: 0 0 5px #FFD700;
            }
            50% {
                box-shadow: 0 0 20px #FFD700;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <<h1>Welcome<span class="highlight">Haytra Davia</span></h1>
            <p>No matter how difficult it is, we have to push through and never lose our spirit and continue to face whatever obstacles lie ahead.</p>
            &copy; BY Haytra
        </div>

        <!-- Illustrations -->
        <div class="illustrations">
            <img src="/image/2.png" alt="Designer Working">
        </div>

        <!-- Floating graphics -->
        <div class="graphic"></div>
        <div class="graphic"></div>
        <div class="graphic"></div>

        <!-- Particles -->
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>

        <!-- Clouds -->
        <div class="cloud large"></div>
        <div class="cloud medium"></div>
        <div class="cloud small"></div>

        <!-- Arrow -->
        <div class="arrow"></div>

        <!-- Animated Link -->
        <a href="/welcome" class="animated-link">Design by haytra</a>
    </div>
</body>
</html>
