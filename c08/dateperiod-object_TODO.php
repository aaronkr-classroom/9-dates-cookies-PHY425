<?php
// @TODO
?>
<?php include 'includes/header.php'; ?> 
  <p>
    <?php foreach ($period as $event) { ?>
      <b><?= $event->format('l') ?></b>, <?= $event->format('M j Y') ?></b><br>
    <?php } ?>
  </p>
<?php include 'includes/footer.php'; ?>