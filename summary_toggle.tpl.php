<?php
/**
 * @file summary_toggle.tpl.php
 */
?>
<?php if(strlen($full_body) > strlen($summary_or_trimmed)): ?>
<div class="tab-content">
  <div class="tab-pane active " id="summaryBody100095">
    <?php print $summary_or_trimmed; ?>
  </div>
  <div class="tab-pane" id="fullBody100095">
    <?php print $full_body; ?>
  </div>
</div>

<?php
  else:
    print $full_body;
  endif;
?>
