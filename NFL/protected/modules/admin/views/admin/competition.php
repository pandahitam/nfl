<div id="content-header">
				<h1>Daftar Kompetisi</h1>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Kompetisi</a>
				<a href="#" class="current"><?php echo $data['club_name']?></a>
			</div>
			
				<p></p>
				<div class="row-fluid">
					<div class="span12 center" style="text-align: center;">					
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Daftar Kompetisi</h5>
                                
							</div>
                            
							<div class="widget-content">
                            	<table class="table table-bordered table-striped table-hover">
<thead>
										<tr>
											<th>Nama Kompetisi</th>
											<th>Lokasi</th>
											<th>Tanggal</th>
                                            <th></th>
										</tr>
									</thead>
									<tbody>
                                    	<?php
										$sql_data="select * from competition";
										$qry_data=mysql_query($sql_data);
										while($data=mysql_fetch_array($qry_data)){
										?>
                                        	<tr>
                                            	<td><?php echo $data['competition_name']?></td>
                                                <td><?php echo $data['location']?></td>
                                                <td><?php echo $data['date']?></td>
                                                <td><a href="?r=admin/competition/update&id=<?php echo $data['competition_id']?>">Ubah</a>&nbsp;<a href="">Hapus</a>
                                            </tr>
                                        <?php
										}
										?>
									</tbody>
								</table>				
							</div>
						</div>
					</div>	
				</div>
			</div>