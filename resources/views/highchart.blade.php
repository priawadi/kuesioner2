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

    var data_jumlah = <?php echo $jumlah_responden; ?>;
    var data_lokasi = <?php echo $nama_lokasi; ?>;
    $('#ber_lokasi').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Responden Berdasarkan Lokasi'
        },
        xAxis: {
            categories: data_lokasi
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        series: [{
            name: data_lokasi,
            data: data_jumlah
        }, 
        ]
    });

});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div id="ber_suku"></div>
                </div>
                <div class="panel-body">
                    <div id="ber_lokasi"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection