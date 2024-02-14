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
                <div class="col-12 d-flex justify-content-center">
                    <section>
                        <article>
                            <div class="article-wrapper">
                                <div class="article-body">
                                    <h2><a href="{{ route('show_film', ['id' => $movie->id]) }}"></a>{{$movie->title}}</h2>
                                    <p class="fw-bold">Titolo originale: <span class="fw-normal">{{$movie->original_title}}</span></p>
                                    <p class="fw-bold">Nazionalità: <span class="fw-normal text-capitalize">{{$movie->nationality}}</span></p>
                                    <p class="fw-bold">Data di uscita: <span class="fw-normal">{{$movie->date}}</span></p>
                                    <p class="fw-bold">Voto: <span class="fw-normal">{{$movie->vote}}</span></p>
                                    <p class="fw-bold">Descrizione: <span class="fw-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, laudantium facere delectus odit enim ea ut, quod consequuntur consequatur, nemo ratione laborum et! Odit, autem fugit rem suscipit hic eligendi.</span></p>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a class="btn btn-light my-3" href="{{route('homepage')}}">Torna Indietro</a>
                </div>
            </div>
        </div>    
    </div>    
</body>

</html>