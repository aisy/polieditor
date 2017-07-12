<?php $this->load->view('partials/mdb-header') ?>
<?php $this->load->view('partials/mhs_navbar') ?>
<body>
	<div class="row">
		<br><br><br>
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<!--Panel-->
			<div class="card">
				<div class="card-header danger-color-dark white-text">
					List Materi
				</div>
				<div class="card-block">
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Materi</th>
										<th>&nbsp;&nbsp;&nbsp;&nbsp;Opsi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Pertemuan 1</td>
										<td>
											<a class="btn btn-sm red">Download</a>
											<a class="btn btn-sm red">Preview</a>
										</td>
									</tr>
									<tr>
										<td>Pertemuan 2</td>
										<td>
											<a class="btn btn-sm red">Download</a>
											<a class="btn btn-sm red">Preview</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</div>
			<!--/.Panel-->
		</div>
		<div class="col-md-5">
			<!--Panel-->
			<div class="card">
				<div class="card-header danger-color-dark white-text">
					List Tugas
				</div>
				<div class="card-block">
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Tugas</th>
										<th>Status</th>
										<th>&nbsp;&nbsp;&nbsp;&nbsp;Opsi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Pertemuan 1</td>
										<td>Submitted</td>
										<td>
											<a class="btn btn-sm red">Re Submit</a>
										</td>
									</tr>
									<tr>
										<td>Pertemuan 2</td>
										<td>Not Submitted</td>
										<td>
											<a class="btn btn-sm red">Submit</a>
										</td>
									</tr>
									<tr>
										<td>Pertemuan 3</td>
										<td>Expired</td>
										<td>
											<a class="btn btn-sm red">Expired to submit</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</div>
			<!--/.Panel-->
		</div>
	</div>
</body>
<?php $this->load->view('partials/mdb-footer') ?>