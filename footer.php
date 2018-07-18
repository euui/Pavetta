		</div>
    </div>
</div>
<footer id="footer">
	
	<div class="container">
		<div class="blockqq">
		&copy; <?php echo date('Y'); ?> <a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. 
    <?php _e('皖ICP备16012966号'); ?>
	</div>
	</div>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('fancybox/jquery.fancybox.css'); ?>">
    <script type="text/javascript" src="<?php $this->options->themeUrl('fancybox/jquery-3.3.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('fancybox/jquery.fancybox.min.js'); ?>"></script>
</footer>
<?php $this->footer(); ?>
</body>
</html>
<!-- goto  top start -->
<div style="display: none;" id="gotop">
<script type='text/javascript'>
    backTop=function (btnId){
        var btn=document.getElementById(btnId);
        var d=document.documentElement;
        var b=document.body;
        window.onscroll=set;
        btn.onclick=function (){
            btn.style.display="none";
            window.onscroll=null;
            this.timer=setInterval(function(){
                d.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
                b.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
                if((d.scrollTop+b.scrollTop)==0) clearInterval(btn.timer,window.onscroll=set);
            },10);
        };
        function set(){btn.style.display=(d.scrollTop+b.scrollTop>100)?'block':"none"}
    };
    backTop('gotop');
</script>
</div>
<!-- goto top END -->