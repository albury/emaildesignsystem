<?php
$bodyPadding = "30px 0;";
$bodyBg = "#F7F7F7";
?>
<?php include "../layout/head.php";?>
<?php include "../layout/body-start.php";?>

<?php include "../sections/headers/wordmark/boxed/none/header-left.php";?>

<repeater>

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

<?php include "../sections/footers/none/boxed/footer-10.php";?>

<?php include "../layout/body-end.php";?>