<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KMS Technology - Bright Minds, Brilliant Solutions</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://kms-technology.com/wp-content/uploads/2018/10/favicon.png" rel="icon">
    <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="public/assets/css/style.css" rel="stylesheet">
    <link href="public/assets/css/main.css" rel="stylesheet">
    <link href="public/assets/css/util.css" rel="stylesheet">
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="index.php?page=main&controller=register&action=submit" method="POST"
                    class="login100-form validate-form needs-validation">
                    <span class="login100-form-title p-b-20">
                        <strong>????NG K?? T??I KHO???N H???C VI??N</strong>
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="username is required">
                        <input class="input100" type="text" name="username" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>

                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Retype password is required">
                        <input onkeyup='check();' required class="input100" type="password" name="retype_password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        <span class="label-input100">Retype Password</span>
                        <span id='message'></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Fname is required">
                        <input class="input100" type="text" name="fname" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">H???</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Lname is required">
                        <input class="input100" type="text" name="lname" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">T??n</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" onkeyup='ValidateEmail(this)'>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                        <span id='email_warning'></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Year is required">
                        <input class="input100" type="number" name="yob" onkeyup="ValidateAge(this)" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">N??m sinh</span>
                        <span id='age_warning'></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="number" name="phone" onkeyup="ValidatePhone(this)" size=10
                            required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">S??? ??i???n tho???i</span>
                        <span id='phone_warning'></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="address" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">?????a ch???</span>
                    </div>

                    <div class="form-check" style="padding-left: 0;">
                        <div class="row">
                            <label class="col-md-3 col-form-label">Gi???i t??nh:</label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="1">
                        <label class="form-check-label">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="0">
                        <label class="form-check-label">N???</label>
                    </div>


                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div>
                            <a href="index.php?page=main&controller=login&action=index" class="txt1"
                                style="font-size: 18px; color: blue;">
                                ???? c?? t??i kho???n? ????ng nh???p!
                            </a>
                        </div>

                        <div>
                            <a href="index.php?page=main&controller=layouts&action=index" class="txt1"
                                style="font-size: 18px; color: blue;">
                                Tr??? v??? trang ch???!
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" style="background-color: green; font-size: 20px;"
                            value="????ng k?? t??i kho???n">
                    </div>
                </form>

                <div class="login100-more" style="background-size: 1000px; background-color:aliceblue;">
                </div>
            </div>
        </div>
    </div>

</body>

<script>
var check = function() {
    let psw1 = document.getElementsByName("pass");
    let psw2 = document.getElementsByName("retype_password");
    if (psw1[0].value === psw2[0].value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Matching';
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Not matching';
    }
}

function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.value.match(mailformat)) {
        document.getElementById('email_warning').style.color = 'green';
        document.getElementById('email_warning').innerHTML = 'Valid';
    } else {
        document.getElementById('email_warning').style.color = 'red';
        document.getElementById('email_warning').innerHTML = 'Not valid';
    }
}

function ValidateAge(age) {
    document.getElementById('age_warning').innerHTML = '';
    if ((age.value <= 1900 || age.value > 2022)) {
        document.getElementById('age_warning').style.color = 'red';
        document.getElementById('age_warning').innerHTML = 'Not valid';
    }
}

function ValidatePhone(phone) {
    document.getElementById('phone_warning').innerHTML = '';
    if (phone.value.length != 10) {
        document.getElementById('phone_warning').style.color = 'red';
        document.getElementById('phone_warning').innerHTML = 'not valid';
    }
}
</script>

</html>