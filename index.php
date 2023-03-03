<?php

include("simple_html_dom.php");

$html = file_get_html('https://www.codechef.com/users/jaswanth_111');
echo "jaswanth ne codechef score \n";
echo $html->find('.rating-number',0)->innertext;
echo "  jaswanth ne codechef stars  ";
echo $html->find('.rating-star',0)->innertext;
?>
