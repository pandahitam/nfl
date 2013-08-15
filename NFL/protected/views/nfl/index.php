<?php
$sql_title="select * from club where username='$_SESSION[username]'";
$qry_title=mysql_query($sql_title);
$data=mysql_fetch_array($qry_title);

?>
<div id="content-header">
				<h1><?php echo $data['club_name']?></h1>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Klub</a>
				<a href="#" class="current"><?php echo $data['club_name']?></a>
			</div>
			<div class="container-fluid">
            	<div class="row-fluid">
					<div class="span2">
    					<form method="post" action="?r=nfl/DaftarAtlet">
							<button type="submit" class="btn">Daftarkan Atlit</button>
						</form>
    				</div>
    				<div class="span2">
    					<form method="post" action="?r=nfl/DaftarAtlet">
							<button type="submit" class="btn">Submit Klub</button>
						</form>
    				</div>
				</div>
				<p></p>
				<div class="row-fluid">
					<div class="span12 center" style="text-align: center;">					
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Daftar Atlit</h5>
                                
							</div>
                            
							<div class="widget-content">
                            	<table class="table table-bordered table-striped table-hover">
<thead>
										<tr>
											<th>Nama</th>
											<th>Posisi</th>
											<th>Nomor HP</th>
											<th>Tanggal Lahir</th>
                                            <th></th>
										</tr>
									</thead>
									<tbody>
                                    	<?php
										$sql_data="select * from atlet";
										$qry_data=mysql_query($sql_data);
										while($data=mysql_fetch_array($qry_data)){
										?>
                                        	<tr>
                                            	<td><?php echo $data['atlet_name']?></td>
                                                <td><?php echo $data['position']?></td>
                                                <td><?php echo $data['handphone_number']?></td>
                                                <td><?php echo $data['born_date']?></td>
                                                <td><a href="?r=nfl/EditAtlet&&id=<?php echo $data['atlet_id']?>">Ubah</a>&nbsp;<a href="?r=nfl/DeleteAtlet&&id=<?php echo $data['atlet_id']?>">Hapus</a>
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


	
