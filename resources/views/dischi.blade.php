<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>

        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/dischi.css">
    </head>
    <body>

          <header>
              <div class="container">
                <img src="img/logo.png" alt="logo"/>
                <a href="/home">Torna alla Home</a>
              </div>
          </header>

          <div class="cds-container container">
            @foreach ($data as $cd)
              <div class="cd">
                  <img src="{{ $cd['poster'] }}" alt="immagine">
                  <h3>{{ $cd['author'] }}</h3>
                  <span class="author">{{ $cd['title'] }}</span>
                  <span class="year">{{ $cd['year'] }}</span>
                  <span class="genre">{{ $cd['genre'] }}</span>
              </div>
            @endforeach
          </div>

    </body>
</html>
