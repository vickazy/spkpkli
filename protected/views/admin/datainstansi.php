  <div id="page-wrapper">        <div class="row">          <div class="col-lg-12">			<ol class="breadcrumb-inp">              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>            </ol>          </div>        </div><!-- /.row --><div id="page-wrapper">     <div class="row">          <div class="col-lg-12">            <h2>Data Instansi Tempat PKLI</h2>				<?php echo Yii::app()->user->getFlash('status'); ?>				<div class="table-responsive">				<form role="form" method="post">				  <table class="table table-bordered table-hover tablesorter">					<thead>					  <tr>						<th>ID</th>						<th>Username</th>						<th>Level</th>						<th>Action</th>					  </tr>					</thead>					<tbody>						 <?php foreach ($user as $list) { ?>						<tr>						<td><?php echo $list->id_user; ?></td>						<td><?php echo $list->username; ?></td>						<td><?php echo $list->Level; ?></td>						<td>							<div class="checkbox">							  <label>								<input type="checkbox" name="status[<?php echo $list->id_user; ?>]" <?php if($list->status=='1'){ ?>checked="checked"<?php } ?>>								Aktif							  </label>||							  <a href="" class="detail-instansi linktabel" data-toggle="modal" data-target="#data-instansi" detail-instansi="<?php echo $list->id_user; ?>" > Detail</a>							</div>						</td>					  </tr>					  <?php } ?>					</tbody>				  </table>				  <input class="pull-right btn btn-primary pull-right" type="submit" name="update"/>				 </form>				</div>				<div class="modal fade" id="data-instansi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">                  <div class="modal-dialog2">                    <div class="modal-content">                      <div class="modal-header">                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                        <h4 class="modal-title" id="myModalLabel"><b>Detail Instansi</b></h4>                      </div>                      <div class="modal-body">                      <table class="table table-bordered table-hover table-striped tablesorter">                    <tr><td>Nama </td><td id="nama-instansi"></td></tr>                    <tr><td>Jenis Instansi</td><td id="jenis-instansi"></td></tr>                    <tr><td>Alamat</td><td id="alamat-instansi"></td></tr>                    <tr><td>Nomor Telepon</td><td id="telepon-instansi"></td></tr>                    <tr><td>E-mail</td><td id="email-instansi"></td></tr>                </table>                      </div>                      <div class="modal-footer">                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>                      </div>                    </div><!-- /.modal-content -->                  </div><!-- /.modal-dialog -->                </div><!-- /.modal -->          </div>          </div>          </div>        </div><!-- /.row -->