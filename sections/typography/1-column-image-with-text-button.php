<?php include "/Users/lauren/Sites/email/sections/feature/image.php";?>
<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
        <th class="column has-columns mobile-padding-top-mini mobile-padding-bottom-mini" width="640"
            style="<?php echo $mainPadding; ?> color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
            <?php include "/Users/lauren/Sites/email/components/elements/singleline-heading-long.php";?>
            <?php include "/Users/lauren/Sites/email/components/elements/multiline-content-long-bottom.php";?>
            <?php include $button;?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
</table>