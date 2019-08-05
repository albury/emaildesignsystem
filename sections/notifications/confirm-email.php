<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
    <tr>
        <th class="column" width="640"
            style="color: <?php echo $txtColor; ?>; padding-left: 30px; padding-right: 30px; font-weight: 400; text-align: left;">
            <div class="sans-serif"
                style="color: <?php echo $txtColor; ?>; font-size: 28px; font-weight: 700; line-height: 50px; margin-bottom: 30px;">
                <singleline label="Greeting">Hi John Adams,</singleline>
            </div>
            <div class="sans-serif" style="font-size: 18px; line-height: 28px; margin-bottom: 40px;">
                <multiline label="Content">
                    Thank you for subscribing to receive updates on what is happening in Albury. To continue please
                    confirm your email by clicking the button below:
                </multiline>
            </div>
            <?php include $button;?>
            <div style="margin-top: 40px;">
                <multiline label="Content">Thanks, <br><strong>AlburyCity</strong></multiline>
            </div>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-40.php";?>
</table>