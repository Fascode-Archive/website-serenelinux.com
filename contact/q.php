<?php
header('Content-type: text/plain; charset= UTF-8');
if ($_SERVER['REQUEST_METHOD']=="POST") {
if (empty($_POST['name']) || !is_string($_POST['name'])||
empty($_POST['mail']) || !is_string($_POST['mail'])||
empty($_POST['title']) || !is_string($_POST['title'])||
empty($_POST['content']) || !is_string($_POST['content'])
) {
}else{
if(okmail($_POST['mail'])){
// mb_language("ja");
// mb_internal_encoding("UTF-8");
// $subject = "S 問い合わせページからの自動送信";
$body = <<< EOM
件名: {$_POST['title']} | お名前: {$_POST['name']} | メールアドレス: {$_POST['mail']}
内容: {$_POST['content']}

{$_SERVER['SERVER_NAME']}| {$_SERVER['REQUEST_METHOD']} | {$_SERVER['SCRIPT_NAME']} | {$_SERVER['HTTP_REFERER']} | {$_SERVER['HTTP_USER_AGENT']} | {$_SERVER['HTTP_CONNECTION']} | {$_SERVER['REMOTE_ADDR']}:{$_SERVER['REMOTE_PORT']} | {$_SERVER['REMOTE_HOST']}
EOM;
// {$_SERVER['HTTP_HOST']}
// {$_SERVER['SERVER_PROTOCOL']}
// {$_SERVER['QUERY_STRING']}
// {$_SERVER['REQUEST_URI']}
// {$_SERVER['DOCUMENT_ROOT']}
// {$_SERVER['SCRIPT_FILENAME']}
// {$_SERVER['PHP_SELF']}
// {$_SERVER['SERVER_SOFTWARE']}
// {$_SERVER['REQUEST_TIME']}
// {$_SERVER['HTTP_ACCEPT']}
// {$_SERVER['HTTP_ACCEPT_CHARSET']}
// {$_SERVER['HTTP_ACCEPT_ENCODING']}
// {$_SERVER['HTTP_ACCEPT_LANGUAGE']}
// {$_SERVER['SERVER_PORT']}
// EOM;
// $fromEmail = "noreply@serenelinux.com";
// $fromName = "SereneLinuxWeb";
// $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";
// mb_send_mail('naoko561010@gmail.com', $subject, $body, $header);
// mb_send_mail('serenelinux.spt@gmail.com', $subject, $body, $header);

$url = "https://s.0u0.biz/hooks/hnobhqspdtraign6qb7wet6ajo";

$content = array(
    "icon_url" => "https://serenelinux.com/team/icon/minaserene.jpg",
    "username" => "web-contact",
    "text"     => h(str_replace('@', '＠', $body)),
);

$context = stream_context_create(array(
    "http" => array(
        "ignore_errors" => true,
        "method" => "POST",
        "header" => "Content-Type: application/json",
        "content" => json_encode($content),
    )
));

$response = file_get_contents($url, false, $context);

$pos = strpos($http_response_header[0], '200');
echo "OK";
// if ($pos === false) {
// }

if($response != 'ok' ) {
echo "NG";
}
    
}
}
}

function h($str){
return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}
function okmail($to){
$domain = explode('@', $to);
$domain = end($domain);
getmxrr($domain, $mx);
$fp = stream_socket_client($mx[0].':25');
if(!$fp) {exit;}
fwrite($fp, "EHLO {$mx[0]}\r\n");
$r = fread($fp, 128);
fwrite($fp, "MAIL FROM: <from@hogehoge.jp>\r\n");
$r = fread($fp, 128);
fwrite($fp, "RCPT TO: <".$to.">\r\n");
$r = fread($fp, 128);
fwrite($fp, "DATA\r\n");
$r = fread($fp, 128);
$code = substr($r, 0, 3);
if($code == 250 || $code == 354) {
return true;
} else {
return false;
}
}