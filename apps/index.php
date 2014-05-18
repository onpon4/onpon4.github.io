<!DOCTYPE html>
<html>

<?php $page = 'Apps';
$page_name = 'Apps';
include('../header.php'); ?>

        <div class="content_item">
          <?php include('sge/table.php') ?>
          <div class="button_small">
		    <a href="http://stellarengine.nongnu.org">Read more/download</a>
		  </div><!--close button_small--><br /><br /><br />

          <?php include('auto-typist/table.php') ?>
          <div class="button_small">
		    <a href="auto-typist">Read more/download</a>
		  </div><!--close button_small--><br /><br /><br />

		  <?php include('stopwatch/table.php') ?>
          <div class="button_small">
		    <a href="stopwatch">Read more/download</a>
		  </div><!--close button_small--><br /><br /><br />

		  <?php include('phrasegen/table.php') ?>
          <div class="button_small">
		    <a href="phrasegen">Read more/download</a>
		  </div><!--close button_small--><br /><br /><br />

		  <?php include('unisim/table.php') ?>
          <div class="button_small">
		    <a href="unisim">Read more/download</a>
		  </div><!--close button_small--><br /><br /><br />

		  <?php include('jvocab/table.php') ?>
          <div class="button_small">
		    <a href="jvocab">Read more/download</a>
		  </div><!--close button_small-->
        </div><!--close content_item-->

<?php include('../footer.php'); ?>

</html>
