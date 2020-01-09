<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@serene_jp">
    <meta property="og:type" content="website">
    <meta property="og:site_name" contet="serenelinux.com">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:image" content="https://serenelinux.com/img/icon/150.png">
    <link rel="apple-touch-icon-precomposed" href="https://serenelinux.com/img/icon/150.png">
    <meta name="msapplication-TileImage" content="https://serenelinux.com/img/icon/150.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="shortcut icon" href="https://serenelinux.com/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://serenelinux.com/img/icon/16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="https://serenelinux.com/img/icon/32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://serenelinux.com/img/icon/48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="https://serenelinux.com/img/icon/64.png" sizes="64x64" type="image/png">
    <title>問い合わせ - SereneLinux Official Site</title>
    <meta property="og:title" content="問い合わせ - SereneLinux Official Site">
    <meta name="description" content="SereneLinuxに関する、問い合わせはこちら。バグ不具合の報告はユーザーフォーラムまたはDiscordコミュニティーへ">
    <meta property="og:description" content="SereneLinuxに関する、問い合わせはこちら。バグ不具合の報告はユーザーフォーラムまたはDiscordコミュニティーへ">
    <meta property="og:url" content="https://serenelinux.com/contact/">
    <link rel="canonical" href="https://serenelinux.com/contact/">
    <link rel="alternate" href="https://serenelinux.com/contact/" hreflang="ja-jp">
    <link rel="alternate" href="https://serenelinux.com/en/contact/" hreflang="en-us">
    <link rel="alternate" href="https://serenelinux.com/contact/" hreflang="x-default">
    <meta name="google" content="notranslate">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
  <input type="checkbox" name="gnav-bin" id="gnav-bin">
  <header id="head">
    <h1><a href="/"><img src="/img/icon/64.png" alt="セレネリナックス"><span>SereneTeam</span></a></h1>
    <label class="gnav-open" for="gnav-bin"><i class="material-icons">menu_open</i></label>
    <nav id="gnav">
      <label class="gnav-close" for="gnav-bin"><i class="material-icons">close</i></label>
      <ul id="gnav-ul">
        <li><a href="/">ホーム</a></li>
        <li><a href="/forum/">フォーラム</a></li>
        <li><a href="/download/">ダウンロード</a></li>
        <li><a href="/blog/">ブログ</a></li>
        <li><a href="/links/">リンク集</a></li>
        <li><a href="/donation/">寄付する</a></li>
        <li><a href="/team/">チーム</a></li>
      </ul>
    </nav>
  </header>
  <article class="contact">
    <h1>SereneLinux <span>問い合わせフォーム</span></h1>
    <form id="form">
      <label>件名: </label>
      <input type="text" name="title" id="f_title">
      <label>お名前: </label>
      <input type="text" name="name" id="f_name">
      <label>Email: </label>
      <input type="email" name="email" id="f_email">
      <label>問い合わせ内容: </label>
      <textarea name="content" id="f_content"></textarea>
      <input type="button" id="ajax" value="送信">
    </form>
    <div class="thanks">
      <p>送信が完了しました内容を確認次第。<br>
      入力されたメールアドレスにご返信致します。<br>
      ご返信に１日ほどかかる場合がございます。予めご了承ください。</p>
      
    </div>
  </article>
  <a href="/en/links/" id="language">
    <img src="data:image/gif;base64,R0lGODdhIAARAPUAAAQujIRCRNze7BQ6lBQujOQCFAw2lPzm7AwujERerCxKnBw+lOTi7FxytIxubHSGvDxapKy21OwuPExmrGR6tAwyjGyCvJSizCRGnIyOjOQSJDRSpOzq9PRqdPz6/KSu1PS2vIRKTPze3BQ2lOQKHAQylIwqNAwylAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAIAARAAAGr8DFhDAsKhTDRoDEbDqfTWFjMm1AJhMIZXMBeb/g8HexLSus5/NHxG6732wQQWGhk5EN8iAk6fv/gH0aeg8jFAZWZAAPER6Oj5CRjgwVJ4cWABQYWosADh2goaKjoQOXmSdYihYZYq5hCJ2HmpyHEQe4ubq7uCIEp4eqsyYFxcbHyMYCHMzNzs280boir9XWYaTZ2tugDJLf4OEMGoHl5ucaIHDr7O3X79ZQ8vP0TEEAOw==" alt="アメリカ国旗">
    <span>English</span>
  </a>
  <footer id="foot"><p><a href="/">問い合わせ</a></p><small>&copy; 2019-2020 SereneLinux</small></footer>
<script>
$(function(){
$('#ajax').on('click',function(){
$.ajax({
url:'./q.php',
type:'POST',
data:{
'mail':$('#f_email').val(),
'name':$('#f_name').val(),
'title':$('#f_title').val(),
'content':$('#f_content').val()
}
})
.done( (data) => {
if (data==="OK") {
$('#form').slideUp(500);
$('.thanks').slideDown(500);
}else{
}
})
.fail( (data) => {
$('#form').slideDown(500);
$('.thanks').slideUp(500);
})
.always( (data) => {
});
});
});
</script>
</body>
</html>
