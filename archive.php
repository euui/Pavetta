<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
		</h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post">
    			<header>
				<h2 class="post-title">
					<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</h2>
			</heaer>
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
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
        <div class="page-nav-euui">
        <?php $this->pageNav('上页', '下页'); ?>
        </div>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
