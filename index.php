<?php
function meanMode($arr) {
	if(count(array_unique($arr)) < count($arr)) {
		$res = 1;
	} else {
		$res = 0;
	}

	return $res;
}

$arr = [7,7,12,98,106];
echo meanMode($arr);
?>