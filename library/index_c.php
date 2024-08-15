<body>
    <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <div class="hk-contaowow">
        <div class="hk-wowmofreclass">
            <div class="hk-container hk-illustrate">
                <div class="hk-illustrate-list">
                    <?php while ($this->next()) : ?>
                        <div class="hk-illustrate-card">
                            <a href="<?php $this->permalink() ?>" class="hk-router-link" target="_blank">
                                <div class="hk-card hk-card-md">
                                    <div class="hk-card__link">
                                        <div class="hk-card__cover"><img src="<?php echo getPostImg($this); ?>" alt="<?php $this->title(); ?>" class="hk-card__img"></div>
                                    </div>
                                    <div class="hk-card__info">
                                        <div class="hk-card__link">
                                            <p class="hk-card__name"><?php $this->title(20, '...'); ?></p>
                                        </div>
                                        <p class="hk-card__desc"><?php echo $this->excerpt(200, '...'); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</body>