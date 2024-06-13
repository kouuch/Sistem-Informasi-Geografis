<?php
$title = "Kabupaten";
$judul = $title;
$url = 'kabupaten';

if(isset($_POST['simpan'])){ //tambah
    if($_POST['id_kabupaten']==""){
        $data['k_wilayah']=$_POST['k_wilayah'];
        $data['nm_daerah']=$_POST['nm_daerah'];
        $data['daerah_induk']=$_POST['daerah_induk'];
        $data['ibu_kota']=$_POST['ibu_kota'];
        $db->insert('m_kabupaten',$data);
        ?>
        <script>
            alert("Suskses disimpan");
            window.location.href="<?=url('kabupaten')?>";
        </script>
        <?php
    } else { //ubah
        $data['k_wilayah']=$_POST['k_wilayah'];
        $data['nm_daerah']=$_POST['nm_daerah'];
        $data['daerah_induk']=$_POST['daerah_induk'];
        $data['ibu_kota']=$_POST['ibu_kota'];
        $db->where('id_kabupaten',$_POST['id_kabupaten']);
        $db->update('m_kabupaten',$data);
        ?>
        <script>
            alert("Suskses ubah");
            window.location.href="<?=url('kabupaten')?>";
        </script>
        <?php
    }
}

if(isset($_GET['hapus'])){ //hapus
    $db->where('id_kabupaten',$_GET['id']);
    $db->delete('m_kabupaten');
    ?>
    <script>
        alert("Suskses dihapus");
        window.location.href="<?=url('kabupaten')?>";
    </script>
    <?php
    
}
if (isset($_GET['tambah']) || isset($_GET['ubah'])) {
    $id_kabupaten = "";
    $k_wilayah = "";
    $nm_daerah = "";
    $daerah_induk = "";
    $ibu_kota = "";

    if (isset($_GET['ubah']) && isset($_GET['id'])) {
        $id = $_GET['id'];
        $db->where('id_kabupaten', $id);
        $row = $db->ObjectBuilder()->getOne('m_kabupaten');

        if ($db->count > 0) {
            $id_kabupaten = $row->id_kabupaten;
            $k_wilayah = $row->k_wilayah;
            $nm_daerah = $row->nm_daerah;
            $daerah_induk = $row->daerah_induk;
            $ibu_kota = $row->ibu_kota;
        }
    }
?>
    <?=content_open('Form Kabupaten')?>
    <form method="post">
        <?=input_hidden('id_kabupaten', $id_kabupaten)?>
        <div class="form-group">
            <label>Kode Wilayah</label>
            <?=input_text('k_wilayah', $k_wilayah)?>
        </div>
        <div class="form-group">
            <label>Nama Daerah</label>
            <?=input_text('nm_daerah', $nm_daerah)?>
        </div>
        <div class="form-group">
            <label>Daerah Induk</label>
            <?=input_text('daerah_induk', $daerah_induk)?>
        </div>
        <div class="form-group">
            <label>Ibu Kota</label>
            <?=input_text('ibu_kota', $ibu_kota)?>
        </div>
        <div class="form-group">
            <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <a href="<?=url($url)?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
        </div>
    </form>
    <?=content_close()?>
<?php 
} else { 
?>
    <?=content_open('Data Kabupaten')?>
    <a href="<?=url($url.'&tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id Kabupaten</th>
                <th>Kode Wilayah</th>
                <th>Nama Daerah</th>
                <th>Daerah Induk</th>
                <th>Ibu Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $getdata = $db->ObjectBuilder()->get('m_kabupaten');
            foreach ($getdata as $row) {
            ?>
                <tr>
                    <td><?=$row->id_kabupaten?></td>
                    <td><?=$row->k_wilayah?></td>
                    <td><?=$row->nm_daerah?></td>
                    <td><?=$row->daerah_induk?></td>
                    <td><?=$row->ibu_kota?></td>
                    <td>
                        <a href="<?=url($url.'&ubah&id='.$row->id_kabupaten)?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?=url($url.'&hapus&id='.$row->id_kabupaten)?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?=content_close()?>
<?php 
} 
?>