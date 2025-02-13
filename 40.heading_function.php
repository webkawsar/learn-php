
<?php

function heading($tag='h1', $text, $align) {
    echo "<$tag style=\"text-align:$align\">$text</$tag>";
}

heading('h2', 'Engineer', 'center');
heading('h1', 'Kawsar', 'right');