<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
        <th class="column has-columns mobile-padding-top-mini mobile-padding-bottom-mini" width="640"
            style="<?php echo $mainPadding; ?> color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
            <?php include "/Users/lauren/Sites/email/components/elements/multiline-content-long.php";?>
            <table class="row" align="center" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="spacer" height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                </tr>
            </table>
            <?php include $button;?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
</table>