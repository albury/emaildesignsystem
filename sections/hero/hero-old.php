<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr valign="middle" style="vertical-align: middle;">
        <th class="hide-on-mobile" width="190"
            style="padding-left: 0px; padding-right: 0px; font-weight: 400; text-align: left;line-height:1;">
            <img editable width="<?php echo $imgWidth; ?>" valign="middle"
                src="<?php echo $imgUrl; ?>"
                style="display:block; -ms-interpolation-mode: bicubic; border: 0; height: auto; outline: none; text-decoration: none; max-width: <?php echo $imgWidth; ?>px; vertical-align:middle;line-height:100%;">
        </th>
        <th align="left" class="mobile-12 mobile-text-center" width="400"
            style="color: <?php echo $txtColor; ?>; padding-left: 0px; padding-right: 20px; font-weight: 400; text-align: left;">
            <div class="spacer" style="font-size: 120px; line-height: 120px;">&nbsp;</div>
            <h1 style="font-size: 44px; line-height: 46px; font-weight: 900; display:block; color: <?php echo $txtColor; ?>;"
                class="sans-serif hero-title">
                <singleline label="Title"><?php echo $title; ?></singleline>
            </h1>
            <h3 style="color: <?php echo $txtColor; ?>; font-size: 18px; line-height: 31px; font-weight: 400;" class="serif">
                <singleline label="Sub-title"><?php echo $subtitle; ?></singleline>
            </h3>
            <div class="spacer" style="font-size: 120px; line-height: 120px;">&nbsp;</div>
        </th>
    </tr>
</table>