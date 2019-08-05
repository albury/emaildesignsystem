<?php
$bodyPadding = "0;";
$bodyBg = "#FFFFFF";
$grayColor = "#F7F7F7";
?>
<?php include "../layout/head.php";?>
<?php include "../layout/body-start.php";?>

<?php include "../sections/headers/logo/boxed/white/header-left-with-basic-title.php";?>

<repeater>

<layout label='Image'>
<?php include "../sections/feature/gray/full-width/feature-image.php";?>
</layout>

<layout label='1 Column Text'>
<?php include "../sections/media/white/boxed/1-column-plain-text.php";?>
</layout>

<layout label='Media Contact and Opportunity'>
<?php include "../sections/media/white/boxed/2-column-contact.php";?>
</layout>

</repeater>

<?php include "../sections/footers/white/boxed/footer-2.1.php";?>

<?php include "../layout/body-end.php";?>