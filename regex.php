<?php
	echo preg_replace('#xa{,2}x#', '!', 'xax xaax xaaax'); //ожидали '! ! xaaax'
?>
