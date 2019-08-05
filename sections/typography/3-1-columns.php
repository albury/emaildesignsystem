<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
    <td class="mobile-padding-top-mini mobile-padding-bottom-mini mobile-no-padding" dir="ltr" width="100%" style="padding: 0px 10px;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <th valign="middle" width="66.66%" class="column mobile-last">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <th class="sans-serif" dir="ltr" valign="top" style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; padding: 0px 20px; text-align: left;">
                                <?php include "/Users/lauren/Sites/email/components/elements/singleline-heading-short.php";?>
                                <?php include "/Users/lauren/Sites/email/components/elements/multiline-content.php";?>
                                <?php include $button;?>
                            </th>
                        </tr>
                    </table>
                </th>
                <th valign="middle" width="33.33%" class="column mobile-first">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="mobile-padding-bottom-mini" dir="ltr" valign="top" style="padding: 0px 20px; line-height:1;">
                                <?php include "/Users/lauren/Sites/email/components/elements/singleline-heading-short.php";?>
                                <?php include "/Users/lauren/Sites/email/components/elements/multiline-content-short.php";?>
                                <?php include $button;?>
                            </td>
                        </tr>
                    </table>
                </th>
            </tr>
        </table>
    </td>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
</table>