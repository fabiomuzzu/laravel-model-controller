<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5 ">I nostri film</h1>
            </div>
            @foreach ($movies as $movie)
                <div class="col-3 my-3">
                    <section class="articles">
                        <article>
                            <div class="article-wrapper">
                                <div class="article-body">
                                    <h2>{{$movie->title}}</h2>
                                    <p class="fw-bold">Titolo originale: <span class="fw-normal">{{$movie->original_title}}</span></p>
                                    <p class="fw-bold">Nazionalità: <span class="fw-normal text-capitalize">{{$movie->nationality}}</span></p>
                                    <p class="fw-bold">Data di uscita: <span class="fw-normal">{{$movie->date}}</span></p>
                                    <p class="fw-bold">Voto: <span class="fw-normal">{{$movie->vote}}</span></p>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            @endforeach
        </div>    
    </div>    
</body>

</html>