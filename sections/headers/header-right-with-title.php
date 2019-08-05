<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
    <tr style="display: table!important; width: 100%!important; ">
        <th class="column mobile-last" valign="middle" width="420"
            style="vertical-align:middle; line-height: 45px; padding-right: 10px; <?php echo $mainPaddingLeft; ?> text-align:left">
            <table class="mobile-text-center mobile-12" cellpadding="0" width="100%">
                <tr>
                    <th class="sans-serif">
                        <div class="mobile-center mobile-text-center" align="left">
                            <?php include "/Users/lauren/Sites/email/components/elements/singleline-header-title-long.php";?>
                        </div>
                    </th>
                </tr>
            </table>
        </th>
        <th class="column mobile-first" width="200" style="padding-left: 10px; <?php echo $mainPaddingRight; ?> text-align: left; line-height:1;">
            <table class="mobile-text-center mobile-12" cellpadding="0" width="100%">
                <tr>
                    <th class="sans-serif" style="line-height:1;">
                        <div class="mobile-center mobile-text-center mobile-margin-bottom-mini" align="right" style="line-height:1;">
                            <?php include $logo;?>
                        </div>
                    </th>
                </tr>
            </table>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
</table>