<?php
$fd = fopen(__FILE__,"r");
$linha = 0;
while(!feof($fd)) {
	$buffer = fgets($fd);
	if($linha > 0) {
		echo $buffer;
	}
	$linha++;
}
fclose($fd);