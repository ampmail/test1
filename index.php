<!doctype html>
<html>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="main.css">

</head>
<body>

<ul class="nav">
    <li class="main-menu">
        <a href>Main Menu</a>
        <a href>Products</a>
        <a href>Store</a>
        <a href>Forum</a>
    </li>
    <li class="settings">
        <a href>Settings</a>
        <a href>Account</a>
        <a href>Notifications</a>
        <a href>Dislpay</a>
    </li>
    <li class="link">
        <a href>Link</a>
        <a href>Embed</a>
        <a href>Short link</a>
        <a href>Full link</a>
    </li>
    <li class="search">
        <a href>Search</a>
        <a href>Item 2</a>
        <a href>Item 3</a>
        <a href>Item 4</a>
    </li>
</ul>

<?php
class foo {
    var $bar = 'I am bar.';

    function getSome (){
        return $this->bar;
    }
}

$foo = new foo();
$bar = $foo->getSome();
$baz = array('foo', 'bar', 'baz', 'quux');
//echo "{$foo->$bar}<br/>";
//echo "{$foo->$baz[1]}\n";
echo "{$bar}";
?>
