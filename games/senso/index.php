<!DOCTYPE html>
<html>

<?php $page = 'Games';
$page_name = 'Senso';
include('../../header.php'); ?>

        <div class="content_item">
          <?php include('table.php') ?>
          <p>Senso was the first game I developed in Python. It is a very basic game: you control a "ship" (a colored triangle) and have to shoot down enemy "ships" and "turrets". Whoever destroys either all enemy ships or all enemy turrets wins. The game is somewhat customizable.</p>
          <p>This needs to be run in a terminal. It asks you what type of game you want to play and will never start if you can't answer.</p>

          <h3>Download</h3>
          <p><ul>
            <li>Source (zip): <a href="senso_0.3.0.zip">senso_0.3.0.zip</a></p></li>
            <li>Source (tarball, Gzipped): <a href="senso_0.3.0.tar.gz">senso_0.3.0.tar.gz</a></li>
          </ul></p>
        </div><!--close content_item-->

<?php include('../../footer.php'); ?>

</html>
