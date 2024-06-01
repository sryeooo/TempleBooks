<?php
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">
location.replace("index.php");	 // منتقل شود index.php به صفحه
</script>
<?php
   } // if پایان
    include("includes/header.php");
    include("includes/nav.php"); 
?>
<link rel="stylesheet" href="css/Register.css">
    <!-- login page -->
<div id="login-page" dir="rtl">

<!-- right div -->
<div id="container-right">
<div class="main-register">

<div class="login-register">
    <span class="link-register">ثبت نام</span>
    <a href="login.php" class="link">ورود</a>
</div>

<form action="action_register.php" method="POST">

<div class="form-row">
    <label for="name">نام خود را وارد کنید</label>
    <input name="name" type="text" autofocus="autofocus" class="input-field" id="name" placeholder="نام" tabindex="1" autocomplete="name" value="">
</div>

<div class="form-row">
    <label for="email">ایمیل خود را وارد کنید</label>
    <input name="email" type="email" required="required" class="input-field" id="email" placeholder="ایمیل" tabindex="2" autocomplete="on" value="">
</div>

<div class="form-row">
    <label for="password">رمز عبور</label>
    <div class="password-repassword">
        <input id="password" type="password" name="password" required="required" autocomplete="new-password" class="input-field-password" aria-autocomplete="list" placeholder="رمز عبور خود را دوباره تکرار کنید">
        <input id="password" type="password" name="password_confirmation" required="required" autocomplete="new-password" class="input-field-password" aria-autocomplete="list" placeholder="رمز عبور دوباره تکرار کنید">
    </div>
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
    <button type="submit" class="register-button">ثبت نام</button>
</div>

</form>


</div>
</div>
<!-- right div end -->

<!-- left div -->
<div id="container-left">


</div>
<!-- left div end -->
</div>
<!-- login end -->

<script src="JS/captcha.js"></script> <!-- اضافه کردن فایل جاوااسکریپت -->
<?php
    include("includes/footer.php");
    
    ?>
