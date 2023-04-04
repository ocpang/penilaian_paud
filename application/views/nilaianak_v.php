<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penilaian PAUD Flamboyan 1</title>

    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/paud.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Fungsi Javascript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/fusioncharts/fusioncharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/fusioncharts/themes/fusioncharts.theme.zune.js"></script>

	<script type="text/javascript">
        FusionCharts.ready(function(){
            var chart = new FusionCharts({
                type:'pie2d', // column2d, column3d, bar2d, bar3d, pie2d, pie3d, doughnut2d, doughnut3d, line, area2d
                renderAt : 'chartContainer',
                width : '340',
                height : '300',
                dataFormat : 'json',
                dataSource : {
                        'chart' : {
                            'caption' : 'Persentase Nilai',
                            'subCaption' : 'Berdasarkan Nilai Agama',	
                            'xAxisName'	: 'Nilai',
                            'yAxisName' : 'Jumlah',
                            'theme' : 'zune'
                        },
                        'data' : [
                            <?php
                                $query = $this->nilai_m->viewchartagama($this->session->userdata('noinduk'));
								
                                $i = 0;
                                foreach($query->result() as $row) :
                                    if($i++)
                                        echo ",";
                            ?>		
                                    {'label':'<?php echo $row->nilai; ?>', 'value':'<?php echo $row->total; ?>'}
                            <?php
                                endforeach;
                            ?>			
                                 ]
                    }
            });
            chart.render('chartContainerAgama');
        });
    </script>
	<script type="text/javascript">
        FusionCharts.ready(function(){
            var chart = new FusionCharts({
                type:'pie2d', // column2d, column3d, bar2d, bar3d, pie2d, pie3d, doughnut2d, doughnut3d, line, area2d
                renderAt : 'chartContainer',
                width : '340',
                height : '300',
                dataFormat : 'json',
                dataSource : {
                        'chart' : {
                            'caption' : 'Persentase Nilai',
                            'subCaption' : 'Berdasarkan Nilai Fisik Motorik',	
                            'xAxisName'	: 'Nilai',
                            'yAxisName' : 'Jumlah',
                            'theme' : 'zune'
                        },
                        'data' : [
                            <?php
                                $query = $this->nilai_m->viewchartfisik($this->session->userdata('noinduk'));
								
                                $i = 0;
                                foreach($query->result() as $row) :
                                    if($i++)
                                        echo ",";
                            ?>		
                                    {'label':'<?php echo $row->nilai; ?>', 'value':'<?php echo $row->total; ?>'}
                            <?php
                                endforeach;
                            ?>			
                                 ]
                    }
            });
            chart.render('chartContainerFisik');
        });
    </script>
