<!-- Inti -->
<div id="page-wrapper">
<div id="content">
   <div class="row">
       <div class="col-lg-12">
           <ol class="breadcrumb">
               <li class="active">
                   <i class="fa  fa-list-alt"></i> Posting // Tambah Posting
               </li>
            </ol>
       </div>
   </div>
	<div class="error">
	<?php if($this->session->flashdata('post_error'))
		echo $this->session->flashdata('post_error');
	?></div>
	<?=form_open('admin/insert_post');?>
		    <span class='ketjudul'>
				<input name='judul' type='text' id='judul' size='70' placeholder='Judul Posting Baru'>
			</span>
			<span>
			<textarea id='mytextarea' name='isipost'></textarea>
		    </span>
		    <span class='status_p'>
		    	<label for="status_b">Status</label>
		    	<select name="status_b" id="status_b">
		    		<option value="Publish">Publish</option>
		    		<option value="Draft">Simpan</option>
		    	</select>
		    </span>
		    <span class='tombol'>
		    	<input type="submit" id="submit" name="submit" value="Submit">
		    <input type="reset" id="submit" name="submit" value="Reset">
		    </span>
		 <?=form_close();?>
</div>

       	<div class="clearfix"></div>
   </div>
<!-- End bagian Body -->