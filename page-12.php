<?php    
   /**  
    * about
    * @package custom   
    */    
$this->need('header.php');?>  
<div class="col-12" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title">
					<?php $this->title() ?>
				</h1>
			</header>
			<div class="page-content post-content">
					<?php $this->content(); ?>
			</div>
		</article>
		
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>