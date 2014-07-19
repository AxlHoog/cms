<!DOCTYPE html>
<html>
<head>
	<title>
	<?php echo $title;?>
	</title>
   
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- Meta tags, including charset, description, keywords and author(s) -->
    <meta charset="<?php echo $meta_charset;?>" />
    <meta name="description" content="<?php echo $meta_description;?>" />
    <meta name="keywords" content="<?php echo implode(',', $meta_keywords);?>" />
    <meta name="author" content="<?php echo $meta_author;?>" />
    
</head>
<body>


      
       <?php echo $content;?>
      


</body>
</html>
