<?php
  $title="Beranda";
  $judul=$title;
  $setTemplate=false;
?>
<?=content_open('Halaman Beranda')?>
    <?=$session->pull("info")?>
<?=content_close()?>
  </div>