<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
        <th class="column mobile-no-padding" width="640" style="<?php echo $mainPadding; ?>">
            <table class="row" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="spacer" height="40" colspan="3" style="font-size: 40px; line-height: 40px;">&nbsp;</td>
                </tr>
                <tr valign="top" style="vertical-align: top;">
                    <th class="column has-columns" width="310"
                        style="padding-right: 10px; text-align: left; line-height:1;">
                        <?php include $logo;?>
                        <div class="spacer" style="font-size: 10px; line-height: 10px;">&nbsp;</div>
                        <table align="left" cellpadding="10" cellspacing="0">
                            <?php include $social;?>
                        </table>
                        <table align="left" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="spacer" height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <th>
                                    <div style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;"
                                        class="sans-serif mobile-padding-top mobile-padding-bottom">
                                        <singleline label="Copyright">&copy; AlburyCity. All Rights Reserved.
                                        </singleline>
                                    </div>
                                </th>
                            </tr>
                        </table>
                    </th>
                    <th class="column has-columns" width="145"
                        style="padding-left: 10px; padding-right: 10px; color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
                        <div class="sans-serif">
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
                    <th class="column has-columns" width="145"
                        style="padding-left: 10px; font-weight: 400; text-align: left;">
                        <div class="sans-serif" style="line-height: 100%; margin-bottom: 15px;">
                            <webversion style="color: <?php echo $txtColor; ?>; text-decoration: none;">Online Version
                            </webversion>
                        </div>
                        <div class="sans-serif" style="line-height: 100%; margin-bottom: 15px;">
                            <forwardtoafriend style="color: <?php echo $txtColor; ?>; text-decoration: none;">Forward to
                                a Friend
                            </forwardtoafriend>
                        </div>
                        <div class="sans-serif" style="line-height: 100%;">
                            <unsubscribe style="color: <?php echo $txtColor; ?>; text-decoration: none;">Unsubscribe
                            </unsubscribe>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="spacer" height="30" style="font-size: 30px; line-height: 30px;">&nbsp;</td>
                </tr>
            </table>
        </th>
    </tr>
</table>