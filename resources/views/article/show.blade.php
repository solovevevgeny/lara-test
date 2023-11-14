<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<h1>{{$article->title}}</h1>
<img src="{{$article->cover}}" alt="">
<div>views: {{$article->views}} | likes: {{$article->likes}} </div>

<hr>
@foreach ($article->tags as $tag)
    <a href="/articles/tag/{{$tag->id}}"><span class="badge badge-primary">{{$tag->title}}</a></span>
@endforeach

<hr>
<p>
    {{$article->body}}
</p>



<hr>

<form action="">
    <input type="hidden" name="article_id" value="{{$article->id}}">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="suject" /> <br>

    <label for="subject">Текст сообщения</label>
    <textarea type="text" name="message"> </textarea>
</form>