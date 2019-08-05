<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
    <tr valign="top" style="vertical-align: top;">
        <th align="left" class="column mobile-12" width="200"
            style="padding-left: 30px; padding-right: 10px; text-align: left;">
            <table cellpadding="0" width="100%">
                <tr>
                    <th class="mobile-padding-bottom-mini" style="line-height:1;">
                        <div class="mobile-center" align="left" style="line-height:1;">
                            <?php include $logo;?>
                        </div>
                    </th>
                </tr>
            </table>
        </th>
        <th class="column mobile-12 mobile-text-center" width="420"
            style="padding-left: 10px; padding-right: 30px; color: <?php echo $txtColor; ?>; font-weight: 400; text-align: right;">
            <?php include "/Users/lauren/Sites/email/components/copyright/copyright_unsubscribe.php";?>
            <?php include "/Users/lauren/Sites/email/components/address/address.php";?>
            <table align="right" cellpadding="10" class="mobile-center">
                <?php include $social;?>
            </table>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
</table>