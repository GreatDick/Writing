<?php
/**
 * 简约,让你倾心写作
 * @package writing 
 * @author Klose
 * @version 1.0
 * @link https://varfate.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div id="container">
<nav id="nav-menu">
        <ul class="topNav-items">
            <li class="menu-item<?php if($this->is('index')): ?> current-menu-item<?php endif; ?>"> <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li class="menu-item<?php if($this->is('page', $pages->slug)): ?> current-menu-item<?php endif; ?>"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </nav>
<main class="main-content">
    <section class="blockGroup">
        <?php while($this->next()): ?>
            <article>
                <h2 class="block-title">
                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>
				<div class="posttime">
                    <time><?php $this->date('Y/m/d'); ?></time>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
   <!-- <?php $this->pageNav('<', '>'); ?> -->
   <nav class="blog-nav">
<?php $this->pageLink('<span>上一页</span>'); ?>
<?php $this->pageLink('<span>下一页</span>','next'); ?>

</nav>
	
</main>
</div>
<?php $this->need('footer.php'); ?>