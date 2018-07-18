<?php

function themeConfig($form) {

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}


/*随机文章，使用<?php theme_random_posts();?>调用*/
function theme_random_posts(){
$defaults = array(
'number' => 10,
'before' => '<ul class="list">',
'after' => '</ul>',
'xformat' => '<li><a href="{permalink}">{title}</a></li>'
);
$db = Typecho_Db::get();
 
$sql = $db->select()->from('table.contents')
->where('status = ?','publish')
->where('type = ?', 'post')
->limit($defaults['number'])
->order('RAND()');
 
$result = $db->fetchAll($sql);
echo $defaults['before'];
foreach($result as $val){
$val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val);
echo str_replace(array('{permalink}', '{title}'),array($val['permalink'], $val['title']), $defaults['xformat']);
}
echo $defaults['after'];
}

function themeInit($archive)
{
 Helper::options()->commentsMaxNestingLevels = 999;
 Helper::options()->commentsAntiSpam = false;
 Helper::options()->commentsMarkdown = true;
Helper::options()->commentsHTMLTagAllowed = '<a href=""><img src=""><img src="" class=""><code>';
    if ($archive->is('author')) {
       $archive->parameter->pageSize = 50; // 自定义条数
}
    if ($archive->is('single')&&!$archive->is('page', 'links'))
    {
        $archive->content = image_class_replace($archive->content);
    }
}

function image_class_replace($content)
{
$content = preg_replace('#<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>#',
        '<a$1 href="$2$3"$5 target="_blank" rel="nofollow">', $content);

$content = preg_replace('#\s+<\/code><\/pre>#',
        '</code></pre>', $content);  // 代码高亮行号显示兼容typecho1.0版本

preg_match_all('/\<img.*?src\=\"(.*?)\"[^>]*>/i',$content,$mat);

$cnt = count( $mat[1] );

$content = preg_replace('#<img(.*?)src="([^"]*/)?(([^"/]*)\.[^"]*)"([^>]*?)>#',
        '<a data-fancybox="gallery" href="$2$3" data-no-instant><img$1 src="$2$3" $5>
</a>', $content);

$content = preg_replace('#<p><a data-fancybox="gallery"(.*?)><img(.*?)>
</a></p>#',
        '<a data-fancybox="gallery" $1><img$2>
</a>', $content);

$content = preg_replace('#<a data-fancybox="gallery"(.*?)><img(.*?)alt=\"(.*?)\-(25|33|50|75|100)\"(.*?)>
</a>(<br\s*/?>)?#',
        '<a data-fancybox="gallery" data-caption="$3" $1><img$2class="figure nocaption fig-$4" alt="$3" title="$3"$5>
</a>', $content);

$content = preg_replace('#<p><a(.*?) href="http(s)?\:\/\/www.bilibili.com\/video\/av(.*?)(\/)?(index\_(.*?)\.html)?"(.*?)><\/p>#',
        '<div id="chopstack-tv"><iframe src="//www.bilibili.com/html/player.html?aid=$3&page=$6" scrolling="no" border="0" frameborder="no" framespacing="0"></iframe></div>', $content);

$options = Typecho_Widget::widget('Widget_Options');
$fujian = $options->Enhance;
if(!empty($options->src_add) && !empty($options->cdn_add) && strtolower(md5($fujian))=='f881766500f28ea95a10bb2673bb32db'){
$content = str_ireplace($options->src_add,$options->cdn_add,$content);
}

    return $content;
}

?>