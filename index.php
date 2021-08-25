<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=100%, initial-scale=1.0">

    <!-- CDN Bootrstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CDN Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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

    <title>Prof. Notes </title>
</head>

<body>

    <!-- Start of the loading animation -->
    <div class="loader-wrapper">
        <div class="loading">
            <div class="boxLoading"></div>
        </div>
    </div>
    <!-- End of the loading animation -->
    <div class="content-wrapper">
        <!-- Start of the page header -->
        <header>
            <!-- Start of the Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-purple-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <span class="h3 text-center mx-3">Student Grades</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" onclick="lista_abertura();"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" onclick="lista_batch()"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" onclick="config_filiais()"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End of the Navbar -->
        </header>
        <!-- End of the page header -->
        <!-- Start of the main section -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="row g-3">
                        teste
                    </div>
                </div>
            </div>
        </main>
        <!-- End of main section -->

        <!-- Start of page footer -->
        <footer>


        </footer>
        <!-- End of page footer -->
    </div>
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
</body>

</html>