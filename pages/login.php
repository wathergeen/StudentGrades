<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades - Login</title>

    <!-- Website Icon -->
    <link rel="icon" href="assets/images/Grades-cuate.svg">

    <!-- CSS Bootrstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Animate CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- CSS Font Awesome -->
    <!-- Source font https://fontawesome.com/v5.15/how-to-use/customizing-wordpress/snippets/setup-cdn-webfont -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" />

    <!-- CSS Box Icons CDN -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS IZI Toast CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">

    <!-- Font for the website (Name font: Prompt) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Loader Stylesheet -->
    <link rel="stylesheet" href="assets/css/loader.css">

    <!-- Login Stylesheet -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <!-- Start of the loading animation -->
    <div class="loader-wrapper">
        <div class="loading">
            <div class="boxLoading"></div>
        </div>
    </div>
    <!-- End of the loading animation -->
    <main>
        <div class="container">
            <div class="row">
                <div class="card col-lg-4 col-md-6 col-sm-11 absolute-center">
                    <form>
                        <h2 class="title">Login</h2>
                        <div class="email-login">
                            <label for="email"> <b>Email</b></label>
                            <input type="email" id="user__identity" name="login__email" placeholder="Digite seu email" required>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" id="user__password" name="login__password" placeholder="Digite a sua senha" required>
                        </div>
                        <button type="button" name="submit" class="cta-btn" value="Login" onclick="searchUser()">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- CDN Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- CDN Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <!-- CDN Sweet Alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CDN Mo JS -->
    <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>

    <!-- CND IZI Toast (Notifications) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

    <!-- Loader SCRIPT -->
    <script src="assets/js/loader.js"></script>

    <!-- Login SCRIPT -->
    <script src="assets/js/functions.js"></script>
</body>

</html>