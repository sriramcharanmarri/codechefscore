<?php

include("simple_html_dom.php");

$html = file_get_html('https://www.codechef.com/users/jaswanth_111');

echo $html->find('.rating-number',0)->innertext;
echo $html->find('.rating-star',0)->innertext;
?>