<footer id="colophon" class="site-footer" role="contentinfo">

    <?php
    if (!is_404()) {
        get_sidebar('footer');
    } ?>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php
global $gassetsDir, $rootURL, $useGlobal;
if (file_exists($gassetsDir . "global-footer.php")) {
    include $gassetsDir . "global-footer.php";
} else {
    include "includes/global/global-footer.php";
}
$result   = false;
if (isset($_SERVER['HTTP_MILSUITEUID'])) {
    $root      = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    $serverUrl = filter_var(str_replace('https:', '', $root));
    $userId    = filter_var($_SERVER['HTTP_MILSUITEUID'], FILTER_SANITIZE_STRING);
    echo <<<SCRIPT
        <script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(['setUserId', '{$userId}']);
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "{$serverUrl}/analytics/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', 1]);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
        <noscript><p><img src="{$serverUrl}/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
SCRIPT;
}
?>
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<? bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
</body>
</html>