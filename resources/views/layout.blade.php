<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <script src="https://unpkg.com/vue"></script>
  <title>Phone book</title>
</head>

<body>
  <div id="wrapper">
    <header>
      <h1><a href="/" style="color: #fff; text-decoration:none;">Phone book</a></h1>
    </header>
    <nav>
      <ul>
        <li class="{{Request::is('contacts/add') ? 'add' : ''}}">
          <a href="/contacts/add" class="btn"> Add a contact</a>
        </li>
        <li class="{{Request::is('contacts/all') ? 'add' : ''}}">
          <a href="/contacts/all" class="btn">All contacts</a>
        </li>
      </ul>
    </nav>
    <main class="content">
      @yield('content')
    </main>
  </div>
</body>

</html>
