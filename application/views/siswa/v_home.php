<?php 
$this->load->view('siswa/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('siswa/topbar');
$this->load->view('siswa/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

    <div class="callout callout-info">
        <h4>Selamat Datang, <?php echo $this->session->userdata('nama');?> </h4>
        
    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan Try Out</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dt></dt>
                <dd>
                    <ol style="list-style-type:none;">
                        <li>1. Jadwal Ujian</li>
                        <ul style="list-style-type:disc; margin-left: 0px;">
                            <li>
                                <div>
                                    <p>Di TAB jadwal ujian, terdapat jadwal ujian yang telah didaftarkan oleh
                                        administrator sebagai peserta ujian</p>
                                </div>
                            </li>
                    </ol>
                    <ul style="list-style-type:none;">
                        <li>2. Pelaksanaan Ujian</li>
                        <ul style="list-style-type:disc; margin-left: 0px;">
                            <li>
                                <div>
                                    <p>Anda tidak dapat keluar dari halaman web saat ujian berlangsung. Jika anda keluar, maka web akan otomatis terkeluar.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>Begitu anda mengumpulkan tes ini, Anda tidak dapat kembali dan mengubah jawaban.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>Untuk Literasi Numerasi, siapkan kertas dan pena untuk menghitung jawaban.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>Pastikan Anda memiliki koneksi internet yang stabil selama tes berlangsung.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>Kerjakan tes dalam lingkungan yang tenang.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p>Rekomendasi Anda dapat menggunakan browser, atau Chrome.</p>
                                </div>
                            </li>
                        </ul>
                    </ul>
                    <ul style="list-style-type:none;">
                        <li>3. Hasil Ujian</li>
                        <ul style="list-style-type:disc; margin-left: 0px;">
                            <li>
                                <div>
                                    <p>Anda dapat langsung melihat hasil atau skor jawaban.</p>
                                </div>
                            </li>
                </dd>
            </dl>

        </div>


</section><!-- /.content -->
  
<?php 
$this->load->view('siswa/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">

	$(function(){
		$('#data-tables').dataTable();
	});

	$('.alert-message').alert().delay(3000).slideUp('slow');

</script>


<?php
$this->load->view('admin/foot');
?>

