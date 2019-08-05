<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
        <th class="column" width="640" style="padding-left: 30px; padding-right:0px;">
            <table class="row" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="spacer" height="40" colspan="3" style="font-size: 40px; line-height: 40px;">&nbsp;</td>
                </tr>
                <tr>
                    <th class="column unwrap mobile-padding-bottom-mini" colspan="2"
                        style="padding-right: 10px; color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left; font-size:14px; line-height:22px; word-wrap: wrap; word-break: break-all; padding-bottom:10px;">
                        <div class="sans-serif">
                            <h1 style="padding-bottom:10px; font-size: 44px; line-height: 46px; font-weight: 900; display:block; color: <?php echo $txtColor; ?>;"
                                class="sans-serif event-title hero-title">
                                <singleline label="Title"><?php echo $title; ?></singleline>
                            </h1>
                            <h3 style="color: <?php echo $txtColor; ?>; font-size: 18px; line-height: 26px; font-weight: 400;"
                                class="serif">
                                <singleline label="Sub-title"><?php echo $subtitle; ?></singleline>
                            </h3>
                        </div>
                    </th>
                    <th valign="top" class="hide-on-mobile" rowspan="3"
                        style="font-weight: 400; text-align: right; line-height:1;">
                        <img align="right" editable width="<?php echo $imgWidth; ?>" valign="top"
                            src="<?php echo $imgUrl; ?>"
                            style="display:block; -ms-interpolation-mode: bicubic; border: 0; height: auto; outline: none; text-decoration: none; max-width: <?php echo $imgWidth; ?>px; vertical-align:top; line-height:100%;">
                    </th>
                </tr>
                <tr>
                    <th valign="top" class="column mobile-padding-bottom-mini" width="40%"
                        style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left; font-size:14px; line-height:22px; padding-right:30px;">
                        <div class="sans-serif">
                            <multiline label="Event Details">
                                <p>Tuesday 23 October — Sunday 11 November<br>
                                Launch and student talk<br>
                                Wednesday 24 October 11.00am<br>
                                Albury LibraryMuseum, Community Wall<br>
                                Free<br>
                                Bookings at 02 6023 8333 or <a href="mailto:librarymuseum@alburycity.nsw.gov.au"
                                    style="color: <?php echo $txtColor; ?>; word-wrap: break-word; word-break: break-all; text-decoration:none; font-weight: bold;">librarymuseum@<br>alburycity.nsw.gov.au</a></p>
                            </multiline>
                        </div>
                    </th>
                    <th valign="top" class="column" width="56.66%"
                        style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left; font-size:14px; line-height:22px; padding-right:20px">
                        <div class="sans-serif">
                            <multiline label="Event Description">
                                <p>Ficiumque nim eos prorias doluptatia si conecepedit la que volla con con
                                consequibus, tempelis eat res aut laudi ute elenis ex eatusciat. Rerspitam nos
                                et re dipsam quis molectus poraectet officia tesequas dis in nonse voluptatus
                                ditiisqui dolorrum, vendipient ut ullupienis endis rem rem eati cullor accatur
                                moluptatur rendistiam utem auta sam facius, ipietur resti noneceatem voluptas
                                dolupta dendaec ustiunte erferum quam.</p></multiline>
                        </div>
                        <?php include $button;?>
                    </th>
                </tr>
                <tr>
                    <td class="spacer" height="30" colspan="3" style="font-size: 30px; line-height: 30px;">&nbsp;</td>
                </tr>
                <tr>
                    <th class="column" colspan="2" style="line-height: 1;">
                        <div align="left" class="mobile-text-left" style="line-height: 1;">
                            <?php include $logo;?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="spacer" height="40" colspan="3" style="font-size: 40px; line-height: 40px;">&nbsp;</td>
                </tr>
            </table>
        </th>
    </tr>
</table>