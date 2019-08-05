<?php
$bodyPadding = "0;";
$bodyBg = "#FFFFFF";
$grayColor = "#F9F9F9";
$grayTextColor = "#585858";
$grayButton = '/Users/lauren/Sites/email/components/buttons/button-filled-invest.php';
$grayButtonCenter = '/Users/lauren/Sites/email/components/buttons/button-filled-center-invest.php';
$grayButtonText = '/Users/lauren/Sites/email/components/buttons/button-text.php';
$whiteButton = '/Users/lauren/Sites/email/components/buttons/button-filled-invest.php';
$whiteButtonText = '/Users/lauren/Sites/email/components/buttons/button-text.php';
?>
<?php include "/Users/lauren/Sites/email/layout/head.php";?>
<?php include "/Users/lauren/Sites/email/layout/body-start.php";?>

<?php include "/Users/lauren/Sites/email/sections/feature/white/full-width/feature-image-bgimage.php";?>

<repeater>

<!-- Image Text + Button  -->
<layout label='Image Text + Button White Background'>
<?php include "../sections/typography/white/full-width/1-column-image-with-text-button.php";?>
</layout>

<layout label='Image Text + Button Gray Background'>
<?php include "../sections/typography/gray/full-width/1-column-image-with-text-button.php";?>
</layout>

<!-- 1 Column Text w Button  -->
<layout label='1 Column Text w Button White Background'>
<?php include "../sections/typography/white/full-width/1-column-basic-with-button.php";?>
</layout>

<layout label='1 Column Text w Button Gray Background'>
<?php include "../sections/typography/gray/full-width/1-column-basic-with-button.php";?>
</layout>

<!-- 1 Column Text  -->
<layout label='1 Column Text White Background'>
<?php include "../sections/typography/white/full-width/1-column-basic.php";?>
</layout>

<layout label='1 Column Text Gray Background'>
<?php include "../sections/typography/gray/full-width/1-column-basic.php";?>
</layout>

<!-- 1 Column Heading  -->
<layout label='1 Column Heading White Background'>
<?php include "../sections/typography/white/full-width/1-column-heading.php";?>
</layout>

<layout label='1 Column Heading Gray Background'>
<?php include "../sections/typography/gray/full-width/1-column-heading.php";?>
</layout>

<!-- Image  -->
<layout label='Image Only White Background'>
<?php include "../sections/feature/white/full-width/image.php";?>
</layout>

<layout label='Image Only Gray Background'>
<?php include "../sections/feature/gray/full-width/image.php";?>
</layout>

</repeater>

<?php include "/Users/lauren/Sites/email/sections/typography/dark-gray/full-width/2-column-contact.php";?>

<?php include "/Users/lauren/Sites/email/sections/footers/none/boxed/footer-10.php";?>

<?php include "/Users/lauren/Sites/email/sections/typography/white/full-width/1-column-basic-plain-text.php";?>

<?php include "/Users/lauren/Sites/email/layout/body-end.php";?>