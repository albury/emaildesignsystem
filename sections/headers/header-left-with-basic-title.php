<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
    <tr>
        <th class="column mobile-12 mobile-padding-bottom-mini" width="200"
            style="<?php echo $mainPaddingLeft; ?> padding-right: 10px; text-align: left;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:0!important; margin:0!important;">
                <tr>
                    <th class="mobile-padding-bottom-mini" style="line-height:1;padding:0; margin:0;">
                        <div class="mobile-center" align="left" style="line-height:1;">
                            <?php include $logo;?>
                        </div>
                    </th>
                </tr>
            </table>
        </th>
        <th class="column mobile-12 mobile-center" valign="middle" width="420"
            style="vertical-align:middle; line-height: 45px; padding-left: 10px; <?php echo $mainPaddingRight; ?> text-align:right">
            <?php include "/Users/lauren/Sites/email/components/elements/singleline-header-title.php";?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
</table>