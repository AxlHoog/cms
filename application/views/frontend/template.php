<!DOCTYPE html>
<html>
<head>
	<title>
	<?php echo $title;?>
	</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $style;?>" />
    <meta charset="<?php echo $meta_charset;?>" />
    <meta name="description" content="<?php echo $meta_description;?>" />
    <meta name="keywords" content="<?php echo $meta_keywords;?>" />
    <meta name="author" content="<?php echo $meta_author;?>" />
    
</head>
<body>
<div id="top-menu">
	<?php if(!$show_user_name):?>
		<div class="text">Welcome Guest</div>
		<div class="login-button"> Login / Register</div>
	<?php else:?>
		<div class="text">Welcome User</div>
	<?php endif;?>    
</div>

<div id="menu-left">
</div>

<div id="content">
	<?php echo $content;?>
</div>
</body>
</html>
