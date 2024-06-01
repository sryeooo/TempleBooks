<?php
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">
location.replace("index.php");	 // منتقل شود index.php به صفحه
</script>
<?php
   } // if پایان
?>
<?php
    include("includes/header.php");
?>
<?php
    include("includes/nav.php"); 
?>
	<link rel="stylesheet" href="css/login.css">
<!-- login page -->
<div id="login-page" dir="rtl">

    <!-- right div -->

    <div id="container-right">

    </div>
    <!-- right div end -->

    <!-- left div -->
    <div id="container-left">

        <div class="main-login">

            <div class="login-register">
                <span class="link-login">ورود</span>
                <a href="Register.php" class="link-register link">ثبت نام</a>
            </div>

        <form action="action_login.php" method="POST">

            <div class="form-row">
                <label for="email">ایمیل خود را وارد کنید</label>
                <input id="email" type="email" name="email" value="" required="required" autocomplete="email" class="input-field" placeholder="ایمیل">
            </div>

            <div class="form-row">
                <label for="password">رمز عبور خود را وارد کنید </label>
                <input id="password" type="password" name="password" required="required" autocomplete="new-password" class="input-field" aria-autocomplete="list" placeholder="رمز عبور">
            </div>

            <div id="container-input">

                <div class="form-row">
                    <label for="captcha"></label>
                    <div id="captcha">
                        <!-- نمایش کپچا در این دایو -->
                    </div> 
                </div>

                <div class="form-row">
                    <label for="captchaInput">کد امنیتی را وارد کنید</label>
                    <input id="captchaInput" type="text" name="captcha" required="required" class="input-field" placeholder="متن موجود در تصویر را وارد کنید">
                </div>
            </div>

            <div id="forget">
                <a href="forgetPassword.html" class="link">آیا رمز عبور خود را فراموش کردید؟</a>
            </div>

            <div class="submit">
                <button type="submit" class="login-button">ورود</button>
            </div>

        </form>


        </div>
    </div>
    <!-- left div end -->
</div>
<!-- login end -->

    <script src="JS/captcha.js"></script> <!-- اضافه کردن فایل جاوااسکریپت -->
   <?php
    include("includes/footer.php");
    
    ?>