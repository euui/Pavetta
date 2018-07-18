<?php $this->need('header.php'); ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
  <?php if ($this->is('index')): ?><title>帕维塔</title>
	<?php else: ?>
	<title><?php $this->archiveTitle('.', '', ' - '); ?>帕维塔</title>
	<?php endif; ?>
	<!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>">
    <![endif]-->
  <?php $this->header("generator=&template=&"); ?>
</head>
<body>

<section>
<div class="alert for404">
					<?php echo("404") ?>
					</div>
</section>

</div>
</div>
<?php $this->need('footer.php'); ?>
</body>
</html>