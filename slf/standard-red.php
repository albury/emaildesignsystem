<?php
$bodyPadding = "30px 0px";
$bodyBg = "#FAFAFA";
$txtColor = "#1D1D1D";
?>

<?php include "/Users/lauren/Sites/email/slf/layout/head.php";?>
<?php include "/Users/lauren/Sites/email/layout/body-start.php";?>

<?php include "/Users/lauren/Sites/email/slf/header/red/header.php";?>


<repeater>
<layout label='Basic Text Block'>
<?php include "/Users/lauren/Sites/email/slf/content/standard/1-column-basic-plain-text.php";?>
</layout>

<layout label='Image and Text'>
<?php include "/Users/lauren/Sites/email/slf/content/standard/image.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/standard/subhead.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/standard/heading.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/standard/multiline-text.php";?>
</layout>

<layout label='Image and Text w Red Background'>
<?php include "/Users/lauren/Sites/email/slf/content/red/image.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/red/subhead.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/red/heading.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/red/multiline-text.php";?>
</layout>

<layout label='Image'>
<?php include "/Users/lauren/Sites/email/slf/content/standard/image.php";?>
</layout>

<layout label='Text'>
<?php include "/Users/lauren/Sites/email/slf/content/standard/subhead.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/standard/heading.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/standard/multiline-text.php";?>
</layout>

<layout label='Text w Red Background'>
<?php include "/Users/lauren/Sites/email/slf/content/red/subhead.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/red/heading.php";?>
<?php include "/Users/lauren/Sites/email/slf/content/red/multiline-text.php";?>
</layout>

<layout label='More Information'>
<?php include "/Users/lauren/Sites/email/slf/content/red/2-columns-image-left.php";?>
</layout>

</repeater>

<?php include "/Users/lauren/Sites/email/slf/footer/standard/footerwlogo.php";?>
<?php include "/Users/lauren/Sites/email/layout/body-end.php";?>