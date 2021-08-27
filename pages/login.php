<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootrstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Animate CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- CSS Box Icons CDN -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font for the website (Name font: Prompt) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Loader Stylesheet -->
    <link rel="stylesheet" href="assets/css/loader.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Website Icon -->
    <link rel="icon" href="assets/coranyx_logo.svg">

</head>

<body>
    <!-- Start of the loading animation -->
    <div class="loader-wrapper">
        <div class="loading">
            <div class="boxLoading"></div>
        </div>
    </div>
    <!-- End of the loading animation -->
    <main class="main">
        <div class="container">
            <section class="wrapper">
                <div class="heading">
                    <h1 class="text text-large">Efetuar Login</h1>
                    </p>
                </div>
                <form name="login" class="form">
                    <div class="input-control">
                        <input type="email" id="user__identity" name="email" class="input-field" placeholder="Email">
                    </div>
                    <div class="striped">
                        <span class="striped-line"></span>
                    </div>
                    <div class="input-control">
                        <input type="password" name="password" class="input-field" placeholder="Password">
                    </div>
                    <div class="input-control">
                        <div class="error__output"></div>
                        <input type="button" name="submit" class="input-submit mx-auto mt-4" value="Login" onclick="searchUser()">
                    </div>
                </form>
            </section>
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

    <!-- Loader SCRIPT -->
    <script src="assets/js/loader.js"></script>

    <!-- Login SCRIPT -->
    <script src="assets/js/functions.js"></script>
</body>

</html>