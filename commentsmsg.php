<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<span class="widget-title1"><?php $this->commentsNum(_t('暂无留言'), _t('仅有 1 条留言'), _t('已有 %d 条留言')); ?></span>
    <?php $comments->listComments(); ?>
    <div  class ="page-nav-euui">
    <?php $comments->pageNav('&laquo; ', ' &raquo;'); ?>
  </div>
    <?php endif; ?>
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    	<span id="response" class="widget-title1"><?php _e('添加新留言'); ?></span>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
			<div class="col1">
			<p>
                <textarea required oninvalid="setCustomValidity('留言不能为空！')" oninput="setCustomValidity('')"  rows="8" cols="50" name="text" class="textarea" placeholder="在这里输入你的留言..."><?php $this->remember('text'); ?></textarea>
            </p>
			</div>
			<div class="col2">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
                <label for="author" class="required"></label>
    			<input required oninvalid="setCustomValidity('请填写称呼！')" oninput="setCustomValidity('')" type="text" name="author" id="author" class="text" placeholder="<?php _e('称呼'); ?>" value="<?php $this->remember('author'); ?>" />
    		</p>
    		<p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>></label>
    			<input required oninvalid="setCustomValidity('请填写邮件地址！')" oninput="setCustomValidity('')" type="email" name="mail" id="mail" class="text" placeholder="<?php _e('邮箱'); ?>" value="<?php $this->remember('mail'); ?>" />
    		</p>
    		<p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>></label>
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('网站 http://example.com'); ?>" value="<?php $this->remember('url'); ?>" />
    		</p>
            <?php endif; ?>
    		<p>
                <button type="submit" class="submit"><?php _e('提交留言'); ?></button>
            </p>
			</div>
			<div class="clear"></div>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('留言已关闭'); ?></h3>
    <?php endif; ?>
</div>