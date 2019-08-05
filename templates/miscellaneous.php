<?php
$bodyPadding = "0;";
$bodyBg = "#F7F7F7";
?>
<?php include "../layout/head.php";?>
<?php include "../layout/body-start.php";?>


<?php include "../sections/hero-split/navy/boxed/hero-split-content-left-golden.php";?>
<?php include "../sections/hero-split/white/boxed/hero-split-content-left-golden.php";?>
<?php include "../sections/hero-split/navy/boxed/hero-split-content-right-golden.php";?>
<?php include "../sections/hero-split/white/boxed/hero-split-content-right-golden.php";?>

<?php include "../sections/hero-split/hero-split-content-left-half.php";?>
<?php include "../sections/hero-split/hero-split-content-right-half.php";?>

<?php include "../sections/hero-split/hero-split-content-top-left.php";?>
<?php include "../sections/hero-split/hero-split-content-top-right.php";?>

<?php include "../sections/headers/logo/full-width/white/header-left-with-title.php";?>
<?php include "../sections/feature/feature-bgimage.php";?>

<?php include "../sections/miscellaneous/section-9.php";?>
<repeater>

<layout label='Image'>
<?php include "../sections/feature/white/full-width/full-width-image.php";?>
</layout>

<layout label='Image'>
<?php include "../sections/feature/white/full-width/image.php";?>
</layout>

<layout label='1 Column Text'>
<?php include "../sections/media/white/full-width/1-column-plain-text-contact.php";?>
</layout>

</repeater>



<?php include "../layout/body-end.php";?>