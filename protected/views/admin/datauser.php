  <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
			<ol class="breadcrumb-inp">
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
          </div>
        </div><!-- /.row -->
<div id="page-wrapper">
     <div class="row">
          <div class="col-lg-12">
            <h2>Data User</h2>
				<button type="button" class="btn btn-default"><i class="fa fa-plus"></i>Tambah User</button>
				<button type="button" class="btn btn-primary pull-right" onclik="#myModal3" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-import"></span> Import Data User</button>
				<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Import Data User </h4>
                      </div>
                      <div class="modal-body">
						   <form role="form">
							  <div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">tipe file sql.</p>
							  </div>
							  <button type="submit" class="btn btn-default">Submit</button>
							</form>
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
				<?php echo Yii::app()->user->getFlash('status'); ?>
				<div class="table-responsive">
				<form role="form" method="post">
				  <table class="table table-bordered table-hover tablesorter">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Username</th>
						<th>Level</th>
						<th>Status</th>
					  </tr>
					</thead>
					<tbody>
					 <?php foreach ($user as $list) { ?>
						<tr>
						<td><?php echo $list->id_user; ?></td>
						<td><?php echo $list->username; ?></td>
						<td><?php echo $list->Level; ?></td>
						<td>
							<div class="checkbox">
							  <label>
								<input type="checkbox" name="status[<?php echo $list->id_user; ?>]" <?php if($list->status=='1'){ ?>checked="checked"<?php } ?>>
								Aktif
							  </label>
							</div>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
				  <input class="pull-right" type="submit" name="update"/>
				</form> 
				</div>
          </div>
          </div>
        </div>
    </div><!-- /.row -->