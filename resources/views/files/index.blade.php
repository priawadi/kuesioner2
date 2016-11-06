@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of Makro Files</div>
                    <div class="panel-body">
                        <a class="btn btn-success btn-sm" href="{{ route('upload-files.create') }}"> Upload New File</a>
                        <br><br>                 
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Your File</th>
                            </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->details }}</td>
                            <td>
                            <a href='{{ asset("image/$product->product_image") }}'>{{ $product->product_image }}</a>
                            </td>
                        </tr>
                        @endforeach
                        </table>    
                    {!! $products->render() !!}
                    </div>
            </div>
        </div>
    </div>
</div>    
@endsection