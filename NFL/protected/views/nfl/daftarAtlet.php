
<?php
	$sql="select * from atlet where atlet_id='$_GET[id]'";
	$qry=mysql_query($sql);
	$data=mysql_fetch_array($qry);
?>

<div id="content-header">
				<h1>Klub Saya</h1>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Klub</a>
				<a href="index.php" class="current">Klub Saya</a>
			</div>
			<div class="container-fluid">
            	
				<p></p>
				<div class="row-fluid">
					<div class="span12 center" style="text-align: center;">					
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Bandung FC</h5>
                                
							</div>
                            
							<div class="widget-content">
                            	<form method="post" action="?r=nfl/AddAtlet">
    	<table>
        	<tr>
            	<Th style="text-align:left">Nama Atlet</Th>
                <td>:</td>
                <td><input type="text" name="atlet_name"/></td>
            </tr>
            <Tr>
            	<th style="text-align:left">Posisi</th>
                <Td>:</Td>
                <Td><input type="text" name="position"/></Td>
            </Tr>
            <tr>
            	<th style="text-align:left">Nomor Handphone</th>
                <Td>:</Td>
                <td><input type="text" name="handphone_number"/></td>
            </tr>
            <tr>
            	<th style="text-align:left">Tanggal Lahir</th>
                <td>:</td>
                <td><input type="date" name="born_date"/></td>
            </tr>
            <tr>
            	<th style="text-align:left"><button type="submit" class="btn">Simpan</button></th>
                <td></td>
                <td></td>
            </tr>
        </table>
</form>
							</div>
						</div>
					</div>	
				</div>
			</div>


	
