<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="change">

    <div class="bg-light rounded-3 w-25 ms-5" style="height:430px; margin-top:300px">
        <p class="pt-5 px-4 fw-bold" style="direction: rtl;color:rgb(29, 29, 169);;">كلمة مرور جديدة</p>
        <p class=" px-4 fw-bold" style="direction: rtl">الآن يمكنك تعيين كلمة مرور جديدة لك</p>
        <form class="row g-3 needs-validation" action="" method="post" novalidate>

            <div class="col-md-12 mb-3 input-box ">
                <p class="mb-3 px-4 fw-bold" style="direction: rtl;color:rgb(29, 29, 169);;"> كلمه المرور الجديدة</p>
                <input type="password"   id="new-password" class="form-control password id_password  mx-auto " name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="col-md-12 mb-3 input-box ">
                <p class="mb-3 px-4 fw-bold" style="direction: rtl;color:rgb(29, 29, 169);"> تأكيد كلمة المرور الجديدة</p>
                <input type="password"  id="password-confirmation" class="form-control password id_password  mx-auto " name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="text-center log m-auto mb-3 mt-4">
                <button type="submit" class="btn py-2 text-light" id="my-button" >تفعيل</button>
            </div>
        </form>
        </div>

</body>
</html>





