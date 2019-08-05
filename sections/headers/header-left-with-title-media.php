<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
    <tr>
        <th class="column mobile-12" width="310" style="padding-right: 10px; <?php echo $mainPaddingLeft; ?> text-align: left; line-height:1;">
            <table cellpadding="0" width="100%">
                <tr>
                    <th class="sans-serif" style="line-height:1;">
                        <div class="mobile-center mobile-text-center mobile-margin-bottom-mini" align="left" style="line-height:1; padding-bottom:20px;">
                            <?php include $logo;?>
                        </div>
                        <div class="sans-serif" style="line-height:1;">
                        <?php include "/Users/lauren/Sites/email/components/elements/singleline-header-title-long.php";?>
                        </div>
                    </th>
                </tr>
            </table>
        </th>
        <th class="column mobile-12 mobile-text-center" valign="middle" width="310"
            style="vertical-align:middle; line-height: 45px; padding-left: 10px; <?php echo $mainPaddingRight; ?> text-align:right">
            <?php include "/Users/lauren/Sites/email/components/elements/singleline-header-title-long.php";?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
</table>