

<a href="/">Главная страница</a>
<a href="/articles"><strong>Каталог статей</strong></a>



@foreach ($articles as $article)
<h2>{{$article->title}}</h2>
<a href="/article/{{$article->slug}}">
    <img src="{{$article->cover}}" alt="{{$article->title}}">
    {{
        Str::substr($article->body,0,100)
    }}
    </a>
    <div>views: {{$article->views}} | likes: {{$article->likes}} </div>
<hr>
@endforeach
