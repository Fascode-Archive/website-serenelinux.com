<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@serene_jp">
    <meta property="og:type" content="website">
    <meta property="og:site_name" contet="192.168.10.100:8888">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:image" content="http://192.168.10.100:8888/img/icon/150.png">
    <link rel="apple-touch-icon-precomposed" href="http://192.168.10.100:8888/img/icon/150.png">
    <meta name="msapplication-TileImage" content="http://192.168.10.100:8888/img/icon/150.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="shortcut icon" href="http://192.168.10.100:8888/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="http://192.168.10.100:8888/img/icon/64.png" sizes="64x64" type="image/png">
    <title>Redirect - SereneLinux Official Site</title>
    <meta property="og:title" content="Redirect - SereneLinux Official Site">
    <meta name="description" content="Redirect - SereneLinux Official Site">
    <meta property="og:description" content="Please check the URL of the redirect destination before accessing">
    <meta property="og:url" content="http://192.168.10.100:8888/en/">
    <link rel="canonical" href="http://192.168.10.100:8888/en/">
    <link rel="alternate" href="http://192.168.10.100:8888/" hreflang="ja-jp">
    <link rel="alternate" href="http://192.168.10.100:8888/en/" hreflang="en-us">
    <link rel="alternate" href="http://192.168.10.100:8888/" hreflang="x-default">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/error.css">
</head>
<body>
  <input type="checkbox" name="gnav-bin" id="gnav-bin">
  <header id="head">
    <h1><a href="/en/"><img src="/img/icon/64.png" alt="icon"><span>SereneTeam</span></a></h1>
    <label class="gnav-open" for="gnav-bin"><i class="material-icons">menu_open</i></label>
    <nav id="gnav">
      <label class="gnav-close" for="gnav-bin"><i class="material-icons">close</i></label>
      <ul id="gnav-ul">
        <li><a href="/en/">HOME</a></li>
        <li><a href="/en/forum/">FORUM</a></li>
        <li><a href="/en/download/">DOWNLOAD</a></li>
        <li><a href="/en/blog/">BLOG</a></li>
        <li><a href="/en/links/">LINKS</a></li>
        <li><a href="/en/donation/">DONATION</a></li>
        <li><a href="/en/team/">TEAM</a></li>
      </ul>
    </nav>
  </header>
  <article id="main">
    <div>
        <h1>You are about to move to another site.</h1>
        <p>Click here to move</p>
        <p><a href="<?=htmlspecialchars($_GET["r"], ENT_QUOTES, 'UTF-8');?>"><?=htmlspecialchars($_GET["r"], ENT_QUOTES, 'UTF-8');?></a></p>
    </div>
    <img src="/img/character/redirect.png" alt="水瀬玲音">
  </article>
  <a href="/redirect/?r=<?=htmlspecialchars($_GET["r"], ENT_QUOTES, 'UTF-8');?>" id="language">
    <img src="data:image/gif;base64,R0lGODdhIAAVAPQAAP////vX2vWhp/F0fvvV2OUAC+UADOgcLO9kb+YAEukhMP729/vb3fnMz/va3P719vamrO9ocvKEjf7+/v709OgbKvajqfzs7f739wAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAIAAVAAAFeKBzjWRpnugoAmzrvnDMjnJtt/Stw7nNWIOBxTG59WSSQmK5lFBsR1iESU0gFrWoy1KtCrKX2qFLrTxkWlaAXCWgw7EGm9p4y9bzpTuWZinyZnYyEHlfgjJTZBEYYFBJVU5QcD4QEhIQDDp9O42cnpuePCIppKUqIQA7" alt="日本語">
    <span>日本語</span>
  </a>
  <footer id="foot"><small>© 2019 SereneLinux</small></footer>
</body>
</html>
