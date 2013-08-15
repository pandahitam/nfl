<div id="content-header">
				<h1><?php echo $data['club_name']?></h1>
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
                            	<table>
                                	<tr>
                                    	<th style="text-align:left">Nama Kompetisi</th>
                                        <td>:</td>
                                        <td><input type="text" name="competition_name"/></td>
                                    </tr>
                                    <tr>
                                    	<th style="text-align:left">Lokasi</th>
                                        <td>:</td>
                                        <td><input type="text" name="location"/></td>
                                    </tr>
                                    <tr>
                                    	<th style="text-align:left">Date</th>
                                        <td>:</td>
                                        <td><input type="date" name="date"/></td>
                                    </tr>
                                    <tr>
                                    	<th><button class="btn" type="submit">Simpan</button></th>
                                    </tr>
                                </table>	
							</div>
						</div>
					</div>	
				</div>
			</div>