<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Admin Page</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Quick Signin & Signup form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/stylelog/css/style.css" type="text/css" media="all">
    <!-- onlinefonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Custom-Stylesheet-Links -->
</head>

<body>
    <!-- <header>
        <h1 class="title-agile text-center">Admin Page</h1>
    </header> -->
    <!-- //header -->
    <section class="login-wrap">
        <?php
   // Cetak jika ada notifikasi
        if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
        <div class="main_w3agile">
            <div class="caption">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <!-- signin form -->
                <div class="signin_wthree">
                    <form method="post" action="Login">
                        <?php echo form_open('login');?>
                        <div class="group">
                            <label for="user" class="label">ID Employee</label>
                            <input id="user" type="text" class="input" name="username" value="<?php echo set_value('username'); ?>" required>
                            <p> <?php echo form_error('username'); ?> </p>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password" value="<?php echo set_value('password'); ?>" required>
                            <p> <?php echo form_error('password'); ?> </p>
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check">
                                <span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <h2><a href="#">Forgot Password?</a></h2>
                        </div>
                        <?php echo form_close();?>
                    </form>
                </div>
                <!-- //signin form -->
                <!-- signup form -->
                <div class="signup_wthree">
                    <form method="post" action="Register">
                        <?php echo form_open('register');?>
                        <div class="group">
                            <label for="user1" class="label">ID Employee</label>
                            <input id="user1" type="text" class="input" name="name" value="<?php echo set_value('name'); ?>" required>
                            <p> <?php echo form_error('name'); ?> </p>
                        </div>
                        <div class="group">
                            <label for="user1" class="label">Name</label>
                            <input id="user1" type="text" class="input" name="username" value="<?php echo set_value('username'); ?>" required>
                            <p> <?php echo form_error('username'); ?> </p>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" type="email" class="input" name="email" value="<?php echo set_value('email'); ?>" required>
                            <p> <?php echo form_error('email'); ?> </p>
                        </div>
                        <div class="group">
                            <label for="password1" class="label">Password</label>
                            <input id="password1" type="password" class="input" data-type="password" name="password" value="<?php echo set_value('password'); ?>" required>
                            <p> <?php echo form_error('password'); ?> </p>
                        </div>
                        <div class="group">
                            <label for="password2" class="label">Re-Enter Password</label>
                            <input id="password2" type="password" class="input" data-type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" required>
                            <p> <?php echo form_error('password_conf'); ?> </p>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                        <?php echo form_close();?>
                    </form>
                </div>
                <!-- //signup form -->
            </div>
            </div>
        </div>
    </section>
    <!-- //section -->
    <footer>
        <div class="copy-wthree text-center">
            <p>© 2018 sign in and sign up | Design by
                <a href="http://gmf-aeroasia.com">gmf-aeroasia</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
</body>
<!-- //Body -->

</html>