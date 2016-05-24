@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{ Form::open(array('url' => $action, 'method' => 'patch')) }}
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $subtitle }}</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
                <div class="panel-body">
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="warning"> 
                                <th><center>NO</center></th> 
                                <th><center>RINCIAN</center></th> 
                                <th><center>KODE</center></th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            <tr> 
                                <th>((1201.1))</th>
                                <td><center>Jenis</center></td> 
                                <td><center>Jumlah Pengeluaran (Rp/Minggu)</center></td> 
                            </tr>
                            @foreach ($konsumsi as $id_konsumsi => $item) 
                            @if ($item -> id_kateg_konsum == 1)
                            @if ($item -> id_parentkonsum)
                            <tr class="info"> 
                            @endif 
                                <th> {{$item -> nomor_sub}} </th> 
                                <td> {{$item -> rincian}}
                                </td> 
                                <td>
                                    @if ($item -> id_parentkonsum)
                                    {{
                                        Form::text(
                                            'konsumsi[jawaban][' . $jawaban_konsumsi[$item->id_konsumsi]['id_jawaban_konsumsi'] . ']',
                                            $jawaban_konsumsi[$item -> id_konsumsi]['jawaban'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}                                    
                                    @endif
                                </td> 
                            </tr> 
                            @endif
                            @endforeach                                                                                                                                                                                                                   
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <p><b>Justifikasi</b>: Pertanyaan tentang konsumsi ikan tidak dibreak down menurut jenis ikan karena respondents adalah para nelayan pesisir yang mana konsumsi ikannya mayoritas berdasarkan ketersediaan ikan / musim, dan bukan didasarkan oleh individual preference akan jenis ikan tertentu seperti layaknya di masyarakat kota. </p>
        </div>


    @include('components.form.prev_next_btn')
{!! Form::close() !!}
    </div>
</div>
@endsection
