<?php
$bodyPadding = "30px 0;";
$bodyBg = "#F7F7F7";
?>
<?php include "../layout/head.php";?>
<?php include "../layout/body-start.php";?>

<?php include "../sections/headers/logo/full-width/none/header-centered.php";?>

<repeater>

<layout label='Full-Width Image 700px'>
<?php include "../sections/feature/white/boxed/full-width-image.php";?>
</layout>

<layout label='Image Text + Button'>
<?php include "/Users/lauren/Sites/email/sections/typography/white/boxed/1-column-image-with-text-button.php";?>
</layout>

<layout label='Image'>
<?php include "/Users/lauren/Sites/email/sections/feature/white/boxed/image.php";?>
</layout>

<layout label='1 Column Text w Button'>
<?php include "/Users/lauren/Sites/email/sections/typography/white/boxed/1-column-basic-with-button.php";?>
</layout>

<layout label='1 Column Text'>
<?php include "/Users/lauren/Sites/email/sections/typography/white/boxed/1-column-basic.php";?>
</layout>

<layout label='Button'>
<?php include "/Users/lauren/Sites/email/sections/miscellaneous/white/boxed/button.php";?>
</layout>

<layout label='1 Column Plain Text'>
<?php include "/Users/lauren/Sites/email/sections/typography/white/boxed/1-column-basic-plain-text.php";?>
</layout>

</repeater>

<?php include "../sections/footers/none/boxed/footer-4.php";?>

<?php include "../layout/body-end.php";?>