<script type="text/javascript">
        FusionCharts.ready(function(){
            var chart = new FusionCharts({
                type:'pie2d', // column2d, column3d, bar2d, bar3d, pie2d, pie3d, doughnut2d, doughnut3d, line, area2d
                renderAt : 'chartContainer',
                width : '340',
                height : '300',
                dataFormat : 'json',
                dataSource : {
                        'chart' : {
                            'caption' : 'Persentase Nilai',
                            'subCaption' : 'Berdasarkan Nilai Konsep Bentuk dan Bentuk',	
                            'xAxisName'	: 'Nilai',
                            'yAxisName' : 'Jumlah',
                            'theme' : 'zune'
                        },
                        'data' : [
                            <?php
                                $query = $this->nilai_m->viewchartkonsep($this->session->userdata('noinduk'));
								
                                $i = 0;
                                foreach($query->result() as $row) :
                                    if($i++)
                                        echo ",";
                            ?>		
                                    {'label':'<?php echo $row->nilai; ?>', 'value':'<?php echo $row->total; ?>'}
                            <?php
                                endforeach;
                            ?>			
                                 ]
                    }
            });
            chart.render('chartContainerKonsep');
        });
    </script>
	<script type="text/javascript">
        FusionCharts.ready(function(){
            var chart = new FusionCharts({
                type:'pie2d', // column2d, column3d, bar2d, bar3d, pie2d, pie3d, doughnut2d, doughnut3d, line, area2d
                renderAt : 'chartContainer',
                width : '340',
                height : '300',
                dataFormat : 'json',
                dataSource : {
                        'chart' : {
                            'caption' : 'Persentase Nilai',
                            'subCaption' : 'Berdasarkan Nilai Pengetahuan Umum',	
                            'xAxisName'	: 'Nilai',
                            'yAxisName' : 'Jumlah',
                            'theme' : 'zune'
                        },
                        'data' : [
                            <?php
                                $query = $this->nilai_m->viewchartpengetahuan($this->session->userdata('noinduk'));
								
                                $i = 0;
                                foreach($query->result() as $row) :
                                    if($i++)
                                        echo ",";
                            ?>		
                                    {'label':'<?php echo $row->nilai; ?>', 'value':'<?php echo $row->total; ?>'}
                            <?php
                                endforeach;
                            ?>			
                                 ]
                    }
            });
            chart.render('chartContainerPengetahuan');
        });
    </script>
	<script type="text/javascript">
        FusionCharts.ready(function(){
            var chart = new FusionCharts({
                type:'pie2d', // column2d, column3d, bar2d, bar3d, pie2d, pie3d, doughnut2d, doughnut3d, line, area2d
                renderAt : 'chartContainer',
                width : '340',
                height : '300',
                dataFormat : 'json',
                dataSource : {
                        'chart' : {
                            'caption' : 'Persentase Nilai',
                            'subCaption' : 'Berdasarkan Nilai Bahasa',	
                            'xAxisName'	: 'Nilai',
                            'yAxisName' : 'Jumlah',
                            'theme' : 'zune'
                        },
                        'data' : [
                            <?php
                                $query = $this->nilai_m->viewchartbahasa($this->session->userdata('noinduk'));
								
                                $i = 0;
                                foreach($query->result() as $row) :
                                    if($i++)
                                        echo ",";
                            ?>		
                                    {'label':'<?php echo $row->nilai; ?>', 'value':'<?php echo $row->total; ?>'}
                            <?php
                                endforeach;
                            ?>			
                                 ]
                    }
            });
            chart.render('chartContainerBahasa');
        });
    </script>
	<script type="text/javascript">
        FusionCharts.ready(function(){
            var chart = new FusionCharts({
                type:'pie2d', // column2d, column3d, bar2d, bar3d, pie2d, pie3d, doughnut2d, doughnut3d, line, area2d
                renderAt : 'chartContainer',
                width : '340',
                height : '300',
                dataFormat : 'json',
                dataSource : {
                        'chart' : {
                            'caption' : 'Persentase Nilai',
                            'subCaption' : 'Berdasarkan Nilai Sosial Emosional',	
                            'xAxisName'	: 'Nilai',
                            'yAxisName' : 'Jumlah',
                            'theme' : 'zune'
                        },
                        'data' : [
                            <?php
                                $query = $this->nilai_m->viewchartsosial($this->session->userdata('noinduk'));
								
                                $i = 0;
                                foreach($query->result() as $row) :
                                    if($i++)
                                        echo ",";
                            ?>		
                                    {'label':'<?php echo $row->nilai; ?>', 'value':'<?php echo $row->total; ?>'}
                            <?php
                                endforeach;
                            ?>			
                                 ]
                    }
            });
            chart.render('chartContainerSosial');
        });
    </script>	
	</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PAUD Flamboyan 1</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>">Beranda</a>
                    </li>
                    <?php
					if($this->session->userdata('nama') <> ''){
					?>
                    <li><a href="<?php echo base_url(); ?>beranda/logout">Logout</a></li>
                    <?php
					}
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<div class="container">
        <div class="row" style="margin-top:100px">
            <div class="col-md-12">
            	<h1 class="text-center">Daftar Nilai <?php echo $this->session->userdata('nama'); ?></h1>
				
                <div class="row">
					<div class="col-md-8">
	                    <div class="panel panel-info">    	
                            <div class="panel-heading text-center">
                                <h4>Daftar Nilai Agama dan Moral</h4>
                            </div>
                            <table class="table table-hover table-striped table-condensed" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>                    
                                        <th>Nama Penilaian</th>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>                
                                <?PHP
                                    $query = $this->nilai_m->viewnilaiagama($this->session->userdata('noinduk'));
                                    $no = 1;
                                    foreach($query->result() as $row) :
                                ?>
                                
                                    <tr>
                                        <td><?PHP echo $no++; ?></td>
                                        <td><?PHP echo $row->penilaian; ?></td>
                                        <td><?PHP echo $row->nilai; ?></td>
                                        <td><?PHP echo $row->keterangan; ?></td>								
                                    </tr>
                                <?PHP
                                    endforeach;
                                ?>
                                </tbody>                
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-info">    	
                            <div class="panel-heading text-center">
                                <h4>Grafik</h4>
                            </div>
                            <div class="container">
                                <div id="chartContainerAgama">
                                
                                </div>
                            </div>
                                 
                        </div>
                    </div>
                </div>
                
			</div>
		</div>
    </div>
 
