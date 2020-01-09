<?php
header('Content-type: text/plain; charset= UTF-8');
if ($_SERVER['REQUEST_METHOD']=="POST") {
if (empty($_POST['name']) || !is_string($_POST['name'])) {
}else{
$text="（　".h($_POST['name'])."　）（　".h($_POST['email'])."　）（　".h($_POST['title'])."　）（　".h($_POST['content'])."　）";
mb_language("ja");
mb_internal_encoding("UTF-8");
$subject = "S 問い合わせページからの自動送信";
$body = <<< EOM
{$text}
{$_SERVER['SERVER_NAME']}
{$_SERVER['REQUEST_URI']}
{$_SERVER['REQUEST_METHOD']}
{$_SERVER['DOCUMENT_ROOT']}
{$_SERVER['SCRIPT_FILENAME']}
{$_SERVER['SCRIPT_NAME']}
{$_SERVER['SERVER_PROTOCOL']}
{$_SERVER['QUERY_STRING']}
{$_SERVER['PHP_SELF']}
{$_SERVER['REMOTE_ADDR']}
{$_SERVER['REMOTE_PORT']}
{$_SERVER['REMOTE_HOST']}
{$_SERVER['HTTP_HOST']}
{$_SERVER['HTTP_REFERER']}
{$_SERVER['HTTP_USER_AGENT']}
{$_SERVER['HTTP_CONNECTION']}
{$_SERVER['SERVER_SOFTWARE']}
{$_SERVER['REQUEST_TIME']}
{$_SERVER['HTTP_ACCEPT']}
{$_SERVER['HTTP_ACCEPT_CHARSET']}
{$_SERVER['HTTP_ACCEPT_ENCODING']}
{$_SERVER['HTTP_ACCEPT_LANGUAGE']}
{$_SERVER['SERVER_PORT']}
EOM;
// $fromEmail = "noreply@serenelinux.com";
// $fromName = "SereneLinuxWeb";
// $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";
// mb_send_mail('naoko561010@gmail.com', $subject, $body, $header);
// mb_send_mail('serenelinux.spt@gmail.com', $subject, $body, $header);
json_post('payload={"text": "'.$body.'"}','https://s.0u0.biz/hooks/hnobhqspdtraign6qb7wet6ajo');
echo ("OK");
}
}
function h($str){
return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}
function json_post($data_json,$url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result=curl_exec($ch);
// echo 'RETURN:'.$result;
curl_close($ch);
}