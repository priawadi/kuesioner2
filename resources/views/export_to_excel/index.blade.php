@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

@section('content')
<script type="text/javascript">
    function show_modal(url, kuesioner)
    {
        form_delete.action = url;
        $('#delete-info').text(kuesioner);
        $('#modal-delete').modal('show');

    }
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$subtitle}}</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body">
                    <table class="table table-bordered" id="responden-table">
                        <thead> 
                            <tr> 
                                <th>File</th> 
                                <th>Aksi</th> 
                            </tr> 
                        </thead> 
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['filename']}}</td>
                                    <td><a href="{{url('export/' . $item['page'])}}" class="btn btn-primary">Download</a></td>
                                </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
