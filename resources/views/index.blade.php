<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">
      
                <a href="/"><strong>Главная страница</strong></a>
                <a href="/articles">Статьи</a>

                <hr>
                
                @foreach ($articles as $article)
                    <a href="/article/{{$article->slug}}">
                        <h2>{{$article->title}}</h2>
                        <div>views: {{$article->views}} | likes: {{$article->likes}} </div>
                        <img src="{{$article->cover}}" alt="{{$article->title}}">
                        {{
                            Str::substr($article->body,0,100)
                        }}
                    </a>
                    <hr>
                @endforeach
                

                @foreach ($tags as $tag)
                        <a href="/articles/tag/{{$tag->id}}">
                            <span class="badge badge-secondary">{{$tag->title}}</span>
                        </a>
                @endforeach

    </body>
</html>
