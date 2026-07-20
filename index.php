<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Criminal Gaming</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:url('https://wallpapercave.com/wp/wp7449740.jpg') no-repeat center center/cover;
    height:100vh;
    overflow:hidden;
}

.overlay{
    position:absolute;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
}

.container{
    position:relative;
    z-index:2;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    height:100vh;
    text-align:center;
    color:white;
}

h1{
    font-size:5rem;
    text-transform:uppercase;
    color:#ffcc00;
    text-shadow:
        0 0 10px #ffcc00,
        0 0 20px #ffcc00,
        0 0 40px #ff9900;
    animation:glow 2s infinite;
}

@keyframes glow{
    50%{
        text-shadow:
        0 0 20px #ffcc00,
        0 0 40px #ffcc00,
        0 0 60px #ff6600;
    }
}

.subtitle{
    font-size:1.4rem;
    margin:20px 0;
    color:#ddd;
}

.btn{
    display:inline-block;
    padding:15px 40px;
    margin:10px;
    border-radius:50px;
    text-decoration:none;
    font-size:18px;
    font-weight:bold;
    transition:.4s;
}

.play{
    background:#ff4500;
    color:white;
}

.play:hover{
    transform:scale(1.1);
    box-shadow:0 0 25px #ff4500;
}

.discord{
    background:#5865F2;
    color:white;
}

.discord:hover{
    transform:scale(1.1);
    box-shadow:0 0 25px #5865F2;
}

.cards{
    display:flex;
    gap:20px;
    margin-top:40px;
    flex-wrap:wrap;
    justify-content:center;
}

.card{
    width:250px;
    padding:20px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(10px);
    border-radius:15px;
    border:1px solid rgba(255,255,255,0.15);
}

.card h3{
    color:#ffcc00;
    margin-bottom:10px;
}

.card p{
    color:#ddd;
}

.footer{
    position:absolute;
    bottom:20px;
    color:#aaa;
    font-size:14px;
}
</style>
</head>
<body>

<div class="overlay"></div>

<div class="container">

    <h1>CRIMINAL GAMING</h1>

    <p class="subtitle">
        <?php echo "Welcome to Criminal Gaming - Free Fire Community"; ?>
    </p>

    <div>
        <a href="#" class="btn play">PLAY NOW</a>
        <a href="#" class="btn discord">JOIN COMMUNITY</a>
    </div>

    <div class="cards">
        <div class="card">
            <h3>🏆 Tournaments</h3>
            <p>Daily custom rooms and competitive matches.</p>
        </div>

        <div class="card">
            <h3>🎮 Squad Up</h3>
            <p>Find teammates and dominate every battle.</p>
        </div>

        <div class="card">
            <h3>🔥 Elite Players</h3>
            <p>Compete with top Free Fire players.</p>
        </div>
    </div>

    <div class="footer">
        © 2026 Criminal Gaming | Booyah Every Match
    </div>

</div>

</body>
</html>
