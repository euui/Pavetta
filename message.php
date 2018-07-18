<?php
/**  
    * message    
    * @package custom   
    */ 

 $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
			<div class="alert message">
					<?php _e('留言板'); ?>
					</div>
			<ul class="al_mon_list_massage">	
				<li><?php _e('人生各自精彩，欢迎分享你的想法。'); ?></li>
			</ul>
		</article>
	
		<?php $this->need('commentsmsg.php'); ?>
	</div>
	
    
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
