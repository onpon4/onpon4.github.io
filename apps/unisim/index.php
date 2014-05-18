<!DOCTYPE html>
<html>

<?php $page = 'Apps';
$page_name = 'UniSim';
include('../../header.php'); ?>

        <div class="content_item">
          <?php include('table.php') ?>
          <p>This is a program I rigged up over a couple of days to simulate Conway's Game of Life as well as 12 variations of it. It was mostly in response to my learning of Conway's Game of Life; I found it to be very fascinating. I threw in colors to make it prettier to look at as well.</p>
          <p>This program takes advantage of the Psyco library if it is available, which speeds things up a lot.</p>

          <h3>Compatibility Notes</h3>
          <p>With this, I experimented with the idea of using Python code to store settings. This turned out to be a terrible idea, mostly because since I used Windows-style line endings (the rationale for that being that Windows users would be viewing the file with Notepad), the Python interpreters on some POSIX systems spit out errors when reading the config file due to reading the carriage return as part of the Python code. If you encounter this problem, just open the config file with a text editor such as gedit and re-save it with Unix-style line endings.</p>
          <p>If you are using Python 3, make sure to download the Python 3 version, not the Python 2 version. Python 2 and Python 3 are incompatible with each other.</p>

          <h3>Download</h3>
          <p><a href="unisim-1.1.0-py2.4.zip">unisim-1.1.0-py2.4.zip</a></p>
          <p><a href="unisim-1.1.0-py2.4.tar.gz">unisim-1.1.0-py2.4.tar.gz</a></p>
          <p><a href="unisim-1.1.0-py3.0.zip">unisim-1.1.0-py3.0.zip</a></p>
          <p><a href="unisim-1.1.0-py3.0.tar.gz">unisim-1.1.0-py3.0.tar.gz</a></p>
        </div><!--close content_item-->

<?php include('../../footer.php'); ?>

</html>
