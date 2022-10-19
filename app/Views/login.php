<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/amdash/demo/vertical/authentication-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 02:43:01 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/ypt.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>SIM ASET YPT</title>
</head>

<body class="bg-gradient-danger">
    <!-- wrapper -->
    <form action="<?=base_url('Home/dashboard')?>" method="">
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <div class="border p-4 rounded-4">
                                    <div class="text-center">
                                        <img src="assets/images/ypt.png" width="70" alt="" />
                                        <h5 class="mt-3 mb-0">SIM Aset</h5>
                                        <p class="mb-0">Sistem Informasi Manajemen Aset</p>
                                        <p class="mb-4">Yayasan Pendidikan Telkom</p>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Email/Username" />
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-3 col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Ingat Saya</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-md-6 mb-3 text-end">
                                        <a href="authentication-forgot-password.html"><u>Lupa Password?</u></a>
                                    </div>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-danger">Masuk</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- end wrapper -->
</body>


<!-- Mirrored from codervent.com/amdash/demo/vertical/authentication-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 02:43:02 GMT -->

</html>