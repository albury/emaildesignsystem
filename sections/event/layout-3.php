<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
        <td class="mobile-padding-top-mini mobile-padding-bottom-mini mobile-no-padding">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <th valign="top" width="53.33%" class="column">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td class="has-columns mobile-padding-bottom-mini"
                                    style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; padding-left: 30px; padding-right: 20px;text-align: left; line-height:1;">
                                    <div class="sans-serif">
                                        <h3 style="font-size: 23px; line-height: 38px; font-weight: 700; display:block; color: <?php echo $txtColor; ?>;"
                                            class="sans-serif hero-title">
                                            <singleline label="Title"><?php echo $title; ?></singleline>
                                        </h3>
                                    </div>
                                    <div class="sans-serif" style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>;">
                                        <multiline label="Event Description">
                                            <p>Cia ipsundae volupis ilique omnis adist, ut porerum cum fuga. Apis alicat
                                            optatia ssinveni reprectet latis et aut officidebite plaut et acculpa volor
                                            ate aut que voluptus aborepe llatest ibeaqua eriberum quam am autem
                                            nonsendam qui optatur alibust otaqui ut optatus, odios alit, simped eatae
                                            suntium excest. See www.facebook.com/followradicalson</p></multiline>
                                    </div>
                                    <div class="hide-on-mobile" align="left" class="mobile-text-left" style="display:block; padding-top:30px; line-height:1;">
                                        <?php include $logo;?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </th>
                    <th valign="top" width="33.33%" class="column">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td class="has-columns sans-serif"
                                    style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; padding: 0px 10px; text-align: left; line-height:1;">
                                    <div class="sans-serif" style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>;">
                                        <multiline label="Event Details">
                                            <p>Sunday 18 November 1pm<br>
                                            Outdoor at the Albury Botanic Gardens<br>
                                            Free<br>
                                            Smoke-free / BYO alcohol is permitted<br>
                                            A limited number of chairs and tables are provided with ample space for your own picnic rug and cushions.</p>
                                        </multiline>
                                    </div>
                                    <?php include $button;?>
                                    <div class="spacer show-on-mobile" style="display:none; font-size: 20px; line-height: 20px;">&nbsp;</div>
                                    <div class="show-on-mobile" align="left" style="display:none; line-height:1;">
                                        <?php include $logo;?>
                                    </div>
                                    <div class="spacer show-on-mobile" style="display:none; font-size: 20px; line-height: 20px;">&nbsp;</div>
                                </td>
                            </tr>
                        </table>
                    </th>
                    <th valign="top" width="11.33%" class="column hide-on-mobile">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td class="sans-serif"
                                    style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; padding: 0px; text-align: left;">
                                    <img align="right" editable width="<?php echo $imgWidth; ?>" valign="middle"
                                        src="<?php echo $imgUrl; ?>"
                                        style="display:block; -ms-interpolation-mode: bicubic; border: 0; height: auto; outline: none; text-decoration: none; max-width: <?php echo $imgWidth; ?>px; vertical-align:middle; line-height:100%;">
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