<!doctype html>
<html>
<head>
    <meta charset=utf-8>
</head>
<body>

<?php
class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->$baz[1]}\n";
?>

</body>
</html>