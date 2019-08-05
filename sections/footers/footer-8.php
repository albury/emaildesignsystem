<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0">
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
    <tr>
        <th class="column" align="center" width="640"
            style="text-align: center; padding-left: 30px; padding-right: 30px; color: #858585; font-weight: 400; line-height: 100%; line-height:1;">
            <center>
                <?php include "/Users/lauren/Sites/email/components/copyright/copyright.php";?>
                <?php include "/Users/lauren/Sites/email/components/unsubscribe/privacy_unsubscribe.php";?>
                <table align="center" cellpadding="10" style="margin: 0 auto;">
                    <?php include $social;?>
                </table>
            </center>
        </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
</table>