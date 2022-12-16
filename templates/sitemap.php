<?php

require_once("../_com/functions.php");
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
echo '
    <url>
        <loc>' . $domain . '</loc>
    </url>';
echo '</urlset>';