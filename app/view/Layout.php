<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="public\bootstrap\node_modules\bootstrap\compiler\bootstrap.css">
  		<link rel="stylesheet" href="public\bootstrap\node_modules\bootstrap\compiler\style.css">
  		<link rel="stylesheet" href="public\css\alli.css">
  		<link rel="stylesheet" href="public\css\cadastroo.css">
		<meta name="author" content="Kandu">
		<meta name="description" content="<?php echo $this->getDescription(); ?>">
		<meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
		<title><?php echo $this->getTitle();?></title>
		<link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
		<?php echo $this->addHead(); ?>
	</head>
	<body>
   
		<div class="Main">
		<?php echo $this->addMain(); ?>
		</div>
		<div class="Footer">
		<?php echo $this->addFooter(); ?>
		</div>
	</body>	
</html>