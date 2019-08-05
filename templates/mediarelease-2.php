<?php
$bodyPadding = "0;";
$bodyBg = "#FFFFFF";
?>
<?php include "../layout/head.php";?>
<?php include "../layout/body-start.php";?>

<?php include "../sections/headers/logo/full-width/navy/header-left-with-title.php";?>

<repeater>

<layout label='Image'>
<?php include "../sections/feature/white/full-width/image.php";?>
</layout>

<layout label='1 Column Text'>
<?php include "../sections/media/white/full-width/1-column-plain-text-contact.php";?>
</layout>

</repeater>

<?php include "../sections/footers/navy/full-width/footer-2.1.php";?>

<?php include "../layout/body-end.php";?>