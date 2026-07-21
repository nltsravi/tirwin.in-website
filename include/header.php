<?php 
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'localhost';
$base_url = $protocol . $host . '/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <base href="<?php echo $base_url; ?>" />
    <meta name="author" content="TIRWIN Management Services" />
    <meta name="description" content="TIRWIN Management Services, we specialize in transforming your Logistics & Cargo business through expert consulting, technology innovation, comprehensive training and staffing solutions">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>TIRWIN Management Services Pvt Ltd. </title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo $base_url; ?>css/plugins.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2D6S1RV6DX"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-2D6S1RV6DX');
	</script>
</head>