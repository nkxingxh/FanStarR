<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<script src="https://cdn.staticfile.org/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.staticfile.org/highlight.js/11.5.1/highlight.min.js"></script>
<script src="https://cdn.staticfile.org/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.staticfile.org/nprogress/0.2.0/nprogress.min.js"></script>
<script src="https://cdn.staticfile.org/toastify-js/1.11.2/toastify.min.js"></script>
<script>MathJax={tex:{inlineMath:[["$","$"],["\\(","\\)"]]},svg:{fontCache:"global"}};</script>
<script type="text/javascript" src="https://unpkg.com/mathjax@3.2.2/es5/tex-mml-chtml.js"></script>
<?php $this->options->jsEcho(); ?>
<script>
    const config = {
    'owo':'<?php utils::indexTheme('assets/owo/OwO.json'); ?>',
        'dark': '<?php echo $this->options->darkBtn;?>'
    }
</script>
<script src="<?php utils::indexTheme('assets/js/OwO.js'); ?>"></script>
<script src="<?php utils::indexTheme('assets/js/lanstarApp.js'); ?>"></script>
<script src="<?php utils::indexTheme('assets/js/gazeimg.js'); ?>"></script>
<script src="<?php utils::indexTheme('assets/js/icon.js'); ?>"></script>
<script>lanstar.init();</script>
<?php if ($this->options->sidebarBlock && in_array('ShowYourCouple', $this->options->sidebarBlock)): ?>
    <script>lanstar.addCoupleTime();</script>
<?php endif; ?>
<?php if ($this->options->pjax && $this->options->pjax != 0) : ?>
    <script src="https://cdn.staticfile.org/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script>
        $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
            container: '#pjax-container',
            fragment: '#pjax-container',
            timeout: 3000
        }).on('pjax:send',
            function () {
                NProgress.start();
            }).on('pjax:complete', function () {
                lanstar.addHighLight();
                $('img[data-gisrc]:not([data-gi-init])').giLazy();
                NProgress.done();
                lanstar.init();
                lanstar.addEmoji();
                lanstar.addComment();
                lanstar.addPageLike();
                lanstar.addArchiveToggle();
                <?php $this->options->pjax_complete(); ?>
        });
    </script>
<?php endif; ?>
<?php if ($this->options->jsPushBaidu): ?>
    <script
        src="<?php utils::indexTheme('assets/js/push.js'); ?>"></script>
<?php endif; ?>
<?php if ($this->options->music): ?>
    <meting-js fixed="true" lrc-type="1" <?php $this->options->music(); ?>></meting-js>
    <script src="https://cdn.staticfile.org/aplayer/1.9.1/APlayer.min.js"></script>
    <script src="<?php utils::indexTheme('assets/js/Meting.min.js') ?>"></script>
<?php endif; ?>
<?php if ($this->options->extraIcon): ?>
    <script src="<?php echo $this->options->extraIcon(); ?>"></script>
<?php endif; ?>
<?php if ($this->options->compressHtml): $html_source = ob_get_contents();
    ob_clean();
    print utils::compressHtml($html_source);
    ob_end_flush(); endif; ?>
<div class="watch_catalog" onclick="lanstar.addCatalog()">
    <svg class="icon" aria-hidden="true">
        <use xlink:href="#icon-mulu"></use>
    </svg>
</div>
<div class="back-to-top" onclick="lanstar.addBackTop()">
    <svg class="icon" aria-hidden="true">
        <use xlink:href="#icon-fanhuidingbu-"></use>
    </svg>
</div>
