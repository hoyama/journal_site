<h1>論文一覧</h1>

<ul>
    @foreach ($articles as $article)
    <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
    @endforeach
</ul>

{{-- <input type="submit" value="新規論文投稿"> --}}
<a href="/articles/{{ $article->id }}/edit"><button>新規論文投稿</button></a>
{{-- <a href="/articles/create">投稿する</a> --}}