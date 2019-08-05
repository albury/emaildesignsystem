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

<!-- Really Important change .row to width 100% in @media  -->

<repeater>

<!-- 2 Columns Feature Content Right  -->
<layout label='2 Columns Feature Right White Background'>
<?php include "../sections/feature/white/full-width/feature-with-content-right.php";?>
</layout>

<layout label='2 Columns Feature Right Gray Background'>
<?php include "../sections/feature/gray/full-width/feature-with-content-right.php";?>
</layout>

<!-- 2 Columns Feature Content Left  -->
<layout label='2 Columns Feature Left White Background'>
<?php include "../sections/feature/white/full-width/feature-with-content-left.php";?>
</layout>

<layout label='2 Columns Feature Left Gray Background'>
<?php include "../sections/feature/gray/full-width/feature-with-content-left.php";?>
</layout>

<!-- 1 Column Text w Button  -->
<layout label='1 Column Text w Button White Background'>
<?php include "../sections/typography/white/full-width/1-column-basic-with-button.php";?>
</layout>

<layout label='1 Column Text w Button Gray Background'>
<?php include "../sections/typography/gray/full-width/1-column-basic-with-button.php";?>
</layout>

<!-- Image Text + Button  -->
<layout label='Image Text + Button White Background'>
<?php include "../sections/typography/white/full-width/1-column-image-with-text-button.php";?>
</layout>

<layout label='Image Text + Button Gray Background'>
<?php include "../sections/typography/gray/full-width/1-column-image-with-text-button.php";?>
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

<!-- Full-Width Image  -->
<layout label='Full-Width Image White Background'>
<?php include "../sections/feature/white/full-width/full-width-image.php";?>
</layout>

<!-- 2 Columns with Images  -->
<layout label='2 Columns with Images White Background'>
<?php include "../sections/typography/white/full-width/2-columns-text-images.php";?>
</layout>

<layout label='2 Columns with Images Gray Background'>
<?php include "../sections/typography/gray/full-width/2-columns-text-images.php";?>
</layout>

<!-- 2 Columns  -->
<layout label='2 Columns White Background'>
<?php include "../sections/typography/white/full-width/2-columns-text.php";?>
</layout>

<layout label='2 Columns Gray Background'>
<?php include "../sections/typography/gray/full-width/2-columns-text.php";?>
</layout>

<!-- 2 Column Image Left  -->
<layout label='2 Column Image Left White Background'>
<?php include "../sections/typography/white/full-width/2-columns-image-left.php";?>
</layout>

<layout label='2 Column Image Left Gray Background'>
<?php include "../sections/typography/gray/full-width/2-columns-image-left.php";?>
</layout>

<!-- 2 Column Image Right -->
<layout label='2 Column Image Right White Background'>
<?php include "../sections/typography/white/full-width/2-columns-image-right.php";?>
</layout>

<layout label='2 Column Image Right Gray Background'>
<?php include "../sections/typography/gray/full-width/2-columns-image-right.php";?>
</layout>

<!-- 1-3 Columns with Images -->
<layout label='1-3 Columns with Images White Background'>
<?php include "../sections/typography/white/full-width/1-3-columns-image.php";?>
</layout>

<layout label='1-3 Columns with Images Gray Background'>
<?php include "../sections/typography/gray/full-width/1-3-columns-image.php";?>
</layout>

<!-- 1-3 Columns  -->
<layout label='1-3 Columns White Background'>
<?php include "../sections/typography/white/full-width/1-3-columns.php";?>
</layout>

<layout label='1-3 Columns Gray Background'>
<?php include "../sections/typography/gray/full-width/1-3-columns.php";?>
</layout>

<!-- 3-1 Columns with Images  -->
<layout label='3-1 Columns with Image White Background'>
<?php include "../sections/typography/white/full-width/3-1-columns-image.php";?>
</layout>

<layout label='3-1 Columns with Image Gray Background'>
<?php include "../sections/typography/gray/full-width/3-1-columns-image.php";?>
</layout>

<!-- 3-1 Columns  -->
<layout label='3-1 Columns White Background'>
<?php include "../sections/typography/white/full-width/3-1-columns.php";?>
</layout>

<layout label='3-1 Columns Gray Background'>
<?php include "../sections/typography/gray/full-width/3-1-columns.php";?>
</layout>

<!-- 3 Columns with Images  -->
<layout label='3 Columns with Images White Background'>
<?php include "../sections/typography/white/full-width/3-columns-text-images.php";?>
</layout>

<layout label='3 Columns with Images Gray Background'>
<?php include "../sections/typography/gray/full-width/3-columns-text-images.php";?>
</layout>

<!-- 3 Columns  -->
<layout label='3 Columns White Background'>
<?php include "../sections/typography/white/full-width/3-columns-text.php";?>
</layout>

<layout label='3 Columns Gray Background'>
<?php include "../sections/typography/gray/full-width/3-columns-text.php";?>
</layout>

<!-- 1 Columns Feature w Grey Background Image  -->
<layout label='Feature w Grey Background Image'>
<?php include "/Users/lauren/Sites/email/sections/feature/dark-gray/full-width/feature-bgimage-text.php";?>
</layout>

<!-- Rule Divider -->
<layout label='Rule Divider'>
<?php include "../components/dividers/row-divider.php";?>
</layout>

<!-- Rule Divider Full-Width -->
<layout label='Rule Divider Full-Width'>
<?php include "../components/dividers/universal-divider.php";?>
</layout>

</repeater>


<?php include "/Users/lauren/Sites/email/sections/feature/gray/full-width/full-width-image-text-button-centered.php";?>

<?php include "/Users/lauren/Sites/email/sections/typography/dark-gray/full-width/2-column-contact.php";?>

<?php include "/Users/lauren/Sites/email/sections/footers/none/boxed/footer-10.php";?>

<?php include "/Users/lauren/Sites/email/sections/typography/white/full-width/1-column-basic-plain-text.php";?>

<?php include "/Users/lauren/Sites/email/layout/body-end.php";?>