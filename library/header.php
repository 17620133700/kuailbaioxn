<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if ($this->options->hk_imggifpng_index) : ?>
    <div class="store-header" style="display: flex; background-image: url(&quot;<?php $this->options->hk_imggifpng_index() ?>&quot;);">
    <?php endif; ?>

    <?php if ($this->options->hk_name_zbt) : ?>
        <div class="baoti">
            <h1><?php $this->options->hk_name_zbt() ?></h1>
        </div>
    <?php endif; ?>
    </div>

    <div class="hk-contaowow">
        <div class="yitiaoxx">
            <p>&nbsp收集大量精品资源，不收垃圾，不定时更新</p>
        </div>
    </div>