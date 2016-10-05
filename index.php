<?php

include_once('./functions/calc.php');

?>

<h1>計算します！</h1>

<form>
<input name="a" value="<?php echo isset($_GET['a']) ? $_GET['a'] : ''?>">
<input name="b" value="<?php echo isset($_GET['b']) ? $_GET['b'] : ''?>">
<button>計算する！</button>
</form>

<h2><?php echo calc(isset($_GET['a']) ? $_GET['a'] : '', isset($_GET['b']) ? $_GET['b'] : '')?></h2>