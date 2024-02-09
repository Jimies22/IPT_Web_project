<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign in</title>
  <style>
    .bg-body{
      background-color: #f0f2f5;
    }
    .first{
      padding-left: 33%;
    }
    .text-blue{
      color: #1877f2; font-size: 55px;font-weight: 700;
    }
    .text-black{
      color: 1c1e21;font-size: 27px; line-height: 28px;
    }
    .second{
      padding-left: 7%;
    }
    .btn-blue{
      background: #1877f2; color: white;
    }
    .pass{
      color: #1877f2; font-size:  13.5px;
    }
    .px-btn{
      padding: 0 22%;
    }
    .card{
      box-shadow: 0px 0px 12px 3px rgba(0, 0, 0, 0.2);
    }
    .form-control{
      height: 52px;
    }
    ::placeholder{
      padding-left: 3px;
    }
    .btn-green{
      background: 42b72a; color: white; padding: 12px 25px;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-body">

    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <br><br><br>
          <div class="first">
            <p class="text-blue mb-0">Facebook</p>
            <p class="text-black">Facebook helps you connect and share with the people in your life.</p>

          
          
          </div>
        </div>

        <div class="col">
          <div class="second">
            <div class="card" style="width: 26rem;">
            <div class="card-body">

              <input type="text" placeholder="Email Address or Phone Number" class="form-control">
              <input type="text" class="form-control mt-3" placeholder="Password">
              <button class="btn btn-blue fw-bold fs-5 mt-3 w-100 py-2">Log in</button>
              <p class="text-canter pass mt-3">Forgotten password?</p>
              <hr class="mt-4 text-muted">
              <div class="px-btn"><button class="btn btn-green fw-bold mt-3">Create New Account</button></div>

            </div>
            </div>
          </div>
        </div>
      </div>
    </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    
</body>

</html>