<!--<p>&nbsp;</p>-->
	<div class="container">
        <div class="row">
			<div class="col-md-8">
	          	 <div class="panel panel-info">    	
                     <div class="panel-heading text-center">
						<h4>Daftar Nilai Fisik Motorik</h4>
					</div>
					<table class="table table-hover table-striped table-condensed" id="table">
						<thead>
							<tr>
								<th>No</th>                    
								<th>Nama Penilaian</th>
								<th>Nilai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>                
						<?PHP
							$query = $this->nilai_m->viewnilaifisik($this->session->userdata('noinduk'));
							$no = 1;
							foreach($query->result() as $row) :
						?>
						
							<tr>
								<td><?PHP echo $no++; ?></td>
								<td><?PHP echo $row->penilaian; ?></td>
								<td><?PHP echo $row->nilai; ?></td>
								<td><?PHP echo $row->keterangan; ?></td>								
							</tr>
						<?PHP
							endforeach;
						?>
						</tbody>                
					</table>
				 </div>
			</div>	
            <div class="col-md-4">
                <div class="panel panel-info">    	
                    <div class="panel-heading text-center">
                        <h4>Grafik</h4>
                    </div>
                    <div class="container">
                        <div id="chartContainerFisik">
                        
                        </div>
                    </div>                         
                </div>
            </div>       
		</div>
    </div>
    
	<div class="container">
        <div class="row">
			<div class="col-md-8">
	            <div class="panel panel-info">                           
                	 <div class="panel-heading text-center">
						<h4>Daftar Nilai Konsep Bilangan dan Bentuk</h4>
					</div>
					<table class="table table-hover table-striped table-condensed" id="table">
						<thead>
							<tr>
								<th>No</th>                    
								<th>Nama Penilaian</th>
								<th>Nilai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>                
						<?PHP
							$query = $this->nilai_m->viewnilaikonsep($this->session->userdata('noinduk'));
							$no = 1;
							foreach($query->result() as $row) :
						?>
						
							<tr>
								<td><?PHP echo $no++; ?></td>
								<td><?PHP echo $row->penilaian; ?></td>
								<td><?PHP echo $row->nilai; ?></td>
								<td><?PHP echo $row->keterangan; ?></td>								
							</tr>
						<?PHP
							endforeach;
						?>
						</tbody>                
					</table>
				</div>
			</div>
            <div class="col-md-4">
                <div class="panel panel-info">    	
                    <div class="panel-heading text-center">
                        <h4>Grafik</h4>
                    </div>
                    <div class="container">
                        <div id="chartContainerKonsep">
                        
                        </div>
                    </div>                         
                </div>
            </div>       
            
		</div>
    </div>
	<div class="container">
        <div class="row">
			<div class="col-md-8">
	             <div class="panel panel-info">    	
                      <div class="panel-heading text-center">
						<h4>Daftar Nilai Pengetahuan Umum</h4>
					</div>
					<table class="table table-hover table-striped table-condensed" id="table">
						<thead>
							<tr>
								<th>No</th>                    
								<th>Nama Penilaian</th>
								<th>Nilai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>                
						<?PHP
							$query = $this->nilai_m->viewnilaipengetahuan($this->session->userdata('noinduk'));
							$no = 1;
							foreach($query->result() as $row) :
						?>
						
							<tr>
								<td><?PHP echo $no++; ?></td>
								<td><?PHP echo $row->penilaian; ?></td>
								<td><?PHP echo $row->nilai; ?></td>
								<td><?PHP echo $row->keterangan; ?></td>								
							</tr>
						<?PHP
							endforeach;
						?>
						</tbody>                
					</table>
				</div>
			</div>
            <div class="col-md-4">
                <div class="panel panel-info">    	
                    <div class="panel-heading text-center">
                        <h4>Grafik</h4>
                    </div>
                    <div class="container">
                        <div id="chartContainerPengetahuan">
                        
                        </div>
                    </div>                         
                </div>
            </div>       
            
		</div>
    </div>
	<div class="container">
        <div class="row">
			<div class="col-md-8">
	        	<div class="panel panel-info">    	
                	<div class="panel-heading text-center">
						<h4>Daftar Nilai Bahasa</h4>
					</div>
					<table class="table table-hover table-striped table-condensed" id="table">
						<thead>
							<tr>
								<th>No</th>                    
								<th>Nama Penilaian</th>
								<th>Nilai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>                
						<?PHP
							$query = $this->nilai_m->viewnilaibahasa($this->session->userdata('noinduk'));
							$no = 1;
							foreach($query->result() as $row) :
						?>
						
							<tr>
								<td><?PHP echo $no++; ?></td>
								<td><?PHP echo $row->penilaian; ?></td>
								<td><?PHP echo $row->nilai; ?></td>
								<td><?PHP echo $row->keterangan; ?></td>								
							</tr>
						<?PHP
							endforeach;
						?>
						</tbody>                
					</table>
				</div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">    	
                    <div class="panel-heading text-center">
                        <h4>Grafik</h4>
                    </div>
                    <div class="container">
                        <div id="chartContainerBahasa">
                        
                        </div>
                    </div>                         
                </div>
            </div>       
			
		</div>
    </div>
	<div class="container">
        <div class="row">
			<div class="col-md-8">
	        	<div class="panel panel-info">    	
                	<div class="panel-heading text-center">
						<h4>Daftar Nilai Sosial Emosional</h4>
					</div>
					<table class="table table-hover table-striped table-condensed" id="table">
						<thead>
							<tr>
								<th>No</th>                    
								<th>Nama Penilaian</th>
								<th>Nilai</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>                
						<?PHP
							$query = $this->nilai_m->viewnilaisosial($this->session->userdata('noinduk'));
							$no = 1;
							foreach($query->result() as $row) :
						?>
						
							<tr>
								<td><?PHP echo $no++; ?></td>
								<td><?PHP echo $row->penilaian; ?></td>
								<td><?PHP echo $row->nilai; ?></td>
								<td><?PHP echo $row->keterangan; ?></td>								
							</tr>
						<?PHP
							endforeach;
						?>
						</tbody>                
					</table>
				</div>
			</div>
            <div class="col-md-4">
                <div class="panel panel-info">    	
                    <div class="panel-heading text-center">
                        <h4>Grafik</h4>
                    </div>
                    <div class="container">
                        <div id="chartContainerSosial">
                        
                        </div>
                    </div>                         
                </div>
            </div>       
            
		</div>
    </div>
<?php
	$this->load->view("footer_v.php");
?>    