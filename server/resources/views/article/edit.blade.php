<h1>新規論文投稿</h1>
<form action="/articles" method="post">
    @csrf
    <p>
        <b>論文タイトル</b>
    </p>
    <input type="text" name="title"  value ="{{ old('title') }}";><br>

    <p>
        <b>本文</b>
    </p>


    <textarea type="text" name="body"  value ="{{ old('body') }}";></textarea>
    <br>

    <input type="submit" value="投稿">

    {{-- <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"> --}}
</form>