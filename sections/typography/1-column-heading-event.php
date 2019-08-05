<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
    <tr valign="top" style="vertical-align: top;">
        <th class="column" width="640"
            style="padding-left: 30px; padding-right:0px; color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left; font-size:14px; line-height:22px; word-wrap: wrap; word-break: break-all;">
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
    </tr>
</table>