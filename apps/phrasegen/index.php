<!DOCTYPE html>
<html>

<?php $page = 'Apps';
$page_name = 'Random Phrase Generator';
include('../../header.php'); ?>

        <div class="content_item">
          <?php include('table.php') ?>
          <p>This simple command-line program generates random phrases from a config file by allowing you to specify a prefix, suffix, and possible structures, nouns, and verbs to combine randomly. I originally released this as the "AVGN I'd Rather... than Generator", but pretty much any type of phrase can be generated with this. It now defaults to such statements related to using proprietary software rather than playing crappy games.</p>

          <h3>Download</h3>
          <p><a href="phrasegen-1.2.zip">phrasegen-1.2.zip</a></p>
        </div><!--close content_item-->

<?php include('../../footer.php'); ?>

</html>
