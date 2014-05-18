<!DOCTYPE html>
<html>

<?php $page = 'Other';
$page_name = 'Other Works';
include('../header.php'); ?>

        <div class="content_item">
          <?php include('food-pirate/table.php') ?>
          <div class="button_small">
		    <a href="food-pirate">See comic</a>
		  </div><!--close button_small--><br /><br /><br />

          <?php include('fsf-no-derivatives/table.php') ?>
          <div class="button_small">
		    <a href="fsf-no-derivatives">Read more</a>
		  </div><!--close button_small--><br /><br /><br />

          <?php include('open-thought-movement/table.php') ?>
          <div class="button_small">
		    <a href="open-thought-movement">See comic</a>
		  </div><!--close button_small--><br /><br /><br />

          <?php include('proprietary-software-common-arguments/table.php') ?>
          <div class="button_small">
		    <a href="proprietary-software-common-arguments">Read more</a>
		  </div><!--close button_small--><br /><br /><br />

		  <?php include('no-starbase-challenge-guide/table.php') ?>
          <div class="button_small">
		    <a href="no-starbase-challenge-guide">Read more</a>
		  </div><!--close button_small-->
        </div><!--close content_item-->

<?php include('../footer.php'); ?>

</html>
