// تابع بررسی صحت کد کپچا
function validateCaptcha(inputValue) {
    var captchaValue = document.getElementById("captcha").innerHTML;
    return inputValue === captchaValue;
}

// تابع تولید و نمایش کد کپچا
function generateCaptcha() {
    var captcha = Math.random().toString(36).substr(2, 6); // تولید یک رشته تصادفی به طول 6 کاراکتر
    var captchaContainer = document.getElementById("captcha");
    captchaContainer.innerHTML = captcha;
    return captcha;
}

// اجرای تابع برای ایجاد کد کپچا هنگام بارگذاری صفحه
generateCaptcha();

// بررسی صحت کد کپچا هنگام ارسال فرم
function validateForm() {
    var inputCaptcha = document.getElementById("captchaInput").value;
    if (!validateCaptcha(inputCaptcha)) {
        alert("کد کپچا اشتباه است!");
        return false;
    }
    return true;
}
