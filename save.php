<?php
file_put_contents('data/output.svg', $_REQUEST['svg']);
`'C:\\Program Files (x86)\\Inkscape\\inkscape.exe' -f data\\output.svg -A data\\output.pdf`;

echo "data/output.pdf";
?>