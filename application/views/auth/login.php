<div class="limiter">
    <div class="container-login100" style="background-color:blue">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-10 p-b-1" style="background-image: url('img/background.jfif');background-size: cover;">
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <div class="text-center" style="margin-bottom: 10px;">
                    <img src="img/DEL.png" style="width: 100px;"><br><br>
                    <span class="login100-form-title p-b-22">
                        Institut Teknologi Del
                    </span>
                </div>
                <?= $this->session->flashdata('message') ?>
                <div class="wrap-input100 validate-input m-b-5">
                    <span class=" label-input100"></span>
                    <input class="input100" id="email" type="text" name="email" placeholder="Enter email Adress..." value="<?= set_value('email'); ?>">
                    <span class=" focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100"></span>
                    <input class="input100" id="password" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <br><br>
                <center>
                    <div class="container-login100-form-btn mb-3">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn">
                            </div>
                            <button type="submit" class="login100-form-btn" name="login">
                                <b> SIGN IN</b>
                            </button>
                        </div>
                    </div>
                </center>
                <hr>
            </form>
            <div class="text-center">
                <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
            </div>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

