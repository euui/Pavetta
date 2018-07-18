<?php
    /**  
    * aboutpavetta    
    * @package custom   
    */ 
 $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			</br>
      </br>
			
			 <div class="post-content-pages_about">
			 	<div class="al_year_about">
			 		<?php _e('关于本站'); ?>
			 	</div>
				<ul class="al_mon_list_about">
				
				<li><?php _e('非盈利性网站，不信给我打钱看我收不收……'); ?></li>
				<li><?php _e('『Pavetta』，大叶满天星，译作『帕维塔』'); ?></li>
				<li><?php _e('那时年少想骂街，写点东西防痴呆……'); ?></li>
				<li><?php _e('如觉得本站内容不错，感谢分享！'); ?></li>
				
			</ul>
			
			 	<div class="al_year_about">
			 		<?php _e('关于作者'); ?>
			 	</div>
				<ul class="al_mon_list_about">
				
				<li><?php _e('小树叶过河，全靠这股浪劲！'); ?></li>
				<li><?php _e('我喜欢你，这句纯粹是真的！'); ?></li>
				<li><?php _e('有过梦想，孤独且珍惜！'); ?></li>
				<li><?php _e('我跟你谈理想，你却要谈金钱……'); ?></li>
				<li><?php _e('上下五千年，弹指一挥间！'); ?></li>
			</ul>
			 	<div class="al_year_about">
			 		<?php _e('本站内容'); ?>
			 	</div>
				<ul class="al_mon_list_about">
				
				<li><?php _e('内容均为原创，如有雷同，缘分到了！'); ?></li>
				<li><?php _e('不讨论技术、政治、经济及宗教……'); ?></li>
				<li><?php _e('谢绝转载！哎呦，你也受了伤？'); ?></li>
				<li><?php _e('你要发表文章？那谁给稿费？我是没有钱！'); ?></li>
			</ul>
			 	<div class="al_year_about">
			 		<?php _e('联系方式'); ?>
			 	</div>
				<ul class="al_mon_list_about">
				
				<li><?php _e('作者邮箱:euui@pavetta.com '); ?></li>
				<li><?php _e('作者微博:weibo.com/euui '); ?></li>
				<li><?php _e('官方微博:weibo.com/pavetta '); ?></li>
				<li><?php _e('官方微信:pavetta '); ?></li>
				<div id="authorgravatarabout">
            <img  src="<?php $this->options->themeUrl(); ?>img/weixin.png">
          </div>
			</ul>
			
			
				<?php $this->content(); ?>
			</div>
		
			
		</article>
	
	</div>
	
    
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>