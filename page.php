<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('diverse/head.php'); ?>
<?php $this->need('library/header_a.php'); ?>

<body>
    <div class="hk-contaowow">
        <div class="hk-konzi-a">
            <div class="hk-biaoyiti-zt">
                <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </div>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
        </div>
    </div>
</body>