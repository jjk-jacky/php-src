--TEST--
Bug #60082 (100% CPU / when using references with ArrayObject(&$ref))
--SKIPIF--
<?php
if (getenv("SKIP_SLOW_TESTS")) die("skip slow test");
?>
--FILE--
<?php
$test = array();
$test = new ArrayObject(&$test);
$test['a'] = $test['b'];
?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
Deprecated: Call-time pass-by-reference has been deprecated in %sbug60082.php on line %d

Fatal error: main(): Array was modified outside object and made a recursive object in %sbug60082.php on line %d