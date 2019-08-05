<?php
$bodyPadding = "50px 0";
$bodyBg = "#FFFFFF";
?>
<?php include "/Users/lauren/Sites/email/mama/layout/head.php";?>
<?php include "/Users/lauren/Sites/email/layout/body-start.php";?>

<?php include "/Users/lauren/Sites/email/mama/header/store/header.php";?>

<repeater>
<layout label='Full Image Module'>
<?php include "/Users/lauren/Sites/email/mama/content/standard/image.php";?>
</layout>

<layout label='Header Module'>
<?php include "/Users/lauren/Sites/email/mama/content/standard/heading.php";?>
</layout>

<layout label='Text Module'>
<?php include "/Users/lauren/Sites/email/mama/content/standard/3-1-columns.php";?>
</layout>  

<layout label='Full Text Module'>
<?php include "/Users/lauren/Sites/email/mama/content/standard/multiline-text.php";?>
</layout>

<layout label='Text Module w Horizontal Rule'>
<?php include "/Users/lauren/Sites/email/mama/content/standard/multiline-text-divider.php";?>
</layout>

<layout label='Text/Image Module'>
<?php include "/Users/lauren/Sites/email/mama/content/standard/2-columns-image-left.php";?>
</layout>

<layout label='Text Breaker Module'>
<?php include "/Users/lauren/Sites/email/mama/content/standard/heading-divider.php";?>
</layout>

</repeater>

<?php include "/Users/lauren/Sites/email/mama/footer/standard/footer.php";?>

<?php include "/Users/lauren/Sites/email/layout/body-end.php";?>