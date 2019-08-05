<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
    <tr>
        <th class="column mobile-12" width="200" style="<?php echo $mainPaddingLeft; ?> padding-right: 10px; text-align: left; line-height:1;">
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
        <th class="column mobile-12 hide-on-mobile" align="right" valign="top" width="420"
            style="vertical-align:top; line-height: 45px; padding-left: 10px; <?php echo $mainPaddingRight; ?>">
            <?php include "/Users/lauren/Sites/email/components/webversion/webversion.php";?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
</table>