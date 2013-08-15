<div id="content-header">
				<h1>Daftar Klub	</h1>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Klub</a>
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
								<h5>Daftar Klub</h5>
                                
							</div>
                            
							<div class="widget-content">
                            	<table class="table table-bordered table-striped table-hover">
<thead>
										<tr>
											<th>Nama</th>
											<th>Posisi</th>
											<th>Nomor HP</th>
                                            <th>Tanggal Lahir</th>
										</tr>
									</thead>
									<tbody>
                                    	<?php
										$sql_data="select * from atlet where club_id='$_GET[id]'";
										$qry_data=mysql_query($sql_data);
										while($data=mysql_fetch_array($qry_data)){
										?>
                                        	<tr>
                                            	<td><?php echo $data['atlet_name']?></td>
                                                <td><?php echo $data['potition']?></td>
                                                <td><?php echo $data['handphone_number']?></td>
                                                <td><?php echo $data['born_date']?>&nbsp;<?php echo $data['contact_person_phone']?></td>
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