<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="../font-awesome/all.css">
    <title>ورود به سامانه مرکز بازپروری سرای مهر</title>
</head>
<body>
    

<div id="content-box">


<div id="tv">
    <h2>خدمات ما</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
        . Exercitationem commodi officia culpa iste iure nisi l
        audantium fuga, officiis perferendis, inventore sapient
        e soluta vel! Ipsum esse, ducimus ex consequatur veritat
        is eveniet non cum quas deleniti maxime atque vitae ratio
        ne cumque .</p>

    <button id="back" onclick="backToSignin()">ورود به سامانه</button>
</div>



    <!-- Form -->

    <form action="../../PHP/login.php" id="form" method="post">


<img src="./images/logo.png" alt="NA Logo" width="85px" height="85px">

<h2>ورود به سامانه</h2>

<div id="username">
<i class="fa fa-user"></i><input type="text" placeholder="نام کاربری" id="name" name="username">
</div>

<div id="password">
<i class="fa fa-lock" ></i><input id="pass-input" type="password" placeholder="کلمه عبور" name="password">
<span class="eyebox"><i class="fa fa-eye" id="eye"></i></span>
</div>

<a href="#" id="forget-password">کلمه عبور خود را فراموش کرده اید ؟</a>

<input type="submit" value="وارد شوید" id="login-btn" name="submit">

</form>

</div>

<div id="container">

<div id=about-box>
    <span class="box">بهداشت</span>
    <span class="box">درمان</span>
    <span class="box">امکانات رفاهی</span>
    <span class="box">پیگیری</span>
</div>
    
<div id="social">
    <a href="#" class="socials-youtube"><i class="fab fa-youtube"></i></a>
    <a href="#" class="socials-instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="socials-telegram"><i class="fab fa-telegram"></i></a>
    <a href="#" class="socials-twitter"><i class="fab fa-twitter"></i></a>
</div>

</div>

</div>

</body>
<script src="./scripts/script.js"></script>
<script src="../font-awesome/all.js"></script>
</html>