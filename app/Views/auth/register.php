<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

           

            <?php if (session()->getFlashdata('errors')): ?>
                <div>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image d-flex ">
                        <img src='<?= base_url("img/bg-home.jpg") ?>' style='width:460px;height:360px;position:relative;top:50px' />
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat akun</h1>
                            </div>
                            <form class="user" method='post' action='/register/create'>
                                <div class="form-group">                                                              
                                    <input type="text" name='nama' value="<?= old('nama') ?>" class="form-control form-control-user" id="exampleLastName"
                                         placeholder="Nama Lengkap">                                    
                                </div>
                                
                                <?php if (isset(session()->getFlashdata('errors')['nama'])): ?>
                                    <?php $data = session()->getFlashdata('errors') ?>
                                    <p class='text-danger'>*<?= $data['nama'] ?></p>
                                <?php endif; ?>

                                <div class="form-group">
                                    <input type="email" name='email' value="<?= old('email') ?>" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email ">
                                </div>

                                <?php if (isset(session()->getFlashdata('errors')['email'])): ?>
                                    <?php $data = session()->getFlashdata('errors') ?>
                                    <p class='text-danger'>*<?= $data['email'] ?></p>
                                <?php endif; ?>

                                <div class="form-group ">                                  
                                    <input type="password" name='password' value="<?= old('password') ?>" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">                                                                                                                 
                                </div>

                                <?php if (isset(session()->getFlashdata('errors')['password'])): ?>
                                    <?php $data = session()->getFlashdata('errors') ?>
                                    <p class='text-danger'>*<?= $data['password'] ?></p>
                                <?php endif; ?>

                                <div class="form-group">
                                    <input type="password" name='repeat_password' class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Ulangi Password">                                          
                                </div>

                                <?php if (isset(session()->getFlashdata('errors')['konfirmasi_password'])): ?>
                                    <?php $data = session()->getFlashdata('errors') ?>
                                    <p class='text-danger'>*<?= $data['konfirmasi_password'] ?></p>
                                <?php endif; ?>

                                <input type='submit' value='Registrasi' class="btn btn-primary btn-user btn-block">
                            
                                </input>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url("login") ?>">Sudah mempunyai akun? Login!</a>
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