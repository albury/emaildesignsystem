<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
        <th class="column has-columns mobile-padding-top-mini mobile-padding-bottom-mini" width="640"
            style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; padding-bottom:20px; padding-left: 30px; padding-right: 30px; width: 100%; text-align: left; line-height:1;">
            <div class="sans-serif">
                <h1 style="font-size: 23px; line-height: 27px; font-weight: 700; display:block; color: <?php echo $txtColor; ?>;"
                    class="sans-serif">
                    <singleline label="Title"><?php echo $title; ?></singleline>
                </h1>
                <h3 style="color: <?php echo $txtColor; ?>; font-size: 18px; line-height: 31px; font-weight: 400;"
                    class="serif">
                    <singleline label="Sub-title"><?php echo $subtitle; ?></singleline>
                </h3>
            </div>
        </th>
    </tr>
</table>
<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
        <th valign="top" width="66.66%" class="column mobile-last">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td class="has-columns mobile-padding-bottom-mini"
                        style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; padding-left: 30px; padding-right: 20px; text-align: left; line-height:1;">
                        <div class="sans-serif"
                            style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>;">
                            <multiline label="Event Description">
                                <p>Cia ipsundae volupis ilique omnis adist, ut porerum cum fuga. Apis alicat
                                    optatia ssinveni reprectet latis et aut officidebite plaut et acculpa volor
                                    ate aut que voluptus aborepe llatest ibeaqua eriberum quam am autem
                                    nonsendam qui optatur alibust otaqui ut optatus, odios alit, simped eatae
                                    suntium excest.</p>
                                <p>Cia ipsundae volupis ilique omnis adist, ut porerum cum fuga. Apis alicat
                                    optatia ssinveni reprectet latis et aut officidebite plaut et acculpa volor
                                    ate aut que voluptus aborepe llatest.</p>
                            </multiline>
                        </div>
                    </td>
                </tr>
            </table>
        </th>
        <th valign="top" width="33.33%" class="column mobile-first" style="padding-right:20px;">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>
                    <td class="has-columns sans-serif mobile-padding-bottom-mini"
                        style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; text-align: left; line-height:1;">
                        <div class="sans-serif"
                            style="font-size: 14px; line-height: 25px; color: <?php echo $txtColor; ?>; display:block; padding-bottom:10px;">
                            <multiline label="Event Details">
                                <p>Wednesday 6 March<br>
                                5.30 pm - 7.00 pm<br>
                                Albury LibraryMuseum<br>
                                Free event<br>
                                Light refreshments will be served</p>
                            </multiline>
                        </div>
                        <?php include $button;?>
                    </td>
                </tr>
            </table>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
</table>