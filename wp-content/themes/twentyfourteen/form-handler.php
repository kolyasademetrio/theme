<?php
//подключение функций движка
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

$sendto   = "admin@gmail.com";

if (isset($_POST["name"]) && !empty($_POST["name"])) {
	$username = trim($_POST['name']);
	$username = strip_tags($username);
	$username = htmlspecialchars($username, ENT_QUOTES);
	$username = stripslashes($username);
}
	
if (isset($_POST["phone"]) && !empty($_POST["phone"])) {
	$userphone = $_POST['phone'];
}

if (isset($_POST["email"]) && !empty($_POST["email"])) {
	$email = $_POST['email'];
}

// UTM метки
if (isset($_POST["source"]) && !empty($_POST["source"])) {
	$source = $_POST['source'];
}

if (isset($_POST["term"]) && !empty($_POST["term"])) {
	$term = $_POST['term'];
}

if (isset($_POST["medium"]) && !empty($_POST["medium"])) {
	$medium = $_POST['medium'];
}

if (isset($_POST["campaign"]) && !empty($_POST["campaign"])) {
	$campaign = $_POST['campaign'];
}

if (isset($_POST["content"]) && !empty($_POST["content"])) {
	$content = $_POST['content'];
}



session_start(); // открываем сессию
$ref_wp = wp_get_referer(); // сохраняем $_SERVER['HTTP_REFERER']
$_SESSION['ref_wp'] = $ref_wp;


// echo '<code>$_SERVER[\'HTTP_REFERER\']</code> - ' . $ref . '</br>';
// echo '<code>wp_get_referer()</code> - ' . $ref_wp . '</br>';
// echo '<code>esc_url(home_url(\'/\'))</code> - ' . esc_url(home_url('/'));

// wp_die();
// $_SESSION['ref'] = $ref;

// $find = '.php';

// $pos = strpos($ref, $find);

// if ($pos === false)
// {
// 	$backurl = 'thx-index.php';
// }
// else if ($pos !== false)
// {
// 	$parseUrl = parse_url($ref);

// 	$path = trim($parseUrl['path'], "/");

// 	$pathArr = explode('/', $path);

// 	$path = array_pop($pathArr);

// 	$backurl = 'thx-' . $path;
// }






$headmail = "Name";

$subject  = "Название: Новое сообщение";
$headers  = "From: " . strip_tags($headmail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($headmail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Получить консультацию</h2>\r\n";

if ( isset( $username ) ) {
	$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
}

if ( isset( $userphone ) ) {
	$msg .= "<p><strong>Номер телефона:</strong> ".$userphone."</p>\r\n";
}

if ( isset( $email ) ) {
	$msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
}

// UTM метки
if ( isset( $source ) ) {
	$msg .= "<p><strong>Источник:</strong> ".$source."</p>\r\n";
}

if ( isset( $term ) ) {
	$msg .= "<p><strong>Ключевое слово/фраза:</strong> ".$term."</p>\r\n";
}

if ( isset( $medium ) ) {
	$msg .= "<p><strong>Канал компании:</strong> ".$medium."</p>\r\n";
}

if ( isset( $campaign ) ) {
	$msg .= "<p><strong>Название компании:</strong> ".$campaign."</p>\r\n";
}

if ( isset( $content ) ) {
	$msg .= "<p><strong>Дополнительная информация:</strong> ".$content."</p>\r\n";
}

$msg .= "</body></html>";

if(@mail($sendto, $subject, $msg, $headers)) {
    wp_redirect( home_url('/страница-благодарности-формы') ); 
    exit;
} else {
    wp_redirect( home_url('/страница-ошибки-формы') ); 
    exit;
}

?>