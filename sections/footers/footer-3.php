<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0"
    cellspacing="0">
    <tr>
        <th class="column" width="640" style="<?php echo $mainPadding; ?>">
            <table class="row" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="spacer" height="80" colspan="3" style="font-size: 80px; line-height: 80px;">&nbsp;</td>
                </tr>
                <tr class="mobile-full-width" valign="top" style="vertical-align: top;">
                    <th class="column mobile-intermediate" width="145"
                        style="padding-right: 10px; color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
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
                    <th class="column mobile-text-left mobile-first" width="320"
                        style="padding-left: 10px; padding-right: 10px; line-height:1;">
                        <div align="center" class="mobile-text-left" style="margin: 0 0 20px;">
                            <?php include $logo;?>
                        </div>
                        <table align="center" class="mobile-left mobile-margin-top-mini mobile-margin-bottom"
                            cellpadding="10" cellspacing="0" style="margin: 0 auto;">
                            <?php include $social;?>
                        </table>
                    </th>
                    <th class="column mobile-last mobile-text-left" width="145"
                        style="font-weight: 400; text-align: right;">
                        <div class="sans-serif" style="line-height: 100%; margin-bottom: 15px;">
                            <webversion style="color: <?php echo $txtColor; ?>; text-decoration: none;">Online Version</webversion>
                        </div>
                        <div class="sans-serif" style="line-height: 100%; margin-bottom: 15px;">
                            <forwardtoafriend style="color: <?php echo $txtColor; ?>; text-decoration: none;">Forward to a Friend
                            </forwardtoafriend>
                        </div>
                        <div class="sans-serif" style="line-height: 100%;">
                            <unsubscribe style="color: <?php echo $txtColor; ?>; text-decoration: none;">Unsubscribe</unsubscribe>
                        </div>
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
                    <th class="column mobile-text-left" width="640" style="color: <?php echo $txtColor; ?>; font-weight: 400;">
                        <div class="sans-serif">
                            <singleline label="Copyright">&copy; AlburyCity. All Rights Reserved.</singleline>
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