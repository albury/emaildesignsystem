<?php
$bodyPadding = "0px;";
$bodyBg = "#FBF6ED";
$txtColor = "#231F20";
?>

<?php include "/Users/lauren/Sites/email/wam/layout/head.php";?>
<?php include "/Users/lauren/Sites/email/layout/body-start.php";?>
<?php include "/Users/lauren/Sites/email/wam/header/standard/header4.php";?>

<repeater>

<layout label='Full Text Module'>
<?php include "/Users/lauren/Sites/email/wam/content/standard/1-column-basic-plain-text.php";?>
</layout>

<layout label='Text/Image Module'>
<?php include "/Users/lauren/Sites/email/wam/content/standard/1-3-columns-image.php";?>
</layout>

</repeater>

<?php include "/Users/lauren/Sites/email/wam/footer/standard/footer4.php";?>
<?php include "/Users/lauren/Sites/email/layout/body-end.php";?>