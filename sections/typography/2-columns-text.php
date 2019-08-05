<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
        <td class="mobile-padding-top-mini mobile-padding-bottom-mini mobile-no-padding" width="640" style="padding: 0px 10px;">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <th valign="top" width="50%" class="column has-columns" style="padding-left:20px;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td class="sans-serif mobile-padding-bottom-mini"
                                    style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; text-align: left;">
                                        <?php include "/Users/lauren/Sites/email/components/elements/singleline-heading-short.php";?>
                                        <?php include "/Users/lauren/Sites/email/components/elements/multiline-content.php";?>
                                        <?php include $button;?>
                                </td>
                            </tr>
                        </table>
                    </th>
                    <th valign="top" width="50%" class="column has-columns" style="padding-right:10px; padding-left:10px;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td class="sans-serif"
                                    style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; text-align: left;">
                                        <?php include "/Users/lauren/Sites/email/components/elements/singleline-heading-short.php";?>
                                        <?php include "/Users/lauren/Sites/email/components/elements/multiline-content.php";?>
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