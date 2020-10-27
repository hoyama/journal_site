<h1>新規論文投稿</h1>
<form action="/articles" method="post">
    @csrf
    <p>
        <b>論文タイトル</b>
    </p>
    <input type="string" name="title"  value ="{{ old('title') }}";><br>

    <p>
        <b>本文</b>
    </p>


    <input type="text" name="body"  value ="{{ old('body') }}";>
    <br>

    <input type="submit" value="投稿" value ="{{old('')}}">

    {{-- <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"> --}}
</form>