<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="container">

        <header>
		<nav id="nav-menu">
        <ul class="topNav-items">
            <li class="menu-item<?php if($this->is('index')): ?> current-menu-item<?php endif; ?>"> <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li class="menu-item<?php if($this->is('page', $pages->slug)): ?> current-menu-item<?php endif; ?>"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </nav>
		
            <h2 class="post-title"><?php $this->title() ?></h2>
            <div class="post-time">
                <time><?php $this->date('F j, Y'); ?></time>
            </div>
        </header>
        <div class="grap" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
   <?php $this->need('comments.php'); ?>
</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
