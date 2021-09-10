<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=100, initial-scale=1.0">
    <title>Student Grades - Dashboard</title>

    <!-- Website Icon -->
    <link rel="icon" href="assets/images/Grades-cuate.svg">

    <!-- CSS Bootrstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Animate CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- CSS Font Awesome -->
    <!-- Source font https://fontawesome.com/v5.15/how-to-use/customizing-wordpress/snippets/setup-cdn-webfont -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" />

    <!-- CSS Alertify JS CDN-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <!-- CSS Box Icons CDN -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS Data Tables CDN-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

    <!-- Font for the website (Name font: Prompt) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Loader Stylesheet -->
    <link rel="stylesheet" href="assets/css/loader.css">

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
    <!-- Start of the page header -->
    <header>
        <!-- Start of the Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="h3 text-center mx-3">Student Grades</span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#" onclick="defineNotes()">Notas</a>
                        </li>
                        <?php if ($_SESSION['Access_level'] == 'administrator' || $_SESSION['Access_level'] ==  'professor') { ?>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="#" onclick="formsPage()">Cadastros</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="ms-auto px-2 text-light">
                        <?php echo $_SESSION['Access_level']; ?> |
                        <a class="text-light" href="server/logout.php"> Logout <i class="fad fa-sign-out-alt"></i></a>
                    </div>
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
                <div class="main__content text-dark">
                </div>
            </div>
        </div>
    </main>
    <!-- End of main section -->

    <!-- Start of page footer -->
    <footer>


    </footer>
    <!-- End of page footer -->

    <!-- CDN Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CDN Jquery Mask Plugin-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"></script>

    <!-- CDN Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- CDN Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <!-- CDN Sweet Alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CDN Alertify JS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CDN Mo JS -->
    <script src="https://cdn.jsdelivr.net/npm/@mojs/core"></script>

    <!-- CDN Data Tables JS -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

    <!-- Loader SCRIPT -->
    <script src="assets/js/loader.js"></script>

    <!-- Loader SCRIPT -->
    <script src="assets/js/functions.js"></script>
</body>

</html>