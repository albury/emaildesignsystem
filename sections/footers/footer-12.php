<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
    <tr class="mobile-full-width" valign="top" style="vertical-align: top;">
        <th class="column mobile-last" width="310" style="padding-left: 30px; padding-right: 10px;">
            <table cellpadding="0" width="100%">
                <tr>
                    <th class="mobile-text-center"
                        style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
                        <?php include "/Users/lauren/Sites/email/components/copyright/copyright.php";?>
                        <?php include "/Users/lauren/Sites/email/components/unsubscribe/privacy_unsubscribe.php";?>
                        <table align="left" cellpadding="10" class="mobile-center">
                            <?php include $social;?>
                        </table>
                    </th>
                </tr>
            </table>
        </th>
        <th class="column mobile-first" width="310" style="padding-left: 10px; padding-right: 30px;">
            <table cellpadding="0" width="100%">
                <tr>
                    <th class="mobile-padding-bottom-mini" style="line-height:1;">
                        <div class="mobile-center" align="right" style="line-height:1;">
                            <?php include $logo;?>
                        </div>
                    </th>
                </tr>
            </table>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
</table>