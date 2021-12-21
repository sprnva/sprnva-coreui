<?php

use App\Core\App;
use App\Core\Request;
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Judywen Guapin">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard,Sprnva">
    <title>
        <?= ucfirst($pageTitle) . " | " . App::get('config')['app']['name']; ?>
    </title>
    <link rel="manifest" href="<?= public_url('/assets/coreui/assets/favicon/manifest.json') ?>">
    <link rel='icon' href='<?= public_url('/favicon.ico') ?>' type='image/ico' />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= public_url('/favicon.ico') ?>">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?= public_url('/assets/coreui/css/coreui.min.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/coreui/css/coreui-grid.min.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/coreui/css/coreui-reboot.min.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/coreui/css/coreui-utilities.min.css') ?>">
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <?= alert_msg(); ?>
                    </div>
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-5 text-white bg-primary py-5">
                            <div class="card-body text-center">
                                <div>
                                    <h2>Sprnva Framework</h2>
                                    <p>Flavored with coreUI components.</p>
                                    <!-- <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-7 p-4 mb-0">
                            <form method="POST" action="<?= route('/login') ?>">
                                <?= csrf() ?>
                                <div class="card-body">
                                    <h3>Already have an account?</h3>
                                    <p class="text-medium-emphasis">Sign In to your account</p>
                                    <div class="input-group mb-3"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="<?= public_url('/assets/coreui/assets/icons/user.svg') ?>"></use>
                                            </svg></span>
                                        <input class="form-control" type="text" placeholder="Username" name="username" autocomplete="off" autofocus value="<?= old('username') ?>">
                                    </div>
                                    <div class="input-group mb-4"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="<?= public_url('/assets/coreui/assets/icons/sprites/free.svg#cil-lock-locked') ?>"></use>
                                            </svg></span>
                                        <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">Login</button>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a href="<?= route('/forgot/password'); ?>" class="btn btn-link px-0">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= public_url('/assets/coreui/js/coreui.min.js') ?>"></script>
    <script src="<?= public_url('/assets/sprnva/js/popper.min.js') ?>"></script>
    <script src="<?= public_url('/assets/coreui/js/coreui.bundle.min.js') ?>"></script>
</body>

</html>