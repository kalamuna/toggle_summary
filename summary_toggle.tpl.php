<?php
/**
 * @file summary_toggle.tpl.php
 */

$id  = isset( $variables['id'] ) ?  $variables['id'] : rand(0, 999999);
?>
<div class="<?php print $classes;?>">
<?php if(strlen($full_body) > strlen($summary_or_trimmed)): ?>
<?php if($nav_style === 'pill'){ ?>
  <div class="tab-content">
    <div class="tab-pane active " id="summaryBody<?php print $id; ?>"
      role="tabpanel" aria-hidden="fasle"
      aria-labeledby="#summaryBody<?php print $id; ?>tab"
      tabIndex="0">

      <?php print $summary_or_trimmed; ?>
    </div>
    <div class="tab-pane" id="fullBody<?php print $id; ?>"
      role="tabpanel" aria-hidden="true"
      aria-labeledby="#fullBody<?php print $id; ?>tab"
      tabIndex="-1">
      <?php print $full_body; ?>
    </div>
  </div><!--/.tab-content-->

<?php } ?>
<ul class="nav nav-<?php print $nav_style;?>s" role="tablist">
  <li class="active" role="presenation">
    <a href="#summaryBody<?php print $id; ?>"
      id="#summaryBody<?php print $id; ?>tab"
      data-toggle="<?php print $nav_style;?>" role="tab" tabIndex="0"
      aria-selected="true"
      aria-controls="#summaryBody<?php print $id; ?>">

      <span class="fa fa-minus-circle" aria-hidden="true"></span>
      Summary
    </a>
  </li>
  <li role="presentation">
    <a href="#fullBody<?php print $id; ?>"
      id="#fullBody<?php print $id; ?>tab"
      data-toggle="<?php print $nav_style;?>" role="tab" tabIndex="-1"
      aria-selected="false"
      aria-controls="#fullBody<?php print $id; ?>">
      <span class="fa fa-plus-circle" aria-hidden="true"></span>
      Full
    </a>
  </li>
</ul><!--/.nav.nav-<?php print $nav_style;?>s-->
<?php if($nav_style === 'tab'){ ?>
  <div class="tab-content <?php print $classes;?>">
    <div class="tab-pane active " id="summaryBody<?php print $id; ?>"
      role="tabpanel" aria-hidden="fasle"
      aria-labeledby="#summaryBody<?php print $id; ?>tab"
      tabIndex="0">

      <?php print $summary_or_trimmed; ?>
    </div>
    <div class="tab-pane" id="fullBody<?php print $id; ?>"
      role="tabpanel" aria-hidden="true"
      aria-labeledby="#fullBody<?php print $id; ?>tab"
      tabIndex="-1">
      <?php print $full_body; ?>
    </div>
  </div><!--/.tab-content-->

<?php } ?>

<?php
  else:
    print $full_body;
  endif;
?>
</div>
