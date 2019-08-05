<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
    <tr>
        <th class="column mobile-12 mobile-text-center" width="365" style="padding-left: 30px; padding-right: 10px; text-align: left;">
            <?php include "/Users/lauren/Sites/email/components/elements/singleline-cta-text.php";?>
        </th>
        <th class="column mobile-12 mobile-padding-top" align="right" width="255" style="padding-left: 10px; padding-right: 30px;">
            <div class="mobile-center">
            <?php include $button;?>
            </div>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
</table>