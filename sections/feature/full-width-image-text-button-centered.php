<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
        <th class="column has-columns mobile-padding-top-mini mobile-padding-bottom-mini" width="640"
            style="<?php echo $mainPadding; ?> color: <?php echo $txtColor; ?>; font-weight: 400; text-align: center;">
            <?php include "/Users/lauren/Sites/email/components/elements/singleline-heading-long.php";?>
            <?php include "/Users/lauren/Sites/email/components/elements/multiline-content-long-bottom.php";?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-15.php";?>
</table>

<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0" cellspacing="0">
    <tr>
        <th class="mobile-padding-top-mini mobile-padding-bottom-mini column has-columns" width="640"
            style="<?php echo $mainPadding; ?> color: <?php echo $txtColor; ?>; font-weight: 400; text-align: center; line-height:1;">
            <a href="https://www.alburycity.nsw.gov.au" style="text-decoration: none;">
                <img editable class="mobile-center" align="center" src="https://dummyimage.com/640x320/002A3A/FFFFFF"
                    alt="Image" width="640" style="border: 0; display:block; width: 100%; max-width: 640px;">
            </a>
        </th>
    </tr>
</table>

<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
    <tr>
        <th class="column has-columns mobile-padding-top-mini mobile-padding-bottom-mini" width="640"
            style="<?php echo $mainPadding; ?> color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
            <?php include $button;?>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30-hide.php";?>
</table>
