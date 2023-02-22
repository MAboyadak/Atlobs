<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <!-- Cairo Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Style-->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body class="change">
    <div class="myform">
        <div class="container row text-end py-4 px-3" id="theform">
            <div class="col-12 col-md-4 bg-white py-3" style="border-radius:10px;margin-top:14rem">
                <form class="row g-3 needs-validation" action="" method="post" novalidate>
                    <h4 class="col-12 pt-5 px-4 fw-bold " style="direction: rtl;color:#3a4c94;">كلمة مرور جديدة</h4>
                    <p class="col-12 px-4 fw-bold" style="direction: rtl">الآن يمكنك تعيين كلمة مرور جديدة لك</p>
                    <div class="col-12 mb-3 input-box ">
                        <p class="mb-3 px-4 fw-bold" style="direction: rtl;color:#3a4c94"> كلمه المرور الجديدة</p>
                        <input type="password"   id="new-password" class="form-control password id_password  mx-auto " name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="col-12 mb-3 input-box ">
                        <p class="mb-3 px-4 fw-bold" style="direction: rtl;color:#3a4c94;"> تأكيد كلمة المرور الجديدة</p>
                        <input type="password"  id="password-confirmation" class="form-control password id_password  mx-auto " name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="col-12 text-center log m-auto mb-3 mt-4">
                        <button type="submit" class="btn py-2 text-light" id="my-button" >تفعيل</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-5 mx-0">
                <img src="{{asset ('images/teamwork-bro.png')}}" width="600px" height="600px" class="team-work">
            </div>
        </div>
    </div>


</body>
</html>





