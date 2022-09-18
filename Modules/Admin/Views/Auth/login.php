<?php $this->extend('guest');?>
<?php $this->section('content'); ?>
<div class="login-box">
    <div class="login-logo">
        <b>Admin Panel</b>
    </div>
    <?php $validation =  \Config\Services::validation(); ?>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="<?= base_url('admin/login') ?>" method="post">
                <?= csrf_field() ?>
                <div class="input-group mb-3">
                    <input type="email" class="form-control <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" placeholder="Email" name="email" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <?php if ($validation->getError('email')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid <?php endif ?>" placeholder="Password" name="password"/>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <?php if ($validation->getError('password')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>

                </div>
            </form>
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>

            <p class="mb-1">
                <a href="<?= base_url('admin/forgot-password') ?>">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="<?= base_url('admin/register') ?>" class="text-center">Register a new membership</a>
            </p>
        </div>

    </div>
</div>
<?php $this->endSection(); ?>
