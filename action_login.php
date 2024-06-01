<?php
    include("includes/header.php");
    include("includes/nav.php"); 
?>
<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];}
else
    exit("برخی از فیلد ها مقدار دهی نشده است");

    $Connection = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

    $Query = "SELECT * FROM users WHERE email='$email'";
    $Result = mysqli_query($Connection, $Query);

    $row = mysqli_fetch_array($Result);   //ذخيره اطلاعات ركورد كاربر در آرايه $row

if ($row) {
    $_SESSION["state_login"] = true;
    $_SESSION["email"] = $row['email'];
    $_SESSION["password"] = $row['password'];


    if ($row["type"] == 0)
        $_SESSION["user_type"] = "public";
        
    elseif ($row["type"] == 1) {
        $_SESSION["user_type"] = "admin";}


    echo ("<p style='color:green;'><b>{$row['email']} به فروشگاه خوش آمديد</b></p>");
} else
    echo ("<p style='color:red;'><b>نام كاربري يا كلمه عبور يافت نشد</b></p>");


mysqli_close($Connection);   // قطع اتصال پايگاه داده
?>