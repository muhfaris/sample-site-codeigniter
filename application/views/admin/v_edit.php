<!-- Inti -->
<div id="page-wrapper">
<div id="content">
   <div class="row">
       <div class="col-lg-12">
           <ol class="breadcrumb">
               <li class="active">
                   <i class="fa  fa-list-alt"></i> Posting // Edit Posting
               </li>
            </ol>
       </div>
   </div>
	<div class="error">
	<?php if($this->session->flashdata('post_error'))
		echo $this->session->flashdata('post_error');
	?></div>
	<?=form_open('admin/edit_post');?>
	    <span class='ketjudul'>
	    		<input name='ID' id='ID' type="hidden" value='<?php echo $post->ID;?>'>
				<input name='judul' type='text' id='judul' size='70' placeholder='Judul Posting Baru' value='<?php echo $post->post_title;?>'>
			</span>
			<span>
				<textarea id='mytextarea' name='isipost'> <?php echo $post->post_content;?></textarea>
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