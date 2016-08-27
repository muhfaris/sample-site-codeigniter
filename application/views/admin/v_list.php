<!-- Inti -->
<div id="page-wrapper">
    <div class="col_3">
    <div class="error">
		<?php 
            if($this->session->flashdata('post_success'))
			     echo $this->session->flashdata('post_success');
			if($this->session->flashdata('e_posts'))
			     echo $this->session->flashdata('e_posts');
            if($this->session->flashdata('Del_success'))
                 echo $this->session->flashdata('Del_success');
		?>
    </div>
       	<div class="clearfix"></div>
    </div>
              <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa  fa-list-alt"></i> Posting // Semua Posting
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- Judul Post -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-lg-4">Judul</th>
                            <th>Author</th>
                            <th>Terbit</th>
                            <th>Keterangan</th>
                            <th>Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($allpost)):foreach ($allpost as $baris):?>
                        <tr>
                          <td class="col-lg-4"> 
                           <?php echo anchor("admin/edit/$baris->ID",$baris->post_title);?></td>
                            <td><?php echo $baris->post_author; ?></td>
                            <td><?php echo @date('d-m-Y', @strtotime($baris->post_date));?></td>
                            <td><?php echo $baris->post_status;?></td>
                            <td><?=anchor('admin/update/'.$baris->ID, 'Edit', 'class="but_oper"');?><?=anchor('admin/delete/'.$baris->ID, 'Hapus', 'class="but_oper"');?></td>
                        </tr>
                        <?php endforeach; ?>
                            <?php else: ?>
                                <h2>Tidak Ada Data !!</h2>
                            <?php endif; ?>
                    </tbody>
                </table>
                 <!-- End Judul Post -->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
<!-- End bagian Body -->