
<div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12">
     <div class="section-title-col ">
		      <div style="text-align: left;padding-top: 50px;padding-bottom: : 50px;padding-left: 10px;padding-right: 10px;">
		  
		<div class="panel panel-default">
		  <div class="panel-body">
		  
		  <fieldset>
		  <legend>UBAH MENU</legend>
		  <?php if (isset($_SESSION['pesan'])) { ?>
		        <div class="alert alert-block alert-info" role="alert">
		         
		          <?php echo $this->session->flashdata('pesan'); ?>
		        </div>
		      <?php } ?>
		      <?php echo form_open_multipart('menu_utama/update/'.$dt->id_menu_utama, array()); ?>
		      <div class="form-group">
		        <label for="nama_menu">Nama Menu</label>
		        <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Nama Menu" value="<?=$dt->nama_menu_utama?>">
		      </div> 
		      <div class="form-group id_100">
		      	<label for="type">Type</label>
		      	<select class="form-control" id="type" name="type">
		      		<!-- <option value="1">Dropdown</option>
		      		<option value="0">URL</option> -->
		      		<?php
		      		if ($dt->type=='0') {
		      			?>
		      			<option value="1">Dropdown</option>
			      		<option value="0" selected>URL</option>
			      		<?php
		      		}else{
		      		?>
		      			<option value="1" selected>Dropdown</option>
			      		<option value="0">URL</option>
		      		<?php }?>
		      	</select>
		      </div>
		      <div class="form-group">
		        <label for="url">URL</label>
		        <input type="text" class="form-control" id="url" name="url" placeholder="URL Menu" value="<?=$dt->url?>">
		      </div>
		      
		      <button type="submit" class="btn btn-default">SIMPAN</button>
		    </form>
		    
		  
		</fieldset>
		  </div>
		</div>
		</div>
     </div>
 </div>
</div>
</div>


