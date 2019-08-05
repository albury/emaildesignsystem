<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-15.php";?>
    <tr class="mobile-full-width">
        <th class="column mobile-last mobile-text-center" width="450"
            style="padding-left: 30px; padding-right: 10px; font-weight: 400; text-align: left;">
            <div class="sans-serif">
                <a href="https://www.alburycity.nsw.gov.au" target="_blank"
                    style="color: <?php echo $txtColor; ?>; font-size: 12px; line-height: 16px; text-decoration: none;">
                    <img src="../../images/icon-phone-light.png" width="18"
                        style="border: 0; display: inline-block; vertical-align: middle; width: 100%; max-width: 18px;">&nbsp;
                    <span style="mso-line-height-rule: exactly; mso-text-raise: 4px;">02 6023 8111</span>
                </a>
                &nbsp;&nbsp;
                <a href="mailto:info@alburycity.nsw.gov.au" class="column mobile-12"
                    style="color: <?php echo $txtColor; ?>; font-size: 12px; line-height: 16px; text-decoration: none;">
                    <img src="../../images/icon-email-light.png" width="18"
                        style="border: 0; display: inline-block; vertical-align: middle; width: 100%; max-width: 18px;">&nbsp;
                    <span style="mso-line-height-rule: exactly; mso-text-raise: 4px;">info@alburycity.nsw.gov.au</span>
                </a>
            </div>
        </th>
        <th class="column mobile-first" width="170" style="padding-left: 10px; padding-right: 30px;">
            <table align="right" cellpadding="5" class="mobile-center mobile-margin-bottom-mini">
                <?php include $social;?>
            </table>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-15.php";?>
</table>