<?php
$bodyPadding = "0;";
$bodyBg = "#F7F7F7";
?>
<?php include "../layout/head.php";?>
<?php include "../layout/body-start.php";?>

<?php include "../sections/headers/logo/boxed/none/header-left-with-title.php";?>

<repeater>

<layout label='Full-Width Image 700px'>
<?php include "../sections/feature/full-width-image-event.php";?>
</layout>

<layout label='1 Column Event'>
<?php include "../sections/event/white/boxed/standard-1.php";?>
</layout>

</repeater>
<?php include "../sections/footers/none/boxed/footer-12.php";?>
<?php include "../layout/body-end.php";?>