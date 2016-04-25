@extends('layouts.app')
<link href="{!! asset('bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $subtitle }}</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body">
                    {{ Form::open(array('url' => $action)) }}
                        <table class="table">
                            <tr>
                                <td>Nama Enumerator</td>
                                <td>
                                    {{
                                        Form::text(
                                            'nama_enumerator', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Nama Enumerator'
                                            ]
                                        )
                                    }}   
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Wawancara</td>
                                <td>
                                    {{
                                        Form::text(
                                            'tanggal_wawancara', 
                                            '', 
                                            [
                                                'class'       => 'form-control datepicker',
                                                'placeholder' => 'Tanggal Wawancara',
                                            ]
                                        )
                                    }}   
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Editing</td>
                                <td>
                                    {{
                                        Form::text(
                                            'tanggal_editing', 
                                            '', 
                                            [
                                                'class'       => 'form-control datepicker',
                                                'placeholder' => 'Tanggal Editing'
                                            ]
                                        )
                                    }}   
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Pemvalidasi</td>
                                <td>
                                    {{
                                        Form::text(
                                            'nama_pemvalidasi', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Nama Pemvalidasi'
                                            ]
                                        )
                                    }}   
                                </td>
                            </tr>
                        </table>
                        <a href="#" class="btn btn-primary pull-left">Kembali</a>
                        <button type="submit" class="btn btn-primary pull-right">Selanjutnya</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('.datepicker').datetimepicker({
            format: 'DD-MM-YYYY'
        });
    });
</script>
@endsection
