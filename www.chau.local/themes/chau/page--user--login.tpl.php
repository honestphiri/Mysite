<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Feb 05 2019 14:27:04 GMT+0000 (UTC)  -->
<html data-wf-page="5c59923f4983add822776178" data-wf-site="5c59923f4983ad62d5776174">
    <?php include $directory . '/include/header.php'; ?>
    <body>
        <div class="header-wrapper">
            <div data-collapse="none" data-animation="default" data-duration="400" class="top-navbar w-nav">
                <?php include $directory . '/include/top_nav.php'; ?>
            </div>
            <div data-collapse="medium" data-animation="over-right" data-duration="400" data-doc-height="1" class="navbar w-nav">
                <div class="w-container"><a href="/" class="logo-block w-nav-brand w--current"><img src="<?php echo $directory; ?>/images/logo.png" srcset="images/Logo-p-500x117.jpeg 500w, images/Logo.jpg 800w" sizes="(max-width: 479px) 93vw, (max-width: 767px) 171.11666870117188px, (max-width: 991px) 192.5px, 235.28334045410156px" alt="" class="image-logo"></a>
                    <?php include $directory . '/include/nav.php'; ?>
                    <div class="menu-button w-nav-button">
                        <div class="w-icon-nav-menu"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header events">
            <div class="page-header-overlay">
                <div class="container w-container">
                    <h1 data-ix="fade-in-on-load" class="page-header-title">CHALIMBANA UNIVERSITY</h1>
                    <h2 data-ix="fade-in-on-load-2" class="page-subtitle"></h2>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container w-container">
                <div class="w-dyn-list">
                    <div class="empty-state w-dyn-empty">
                        <p>
                            <?php if ($breadcrumb || $title || $messages || $tabs || $action_links): ?>
                            <div id="content-header">
                                <?php if ($title): ?>
                                    <h2 class="title" style="text-align: center;"><?php print $title; ?></h2>
                                    <hr/>
                                    <br/>
                                <?php endif; ?>
                                <?php if ($tabs): ?>
                                    <div class="tabs"><?php print render($tabs); ?></div>
                                <?php endif; ?>
                                <?php if ($action_links): ?>
                                    <ul class="action-links"><?php print render($action_links); ?></ul>
                                <?php endif; ?>
                            </div> <!-- /#content-header -->
                        <?php endif; ?>
                        <?php print render($title_prefix); ?>
                        <?php print render($page['content']) ?>
                        </p>
                    </div>
                </div>
                <div class="bottom-info-text">Want to see the full list of our Courses? <a href="#">View Full Courses Overview →</a></div>
            </div>
        </div>

        <?php include $directory . '/include/footer.php'; ?>
        <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="/<?php echo $directory; ?>/js/webflow.js" type="text/javascript"></script>
        <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    </body>
</html>