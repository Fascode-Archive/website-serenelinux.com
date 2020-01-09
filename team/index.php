<?php
require_once 'databaseconfig.php';
try{
  $pdo = new PDO(
    'mysql:host='.$db['host'].';dbname='.$db['dbname'].';charset=utf8mb4',
    $db['user'],
    $db['pass'],
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );

  $id;$name;$r=[];
  $stmt=$pdo->prepare("SELECT * FROM main");
  $stmt->execute();
  foreach($stmt as $k => $v){
    $name=h($v["name"]);
    $icon=h($v["icon"]);
    $descript=h($v["descript"]);
    $sns=explode(',',h($v["sns"]));
    $r[$k]='<li><p class="title"><img src="'.$icon.'">'.$name.'</p><p class="text">'.$descript.'</p><div class="link">';
    foreach ($sns as $kk=> $vv) {
      $r[$k].='<a href="'.$vv.'"><img src="//www.google.com/s2/favicons?domain='.$vv.'"></a>';
    }
    $r[$k].='</div></li>';
  }

}catch(PDOException $e){
  header('Content-Type: text/plain; charset=UTF-8', true, 500);
  exit($e->getMessage());
}
function h($s){
  return htmlspecialchars($s,ENT_QUOTES,'UTF-8');
}
?>
<!DOCTYPE html>
<html>
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
    <title>チーム - SereneLinux セレネリナックス 公式サイト 日本語ページ</title>
    <meta property="og:title" content="チーム - SereneLinux セレネリナックス  公式サイト 日本語ページ">
    <meta name="description" content="SereneLinuの開発等に大きく関わってる方々をご紹介するページです。このページ以外にもメンバーはいますが、大きな実績がまだありません。チーム集">
    <meta property="og:description" content="SereneLinuxの開発等に大きく関わってる方々をご紹介するページです。このページ以外にもメンバーはいますが、大きな実績がまだありません。チーム集">
    <meta property="og:url" content="https://serenelinux.com/team/">
    <link rel="canonical" href="https://serenelinux.com/team/">
    <link rel="alternate" href="https://serenelinux.com/team/" hreflang="ja-jp">
    <link rel="alternate" href="https://serenelinux.com/en/team/" hreflang="en-us">
    <link rel="alternate" href="https://serenelinux.com/team/" hreflang="x-default">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/team.css">
    <meta name="google" content="notranslate">
</head>
<body>

<input type="checkbox" name="gnav-bin" id="gnav-bin">
  <header id="head">
    <h1><a href="/"><img src="/img/icon/64.png" alt=""><span>SereneTeam</span></a></h1>
    <label class="gnav-open" for="gnav-bin"><i class="material-icons">menu_open</i></label>
    <nav id="gnav">
      <label class="gnav-close" for="gnav-bin"><i class="material-icons">close</i></label>
      <ul id="gnav-ul">
        <li><a href="/">ホーム</a></li>
        <li><a href="/forum/">フォーラム</a></li>
        <li><a href="/download/">ダウンロード</a></li>
        <li><a href="/blog/">ブログ</a></li>
        <li><a href="/links/">リンク集</a></li>
        <li><a href="/donate/">寄付する</a></li>
        <li><a href="/team/">チーム</a></li>
      </ul>
    </nav>
  </header>
  <article class="team">

  <?php echo '<ul class="Team-box">';foreach($r as $v){echo $v;}echo '</ul>'; ?>

<!-- <h1 class="main-title">SereneLinuxの開発に参加してください。</h1>
<p class="main-text l main-d-img">
このフォームより開発陣への参加が可能です。<br>
SereneLinuxによる審査の後、SlackやTrelloなどへ順次招待します。<br>
回答は遅れることがあります。 ご了承ください。</p>
<div id="main-form">
  <label>Eメール
  <input id="f_mail" type="email" value=""></label>
  <label>ニックネーム
  <input id="f_name" type="text" value=""></label>
  <label>参加したい理由
  <input id="f_reason" type="text" value=""></label>
  <button type="button"id="ajax">送信</button>
</div>
<div class="thanks">
  <p class="main-text l main-d-img">内容を確認して返信します。</p>
</div> -->
  </article>
  <a href="/en/team/" id="language">
    <img src="data:image/gif;base64,R0lGODdhIAARAPUAAAQujIRCRNze7BQ6lBQujOQCFAw2lPzm7AwujERerCxKnBw+lOTi7FxytIxubHSGvDxapKy21OwuPExmrGR6tAwyjGyCvJSizCRGnIyOjOQSJDRSpOzq9PRqdPz6/KSu1PS2vIRKTPze3BQ2lOQKHAQylIwqNAwylAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAIAARAAAGr8DFhDAsKhTDRoDEbDqfTWFjMm1AJhMIZXMBeb/g8HexLSus5/NHxG6732wQQWGhk5EN8iAk6fv/gH0aeg8jFAZWZAAPER6Oj5CRjgwVJ4cWABQYWosADh2goaKjoQOXmSdYihYZYq5hCJ2HmpyHEQe4ubq7uCIEp4eqsyYFxcbHyMYCHMzNzs280boir9XWYaTZ2tugDJLf4OEMGoHl5ucaIHDr7O3X79ZQ8vP0TEEAOw==" alt="アメリカ国旗">
    <span>English</span>
  </a>
  <footer id="foot"><p><a href="/contact/">問い合わせ</a></p><small>&copy; 2019-2020 SereneLinux</small></footer>
</body>
<!-- <script>
$(function(){
$('#ajax').on('click',function(){
$.ajax({
url:'./q.php',
type:'POST',
data:{
'mail':$('#f_mail').val(),
'name':$('#f_name').val(),
'reason':$('#f_reason').val()
}
})
.done( (data) => {
if (data==="OK") {
$('#main-form').slideUp(500);
$('.thanks').slideDown(500);
}else{
}
})
.fail( (data) => {
$('#main-form').slideDown(500);
$('.thanks').slideUp(500);
})
.always( (data) => {
});
});
});
var element=null;
window.onscroll=function(){
var scrollTop=document.documentElement.scrollTop||document.body.scrollTop,
scrollHeight=document.documentElement.scrollHeight||document.body.scrollHeight;
if(element==null){
element=document.getElementById('head-back');
elements=document.getElementById('head');
}
if(scrollTop/scrollHeight>0.1){
element.classList.add('head-back');
elements.classList.add('gnav-color');
}else{
element.classList.remove('head-back');
elements.classList.remove('gnav-color');
}
}
</script> -->
</body>
</html>
