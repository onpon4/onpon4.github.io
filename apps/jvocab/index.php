<!DOCTYPE html>
<html>

<?php $page = 'Apps';
$page_name = 'JVocab';
include('../../header.php'); ?>

        <div class="content_item">
          <?php include('table.php') ?>
          <p>This simple program is something I rigged up essentially as an experiment to see if it would help with my Japanese vocabulary (something I always had trouble with). It actually helped quite a bit while I was in Japanese class. It's basically a sort of automated flash card type thing targeted specifically at Japanese. It works by reading from "dictionary" text files and asking you to correctly identify certain words.</p>
          <p>JVocab also offers a mode where you are scored for ordering words alphabetically correctly, which is what helped me learn the vertical order of the kana chart.</p>

          <h3>Download</h3>
          <p><a href="jvocab.zip">jvocab.zip</a></p>
          <p><a href="jvocab.tar.gz">jvocab.tar.gz</a></p>
        </div><!--close content_item-->

<?php include('../../footer.php'); ?>

</html>
