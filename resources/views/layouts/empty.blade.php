<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{url('bootstrap\bootstrap-5.2.3-dist')}}\css\bootstrap.min.css">
  <link rel="stylesheet" href="{{url('resources\css')}}\produc.css">
  <link rel="shortcut icon" type="image/png" href="{{url('resources')}}\views\images\icon-cosmetics.png" />
  <script src="https://kit.fontawesome.com/830f7d44c3.js" crossorigin="anonymous"></script>
</head>

<body>
  <main>
    @yield('main')
  </main>
</body>




</html>
<script src="{{url('bootstrap\bootstrap-5.2.3-dist')}}\js\bootstrap.bundle.min.js"></script>

@if(session('DN')=='fail')
<script>
  alert('Thông tin đăng nhập không đúng!');
</script>
@endif