<?php
/**
 * 自制简单主题，你的star就是我的动力
 *
 * @package FanStarR
 * @author 染念, NKXingXh
 * @version 3.0.4
 * @link https://github.com/nkxingxh/FanStarR
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('layout/header.php');
?>
<div class="container">
    <div class="row">
        <?php $this->need('layout/left.php'); ?>
        <div class="col-xl-6 col-md-6 col-12" id="pjax-container">
            <?php $this->need('layout/head.php'); ?>
            <?php $this->need('component/index.banner.php') ?>
            <div class="artices">
                <?php $this->need('component/index.article.php'); ?>
            </div>
            <div class="page-pagination">
                <?php $this->pageLink('加载更多','next'); ?>
            </div>
        </div>
        <?php $this->need('layout/right.php'); ?>
    </div>
</div>
<?php $this->need('component/index.footer.php'); ?>
</body>
</html>
