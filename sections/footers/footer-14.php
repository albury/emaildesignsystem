<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
    <tr valign="top" style="vertical-align: top;">
        <th class="column mobile-12 mobile-padding-bottom-mini mobile-text-center" width="260"
            style="color: <?php echo $txtColor; ?>; font-weight:400; padding-left: 30px; padding-right: 10px; text-align: left;">
            <?php include "/Users/lauren/Sites/email/components/copyright/copyright.php";?>
        </th>
        <th class="column mobile-12 mobile-text-center" width="360"
            style="padding-left: 10px; padding-right: 30px; color: <?php echo $txtColor; ?>; font-weight: 400; text-align: right;">
            <div>
                <unsubscribe style="color: <?php echo $linkColor; ?>; text-decoration: none;">Unsubscribe</unsubscribe>
            </div>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
</table>