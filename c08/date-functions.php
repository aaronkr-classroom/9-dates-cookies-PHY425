<?php
$start      = strtotime('tomorrow');
$end        = mktime(0, 0, 0, 2, 1, 2011);
$start_date = date('D, j M \'y', $start); // Saturday, 09, Jan 21
$end_date   = date('l, F d, Y', $end);   // Sunday, February 01, 2021
?>
<?php include 'includes/header.php'; ?>

  <p><b>Sale starts:</b> <?= $start_date ?></p>
  <p><b>Sale ends:</b> <?= $end_date ?></p>

<?php include 'includes/footer.php'; ?>