<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan Digital</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo/sph.png')?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('../assets/vendor/fonts/boxicons.css')?>" />

    <link rel="stylesheet" href="<?= base_url('../assets/vendor/css/core.css')?>" />
    <link rel="stylesheet" href="<?= base_url('../assets/vendor/css/theme-default.css')?>" />
    <link rel="stylesheet" href="<?= base_url('../assets/css/demo.css')?>" />

    <link rel="stylesheet" href="<?= base_url('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')?>" />

    <link rel="stylesheet" href="<?= base_url('../assets/vendor/css/pages/page-auth.css')?>" />
    <script src="<?= base_url('../assets/vendor/js/helpers.js')?>"></script>

    <script src="<?= base_url('../assets/js/config.js')?>"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <a class="app-brand-link gap-2">
                                 <span class="app-brand-logo demo">
                                      <div class="circle-logo">
                                          <img src="/assets/img/logo/sph.png" alt="Logo Ikan">
                                      </div>
                                  </span>
                                  <style>
                                    .circle-logo {
                                        width: 70px; 
                                        height: 40px; 
                                    }

                                    .circle-logo img {
                                        width: 80%; 
                                        height: 80%; 
                                    }
                                  </style>
                                <span class="app-brand-text demo menu-text fw-bolder ms-2 text-center text-capitalize" style="font-size: 20px;">Perpustakaan</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h5 class="mb-2">Welcome pada aplikasi kami! 👋</h5>
                        <p class="mb-4">Silakan Log-in menggunakan akun anda dan mulai menggunakan aplikasi kami</p>

                        <form id="formAuthentication" class="mb-3" action="<?= base_url('home/aksi_login') ?>" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Username</label>
                                <input type="text" class="form-control text-capitalize" name="username" placeholder="Enter your Username" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('../assets/vendor/libs/jquery/jquery.js')?>"></script>
    <script src="<?= base_url('../assets/vendor/libs/popper/popper.js')?>"></script>
    <script src="<?= base_url('../assets/vendor/js/bootstrap.js')?>"></script>
    <script src="<?= base_url('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')?>"></script>

    <script src="<?= base_url('../assets/vendor/js/menu.js')?>"></script>
    <script src="<?= base_url('../assets/js/main.js')?>"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>

<style>
.app-brand-text {
    font-size: 25px;
}

@media screen and (max-width: 768px) {
    .app-brand-text {
        font-size: 20px; 
    }
}


</style>