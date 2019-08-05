<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
        <th class="column" width="640"
            style="padding-left: 30px; padding-right: 30px; color: <?php echo $txtColor; ?>; text-align: left;">
            <div class="spacer" style="font-size: 80px; line-height: 80px;">&nbsp;</div>
            <div class="serif" style="font-size: 18px; line-height: 100%; margin-bottom: 20px;">
                <singleline label="Title Sub-heading"><?php echo $subHeading; ?></singleline>
            </div>
            <div class="sans-serif h1"
                style="font-weight: 900; font-size: 52px; line-height: 50px; margin-bottom: 25px;">
                <multiline label="Title"><?php echo $title; ?></multiline>
            </div>
            <div class="sans-serif" style="font-size: 21px; line-height: 30px;">
                <multiline label="Sub-title"><?php echo $subtitle; ?></multiline>
            </div>
            <div class="spacer" style="font-size: 80px; line-height: 80px;">&nbsp;</div>
        </th>
    </tr>
</table>