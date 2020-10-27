<h1>論文詳細</h1>

<p>タイトル:{{ $article->title }}</p>
<p>{{ $article->body }}</p>

<a href="/articles/"><button>一覧へ戻る</button></a><br>
<a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>

<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    @method('DELETE')
    <a href="article/{{$article->id}}"></a>
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>

