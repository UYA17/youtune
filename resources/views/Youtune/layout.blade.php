<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')-YouTune</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/jquery.range.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/jquery.range.js"></script>
</head>

<body>
  <header class="header">
    <hi class="header-ttl"><a href="{{url('/')}}" class="ttl-link">YouTune</a></hi>
    <nav class="header-nav">
      <ul class="header-nav-list">
        <!-- <li class="header-nav-item"><a href="" class="nav-link">My page</a></li> -->
        <li class="header-nav-item"><a href="{{url('/register')}}" class="nav-link">新規登録</a></li>
        <li class="header-nav-item"><a href="{{url('/login')}}" class="nav-link">ログイン</a></li>
      </ul>
    </nav>
  </header>
  <main>
    @yield('content')


  </main>
</body>

</html>