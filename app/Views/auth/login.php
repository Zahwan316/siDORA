<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row ">
                            <div class="col-lg-6 d-none d-lg-block bg-register-image">
                                <img src='<?= base_url("img/bg-home-2.jpg") ?>' style='width:460px;height:400px' />
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>
                                    <form class="user" method='post' action='login/authenticate'>
                                        <div class="form-group">
                                            <input type="email" name='email' class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name='password' class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <?php if (session()->getFlashdata('error')): ?>
                                            <p class='text-danger'><?= session()->getFlashdata('error') ?></p>
                                        <?php endif ?>
                                        
                                        <input type='submit' value='Login'login href="" class="btn btn-primary btn-user btn-block">
                                        
                                        </input>
                                    
                                    <hr>
                                    
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url("register") ?>">Buat akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
            <?php if (session()->getFlashdata('success')): ?>
                <script>
                    Swal.fire({
                        title: 'Berhasil!',
                        text: '<?= session()->getFlashdata('success') ?>',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <script>
                    Swal.fire({
                        title: 'Gagal!',
                        text: '<?= session()->getFlashdata('error') ?>',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                </script>
            <?php endif; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>