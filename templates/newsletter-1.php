<?php
$bodyPadding = "30px 0;";
$bodyBg = "#F7F7F7";
$whiteButtonText = "/Users/lauren/Sites/email/components/buttons/button-filled.php";
?>
<?php include "../layout/head.php";?>
<?php include "../layout/body-start.php";?>

<?php include "../sections/headers/wordmark/boxed/none/header-left-with-webversion.php";?>
<?php include "../sections/hero/Our People/primary-navy-bg.php";?>

<repeater>

<layout label='Image'>
<?php include "../sections/feature/white/boxed/image.php";?>
</layout>

<!-- Image Text + Button  -->
<layout label='Image Text + Button'>
<?php include "../sections/typography/white/boxed/1-column-image-with-text-button.php";?>
</layout>

<layout label='1 Column Text w Button'>
<?php include "../sections/typography/white/boxed/1-column-basic-with-button.php";?>
</layout>

<layout label='1 Column Text'>
<?php include "../sections/typography/white/boxed/1-column-basic.php";?>
</layout>

<layout label='1 Column Heading'>
<?php include "/Users/lauren/Sites/email/sections/typography/white/boxed/1-column-heading.php";?>
</layout>

<layout label='2 Columns'>
<?php include "../sections/typography/white/boxed/2-columns-text-images.php";?>
</layout>

<layout label='3 Columns'>
<?php include "../sections/typography/white/boxed/3-columns-text-images.php";?>
</layout>

<layout label='Full-Width Image'>
<?php include "../sections/feature/white/boxed/full-width-image.php";?>
</layout>

<layout label='2 Column Image Left'>
<?php include "../sections/typography/white/boxed/2-columns-image-left.php";?>
</layout>

<layout label='2 Column Image Right'>
<?php include "../sections/typography/white/boxed/2-columns-image-right.php";?>
</layout>

<layout label='1-3 Columns'>
<?php include "../sections/typography/white/boxed/1-3-columns-image.php";?>
</layout>

<layout label='3-1 Columns'>
<?php include "../sections/typography/white/boxed/3-1-columns-image.php";?>
</layout>

<layout label='3-1 Feature'>
<?php include "../sections/feature/white/boxed/feature-with-content-left.php";?>
</layout>

<layout label='1-3 Feature'>
<?php include "../sections/feature/white/boxed/feature-with-content-right.php";?>
</layout>

<layout label='2 Column Event Listing'>
<?php include "/Users/lauren/Sites/email/sections/typography/white/boxed/2-columns-events.php";?>
</layout>

<layout label='3 Column Event Listing'>
<?php include "/Users/lauren/Sites/email/sections/typography/white/boxed/3-columns-events.php";?>
</layout>

<layout label='Rule Divider'>
<?php include "../components/dividers/row-divider.php";?>
</layout>

</repeater>
<?php include "../sections/footers/none/boxed_/footer-2.1.php";?>

<?php include "../layout/body-end.php";?>