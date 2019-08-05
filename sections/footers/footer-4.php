<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0"
    cellspacing="0">
    <tr>
        <th class="column has-columns" width="640" style="<?php echo $mainPadding; ?>">
            <table class="row" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="spacer" colspan="2" height="80" style="font-size: 80px; line-height: 80px;">&nbsp;</td>
                </tr>
                <tr>
                    <th class="column mobile-12" colspan="2" width="640" style="text-align: left; line-height:1;">
                        <?php include $logo;?>
                    </th>
                </tr>
                <tr>
                    <td class="spacer" colspan="2" height="30" style="font-size: 30px; line-height: 30px;">&nbsp;</td>
                </tr>
                <tr valign="top" style="vertical-align: top;">
                    <th class="column" width="255"
                        style="padding-right: 10px; color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
                        <div class="sans-serif" style="margin-bottom: 10px;">
                            <multiline label="Footer Company Address">
                                553 Kiewa Street,
                                <br> PO Box 323
                                <br> Albury NSW 2640</multiline>
                        </div>
                        <div class="sans-serif mobile-margin-bottom" style="margin-top:10px;line-height: 100%;">
                            <a href="https://www.alburycity.nsw.gov.au"
                                style="color: <?php echo $txtColor; ?>; text-decoration: none; font-weight:700;">alburycity.nsw.gov.au</a>
                        </div>
                    </th>
                    <th class="column" width="365" style="padding-left: 10px;">
                        <table class="mobile-left" cellpadding="0" cellspacing="0">
                            <tr>
                                <th class="sans-serif" style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: right;">
                                    <div class="mobile-text-left sans-serif mobile-margin-top mobile-margin-bottom">
                                        This message was sent to [email]. If you don't want to receive these
                                        emails from AlburyCity in the future, you can&nbsp;<unsubscribe
                                            style="color: <?php echo $txtColor; ?>; text-decoration: none; font-weight: bold;">unsubscribe</unsubscribe>.
                                    </div>
                                </th>
                            </tr>
                        </table>
                    </th>
                </tr>
            </table>
            <table class="row divider" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <th height="61">
                        <div style="border-top: 1px solid <?php echo $hrColor; ?>; font-size: 0; line-height: 0;">&nbsp;</div>
                    </th>
                </tr>
            </table>
            <table class="row" cellpadding="0" cellspacing="0">
                <tr>
                    <th class="column" width="475" style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
                        <div class="sans-serif">
                            <singleline label="Copyright">&copy; AlburyCity. All Rights Reserved.</singleline>
                        </div>
                    </th>
                    <th class="column mobile-padding-top" width="145">
                        <table align="right" class="mobile-left" cellpadding="10" cellspacing="0">
                            <?php include $social;?>
                        </table>
                    </th>
                </tr>
                <tr>
                    <td class="spacer" height="30" colspan="2" style="font-size: 30px; line-height: 30px;">&nbsp;</td>
                </tr>
            </table>
        </th>
    </tr>
</table>