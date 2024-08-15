<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="hk-contaowow">
    <div class="container">
        <ul data-v-223091dc="" class="nav-list pl-0 d-flex align-center">
            <li data-v-223091dc="" class="nav-item nav-cate">
                <a data-v-223091dc="" href="<?php $this->options->siteUrl(); ?>" aria-current="page" class="router-link-exact-active router-link-active">首页</a>
            </li>


            <li data-v-223091dc="" class="nav-item nav-cate">
                <?php $this->widget('Widget_Metas_Category_List')->parse('<a data-v-223091dc="" href="{permalink}" class="">{name}</a>'); ?>
            </li>


            <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
            <?php while ($pages->next()) : ?>
                <?php if ($this->is('page', $pages->slug)) : ?>
                <?php endif; ?>
                <li data-v-223091dc="" class="nav-item nav-cate"><a data-v-223091dc="" href="<?php $pages->permalink(); ?>" class=""><?php $pages->title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>