<table class="row divider" align="center" bgcolor="<?php echo $bgColor; ?>" cellpadding="0" cellspacing="0">
    <tr>
        <th height="1" style="padding: 0;">
            <div style="border-bottom: 1px solid #000000; font-size: 0; line-height: 0;">&nbsp;</div>
        </th>
    </tr>
</table>
<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0">
    <tr valign="top" style="vertical-align: top;">
        <th align="left" width="200">
            <table cellpadding="0" width="100%">
                <tr>
                    <th class="mobile-padding-bottom-mini" style="line-height:1;">
                        <div align="left" style="margin-top:15px; line-height:1;">
                            <a href="https://www.alburycity.nsw.gov.au">
                                <img editable
                                    src="https://www.alburycity.nsw.gov.au/__data/assets/image/0003/178158/logo.png"
                                    width="176" alt="MAMA" style="border: 0; max-width: 176px;margin-bottom:15px;">
                            </a>
                            <p style="font-size: 11px; line-height: 13px;" class="small">546 Dean Street<br>
                                Albury NSW 2640<br>
                                <br>
                                <a href="http://mamalbury.com.au">mamalbury.com.au</a></p>
                        </div>
                    </th>
                </tr>
            </table>
        </th>
        <th width="420"
            style="color: <?php echo $txtColor; ?>; font-weight: 400; text-align: right;">
            <table valign="top" align="right" cellpadding="5">
                <?php include $social;?>
            </table>
        </th>
    </tr>


    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-15.php";?>
</table>
<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
        <th class="mobile-padding-top-mini mobile-padding-bottom-mini" width="600"
            style="color: #a5a5a5; font-weight: 400; text-align: left;">
            <div class="sans-serif small" style="color: #a5a5a5; font-size: 11px; line-height:13px;">
                <singleline>Don't like our newsletter?</singleline> You can unsubscribe <unsubscribe> here
                </unsubscribe>.
            </div>
        </th>
    </tr>
</table>