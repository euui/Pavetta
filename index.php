<?php
/**
 * 简单的响应式模板
 * 
 * @package Pavetta
 * @author pavetta
 * @version 1.1
 * @link http://pavetta.com
 */
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<article class="post">
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2
				</header>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"></><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><div class="post-meta-pavetta"><?php _e('//'); ?></div></li>
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y年m月d日'); ?></time></li>
				<li><div class="post-meta-pavetta"><?php _e('//'); ?></div></li>
				<li><?php $this->category(','); ?></li>
			</ul>
			
				<div class="post-content">
					<p><?php $this->excerpt(200); ?></p>
					
					<p class="euui_menu"><a href="<?php $this->permalink() ?>" rel="bookmark"  ">阅读全文</a></p>
				</div>
			</article>
		<?php endwhile; ?>
		<div class="page-nav-euui">
		<?php $this->pageNav('上页','下页',10,'...');?>
	</div>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
