<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
    <tr>
        <th class="column" width="640" style="padding-left: 30px; padding-right: 30px; text-align: center;">
            <?php include "/Users/lauren/Sites/email/components/elements/singleline-cta-text.php";?>
            <div class="spacer" style="font-size: 20px; line-height: 20px;">&nbsp;</div>
            <?php include $button;?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
</table>