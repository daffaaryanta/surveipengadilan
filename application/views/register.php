<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url("assets/img/logo/logo.png")  ?>">
    <title>Survei Kepuasan Masyarakat</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/register.css") ?>  ">
</head>

<body onload="checkStatus()">
<section>
    <div class="container">
        <div class="input-box">
            <!-- navigation -->
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" id="login-text" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" id="signup-text" class="toggle-btn" onclick="signup()">Register</button>
            </div>

            <!-- form login -->
            <form id="login" class="input-group-login" method="POST" action="<?php echo base_url('auth'); ?>">
                <div class="input">
                    <span>Username</span>
                    <p class="invisible"><?= $user = $this->input->post('username_login');?></p>
                    <input type="text" name="username_login" id="username_login" placeholder="Masukan nama user" value="<?php if (isset($user)) { echo set_value('username_login');} else{echo $this->session->flashdata('UsernameValueBefore'); }?>">
                    <?= form_error('username_login', '<span class="error">', '</span>'); ?>
                    <?= $this->session->flashdata('messageUsername');?>
                    <?= $this->session->flashdata('messageActivation');?>
                    <!-- <= ;?> -->
                </div>
                <div class="input">
                    <span>Password</span>
                    <p class="invisible"><?= $pw = $this->input->post('password_login');?></p>
                    <input type="password" id="password_login" name="password_login" placeholder="Masukan Password" value="<?php if (isset($pw)) {echo set_value('password_login');} else{echo $this->session->flashdata('PasswordValueBefore');}?>">
                    <?= form_error('password_login', '<span class="error">', '</span>'); ?>
                    <?= $this->session->flashdata('messagePassword');?>
                </div>
                <input type="checkbox" id="checkboxLogin" onclick="showPasswordLogin()"><label for="checkboxLogin" class="show-pw">Tampilkan Password</label>
                <button type="submit" id="submit-btn-login">Login</button>
            </form>

            <!-- form sign up -->
            <form id="signup" class="input-group-signup" method="POST" action="<?php echo base_url('auth/registrasi'); ?>">
                <div class="input">
                    <span>Nama</span>
                    <input type="text" name="register_name" id="nama_user" placeholder="Masukan nama" value="<?php echo set_value('register_name') ?>">
                    <?= form_error('register_name', '<span class="error">', '</span>'); ?>
                </div>
                <div class="input">
                    <span>Username</span>
                    <input type="text" name="username_signup" id="username_signup" placeholder="Masukan nama user" value="<?php echo set_value('username_signup') ?>">
                    <?= form_error('username_signup', '<span class="error">', '</span>'); ?>
                </div>

                <div class="confirm">
                    <div class="input pw-confirm">
                        <span>Password</span>
                        <input type="password" id="password1" name="password1" placeholder="Masukan Password" value="<?php echo set_value('password1') ?>">
                    </div>
                    <div class="input pw-confirm">
                        <span>Confirm Password</span>
                        <input type="password" id="password2" name="password2" placeholder="Masukan Password" value="<?php echo set_value('password2') ?>">
                        <?= form_error('password1', '<span class="error">', '</span>'); ?>
                    </div>
                </div>

                <input type="checkbox" id="checkboxRegister" onclick="showPasswordSignup()"><label for="checkboxRegister" class="show-pw">Tampilkan Password</label>
                <button type="submit" id="submit-btn-signup">Register</button>
            </form>

        </div>
    </div>
    <div class="img-box">
        <img src="<?php echo base_url("assets/img/pengadilan.jpg") ?> ">
    </div>
</section>
<script>
    var log_in = document.getElementById("login");
    var sign_up = document.getElementById("signup");
    var nav = document.getElementById("btn");

    var login_txt = document.getElementById("login-text");
    var signup_txt = document.getElementById("signup-text");

    var login_weight = document.getElementById("login-text");
    var signup_weight = document.getElementById("signup-text");

    var pw_login = document.getElementById("password_login");
    var pw_signup = document.getElementById("password1");
    var pw_signup2 = document.getElementById("password2");

    function checkStatus(){
        <?php if (isset($stats)) { ?>
            var status = '<?= $stats; ?>'

            if (status != ''){
                signup();
            } else{
                login();
            }
            <?php } ?>
    }

    function signup() {
        log_in.style.transform = "translateX(-140%)";
        sign_up.style.transform = "translateX(17%)";
        nav.style.transform = "translateX(100%)";

        login_txt.style.color = "#777";
        signup_txt.style.color = "#000";

        login_weight.style.fontWeight = "300";
        signup_weight.style.fontWeight = "600";
    }

    function login() {
        log_in.style.transform = "translateX(17%)";
        sign_up.style.transform = "translateX(140%)";
        nav.style.transform = "translateX(0%)";

        login_txt.style.color = "#000";
        signup_txt.style.color = "#777";

        login_weight.style.fontWeight = "600";
        signup_weight.style.fontWeight = "300";
    }

    function showPasswordLogin() {
        if (pw_login.type === "password") {
            pw_login.type = "text";
        } else {
            pw_login.type = "password";
        }
    }

    function showPasswordSignup() {
        if (pw_signup.type === "password") {
            pw_signup.type = "text";
            pw_signup2.type = "text";
        } else {
            pw_signup.type = "password";
            pw_signup2.type = "password";
        }
    }
</script>
</body>

</html>