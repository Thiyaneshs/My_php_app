<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criminal Gaming</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:url('https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=1920&q=80');
            background-size:cover;
            background-position:center;
            overflow:hidden;
        }

        .overlay{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.65);
        }

        .container{
            position:relative;
            z-index:1;
            text-align:center;
            color:white;
            padding:50px;
            border-radius:20px;
            backdrop-filter:blur(10px);
            background:rgba(255,255,255,0.08);
            box-shadow:0 8px 32px rgba(0,0,0,0.4);
        }

        h1{
            font-size:4rem;
            color:#00ffcc;
            text-shadow:0 0 20px #00ffcc;
            margin-bottom:20px;
        }

        p{
            font-size:1.3rem;
            margin-bottom:30px;
        }

        .btn{
            display:inline-block;
            padding:15px 35px;
            text-decoration:none;
            color:white;
            background:#ff004f;
            border-radius:50px;
            font-weight:bold;
            transition:0.4s;
        }

        .btn:hover{
            transform:scale(1.1);
            box-shadow:0 0 25px #ff004f;
        }

        .badge{
            margin-top:20px;
            color:#ccc;
            font-size:14px;
        }

        @keyframes glow{
            0%{text-shadow:0 0 10px #00ffcc;}
            50%{text-shadow:0 0 30px #00ffcc;}
            100%{text-shadow:0 0 10px #00ffcc;}
        }

        h1{
            animation:glow 2s infinite;
        }
    </style>
</head>
<body>

<div class="overlay"></div>

<div class="container">
    <h1>CRIMINAL GAMING</h1>

    <p>
        <?php
            echo "Welcome to Criminal Gaming!";
        ?>
    </p>

    <a href="#" class="btn">Start Gaming</a>

    <div class="badge">
        Level Up • Compete • Conquer
    </div>
</div>

</body>
</html>
