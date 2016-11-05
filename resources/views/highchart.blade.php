@extends('layouts.app')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    $(function () { 
    var data_viewer = <?php echo $value; ?>;
    var data_suku = <?php echo $suku; ?>;
    $('#ber_suku').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Responden Berdasarkan Suku'
        },
        xAxis: {
            categories: data_suku
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        series: [{
            name: 'Jumlah Responden',
            data: data_viewer
        }, 
        ]
    });

    var data_jumlah = <?php echo "[" . $array . "]" ?>;
    $('#ber_lokasi').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Responden Berdasarkan Lokasi'
        },
        xAxis: {
           labels: {
               enabled: false
           },
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },       
        tooltip:{
            headerFormat: '',
        },        
        series: data_jumlah
    });

});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br>

                <div class="list-group">
                  <a href="#" class="list-group-item active col-md-4">
                    <h4 class="list-group-item-heading"><center>Total Anggota Keluarga Seluruh Responden</center></h4>
                    <p class="list-group-item-text"><center><h1><?php echo $total_keluarga; ?></h1></center></p>
                  </a>
                  <a href="#" class="list-group-item active col-md-4" style="background-color: #d9534f;color:white;">
                    <h4 class="list-group-item-heading"><center>Total Anggota Keluarga Responden Berjenis Kelamin Pria</center></h4>
                    <p class="list-group-item-text"><center><h1><?php echo $total_keluarga_pria; ?></h1></center></p>
                  </a> 
                  <a href="#" class="list-group-item active col-md-4">
                    <h4 class="list-group-item-heading"><center>Total Anggota Keluarga Responden Berjenis Kelamin Wanita</center></h4>
                    <p class="list-group-item-text"><center><h1><?php echo $total_keluarga_wanita; ?></h1></center></p>
                  </a>                                                                       
                </div>

                <div class="panel-body">
                    <div id="ber_suku"></div>
                </div>

                <div class="list-group">
                  <a href="#" class="list-group-item active col-md-4">
                    <h4 class="list-group-item-heading"><center>Rata-Rata Umur Anggota Keluarga Responden</center></h4>
                    <p class="list-group-item-text"><center><h1><?php echo $umur_rataan; ?></h1></center></p>
                  </a>
                  <a href="#" class="list-group-item active col-md-4" style="background-color: #d9534f;color:white;">
                    <h4 class="list-group-item-heading"><center>Total Seluruh Responden Panelkanas</center></h4>
                    <p class="list-group-item-text"><center><h1><?php echo $total_responden; ?></h1></center></p>
                  </a>                                                                        
                </div>
                  <a href="#" class="list-group-item active col-md-4">
                    <h4 class="list-group-item-heading"><center>Rata-Rata Jumlah Anggota Keluarga Responden</center></h4>
                    <p class="list-group-item-text"><center><h1><?php echo $rataan_keluarga; ?></h1></center></p>
                  </a>
                <div class="panel-body">
                    <div id="ber_lokasi"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection