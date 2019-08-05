<table class="<?php echo ($class == "wrapper") ? "wrapper" : "row"; ?>" align="center" bgcolor="<?php echo $bgColor; ?>"
    cellpadding="0" cellspacing="0">
    <tr>
      <th class="column has-columns" width="640" style="padding-left: 30px; padding-right: 30px;">
        <table class="row" cellpadding="0" cellspacing="0">
          <tr>
            <th class="column mobile-padding-bottom-mini" width="300" style="padding-right: 10px; line-height:1;">
              <img editable class="mobile-center" src="https://www.alburycity.nsw.gov.au/__data/assets/image/0011/177383/2C1C.png" width="300" alt="Logo 1" width="145" style="border: 0; width: 100%; max-width: 300px;">
            </th>
            <th class="column mobile-padding-bottom-mini" width="100">&nbsp;</th>
            <th class="column" width="210" style="padding-left: 10px; line-height:1;">
              <img editable class="mobile-center" src="https://www.alburycity.nsw.gov.au/__data/assets/image/0019/177400/council.png" width="210" width="210" style="border: 0; width: 100%; max-width: 210px;">
            </th>
          </tr>
        </table>
      </th>
    </tr>
    <?php include "/Users/lauren/Sites/email/components/spacer/inner-row-spacer-30.php";?>
    <tr>
        <th class="column has-columns mobile-padding-top-mini mobile-padding-bottom-mini" width="600"
            style="<?php echo $mainPadding; ?> color: <?php echo $txtColor; ?>; font-weight: 400; text-align: left;">
            <div class="sans-serif" style="color: #a5a5a5; font-size: 13px; line-height:20px;">
                This message was sent to [email] If you don't want to receive these emails from the Sustainable
                    Living Festival in the future, you can <unsubscribe>unsubscribe</unsubscribe>.
            </div>
        </th>
    </tr>
</table>