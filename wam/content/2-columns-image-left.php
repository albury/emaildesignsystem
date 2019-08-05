<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
    <td class="mobile-padding-top-mini mobile-padding-bottom-mini mobile-no-padding" style="padding: 0px 10px;">
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <th valign="middle" width="50%" class="column mobile-first">
                    <table align="right" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td class="mobile-padding-bottom-mini" style="padding: 0 20px; text-align: center; line-height:1;">
                                <img class="full" editable src="https://dummyimage.com/310x230/002A3A/FFF" width="310" border="0" style="width: 100%; max-width: 310px; height: auto; font-size: 14px; display:block; line-height: 14px;">
                            </td>
                        </tr>
                    </table>
                </th>
                <th align="left" valign="middle" width="50%" class="column mobile-last">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td class="sans-serif" style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; text-align: left; padding: 0px 20px;">
                            <?php include "/Users/lauren/Sites/email/components/elements/singleline-heading-long.php";?>
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