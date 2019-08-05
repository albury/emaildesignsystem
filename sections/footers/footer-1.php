<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0"
    cellspacing="0">
    <tr>
        <th class="column has-columns" width="640" style="<?php echo $mainPadding; ?>">
            <div class="spacer" style="font-size: 80px; line-height: 80px;">&nbsp;</div>
            <table class="row" cellpadding="0" cellspacing="0">
                <tr valign="top" style="vertical-align: top;">
                    <th class="column mobile-padding-bottom" width="255"
                        style="padding-top: 10px; padding-right: 10px; text-align: left; line-height:1;">
                            <?php include $logo;?>
                    </th>
                    <th class="column mobile-text-left" width="365" style="padding-left: 10px;">
                        <table align="right" class="mobile-left" cellpadding="10" cellspacing="0" style="margin:0 !important;">
                            <?php include $social;?>
                        </table>
                    </th>
                </tr>
            </table>
            <table class="row divider" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <th height="81">
                        <div style="border-top: 1px solid <?php echo $hrColor; ?>; font-size: 0; line-height: 0;">&nbsp;</div>
                    </th>
                </tr>
            </table>
            <table class="row" cellpadding="0" cellspacing="0">
                <tr valign="top" style="vertical-align: top;">
                    <th class="column mobile-12" width="200"
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
                    <th class="column mobile-12" width="420"
                        style="padding-left: 10px; font-weight: 400; text-align: left;">
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
            <div class="spacer" style="font-size: 40px; line-height: 40px;">&nbsp;</div>
            <table class="row" cellpadding="0" cellspacing="0">
                <tr>
                    <th class="column" width="640" style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
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