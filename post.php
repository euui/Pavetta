<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title"><?php $this->title() ?></h1>
			</header>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"></><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><div class="post-meta-pavetta"><?php _e('//'); ?></div></li>
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y年m月d日'); ?></time></li>
				<li><div class="post-meta-pavetta"><?php _e('//'); ?></div></li>
				<li><?php $this->category(','); ?></li>
			</ul>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
			<ul class="post-tags">
        <?php $this->tags(''); ?>
			</ul>
			<div class="alert zhuanzai">
					未经同意，本站内容谢绝转载！
					</div>
			<ul class="pager">
	<li class="previous">
       <?php $this->thePrev('%s'); ?></li>  
  <li class="next">
       <?php $this->theNext('%s'); ?></li>
    </ul>
		</article>
		</br>
      </br>
		<?php $this->need('comments.php'); ?>
	</div>
	
    
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
