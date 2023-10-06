<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>تسجيل الدخول</title>
    <style>
*{
    font-family:'stc';
    color: rgb(105, 103, 102);


}
        .section-auth .auth-block {
            background: #fff;
            border-radius: 9px;
            box-shadow: 0 11px 15px -7px rgb(0 0 0 / 20%), 0 9px 46px 8px rgb(0 0 0 / 12%),
                0 24px 38px 3px rgb(0 0 0 / 14%);
        }
        .section-auth .auth-block {
             width: 35%;
        }
        .mt-auto,
        .pt-5 {
            margin-top: 0 !important;
        }

        .pt-3 {
            padding-top: .25rem !important;
        }


        .image img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
    <hr class="hr-top-header">
    <div class="section-auth text-right mt-4">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="auth-block px-2 py-1 mt-5">
                    <div class="logo text-right pt-4">
                        <a href="#"><img src="images/rasel-logo.png" alt="" width="150"></a>
                    </div>
                    <div class="auth-title text-center mt-5 ">
                        <p class="h3">تسجيل الدخول</p>
                    </div>
                    <form id="login_customer" class="mt-3 w-100">
                        <div class="form-group  m-2">
                            <label for="mobile_number">رقم الجوال</label>
                            <input type="number" id="mobile_number" name="mobile_number" class="form-control"
                                placeholder="رقم الجوال" autocomplete="off">
                        </div>
                        <div class="form-group m-2">
                            <label for="password">كلمة المرور</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="كلمة المرور" autocomplete="off">
                        </div>
                        <div class="m-2 text-right pb-4 text-decoration-none">
                            <a href="#" style="color: inherit; font-size: 16px ; text-decoration:none  ">نسيت كلمة المرور</a>
                        </div>
                        <button class=" w-100 p-2 mt-3 text-white"  style = "background-color: rgb(65, 130, 195);"data-action="login">تسجيل الدخول</button>
                    </form>
                    <div class="mt-2 text-center text-decoration-none ">
                        <a href="#" style="color: inherit; font-size: 16px ; text-decoration:none">ليس لديك حساب؟</a>
                    </div>
                </div>
                <div class="image-mobile mt-5">
                    <img class="w-100 rounded" src="images/login-2.jpg" alt="">
                </div>
                
            </div>
        </div>
    </div>
    <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
