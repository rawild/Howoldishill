<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title', 'HowoldisHill?')
    </title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   <link rel="stylesheet" href="/css/p4.css" type="text/css" />
    @yield('head')
  </head>

  <body>
    <div class="container-fluid theme-showcase" role="main">

      <div class="row row-centered" >
        <div class="col-md-3 col-md-offset-4 col-centered">
          <header>

            @yield('header')
          </header>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-1">
          <img alt="Hillz" src=/images/Hillz.jpg class="img-circle">
        </div>
        <div class="col-md-4 col-md-offset-2">
          <section class="contents">
            @yield('contents')
          </section>
        </div>
      </div>


      <footer>
      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
      </script>

    </div>

  </body>

</html>
