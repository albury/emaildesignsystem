<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
        <th class="column" width="700" bgcolor="#002A3A" background="<?php echo $bgImgUrl; ?>"
            style="background-repeat: no-repeat; background-position: center; background-size: cover;">
            <!--[if gte mso 9]>
          <v:image src="<?php echo $bgImgUrl; ?>" style="width:700px;height:<?php echo $bgImgHeight; ?>px;" />
          <v:rect fill="true" stroke="false" style="position:absolute;width:700px;height:<?php echo $bgImgHeight; ?>px;">
          <v:fill opacity="0">
          <div>
          <![endif]-->
            <table class="row" align="center" cellpadding="0" cellspacing="0">
                <tr valign="top" style="vertical-align: middle;">
                    <th class="hide-on-mobile" width="190"
                        style="padding-left: 0px; padding-right: 0px; font-weight: 400; text-align: left;line-height:1;">
                        <img editable width="<?php echo $imgWidth; ?>" valign="middle" src="<?php echo $imgUrl; ?>"
                            style="display:block; -ms-interpolation-mode: bicubic; border: 0; height: auto; outline: none; text-decoration: none; max-width: <?php echo $imgWidth; ?>px; vertical-align:middle;line-height:100%;">
                    </th>
                    <th align="left" class="mobile-12" width="400"
                        style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
                        <div class="spacer" style="font-size: <?php echo $bgImgHeight; ?>px; line-height: <?php echo $bgImgHeight; ?>px;">&nbsp;</div>
                    </th>
                </tr>
            </table>
            <!--[if gte mso 9]>
            </div>
            </v:fill>
            </v:rect>
            <![endif]-->
        </th>
    </tr>
</table>