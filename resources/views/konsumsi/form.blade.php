@extends('layouts.app')

@section('content')
<div class="container" width="1200px">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">I PENGELUARAN PANGAN MINGGUAN RUMAH TANGGA PERIKANAN</div>
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
                                <th></th> 
                                <td><center>Jenis</center></td> 
                                <td><center>Jumlah Pengeluaran (Rp/Minggu)</center></td> 
                            </tr> 
                            <tr class="info"> 
                                <th>1</th> 
                                <td>Padi-padian</td> 
                                <td></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;1.1</th> 
                                <td>Beras</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;1.2</th> 
                                <td>Lainnya</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">2</th> 
                                <td>Umbi-umbian (ubi/sagu/dll)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>  
                            <tr class="info"> 
                                <th scope="row">3</th> 
                                <td>Ikan/udang/cumi/kerang </td> 
                                <td></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;3.1</th> 
                                <td>Segar/basah</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>     
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;3.2</th> 
                                <td>Asin/diawetkan</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>4</th> 
                                <td>Daging (ayam/sapi/dll)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr class="info"> 
                                <th>5</th> 
                                <td>Telur dan susu</td> 
                                <td></td> 
                            </tr>  
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;5.1</th> 
                                <td>Telur ayam/itik/puyuh</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>     
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;5.2</th> 
                                <td>Susu murni, susu kental, susu bubuk, dll.</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>    
                            <tr> 
                                <th>6</th> 
                                <td>Sayur-sayuran</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>  
                            <tr> 
                                <th>7</th> 
                                <td>Kacang-kacangan</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>  
                            <tr> 
                                <th>8</th> 
                                <td>Buah-buahan</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>                                                                                                                                                                                                                                                                                  
                            <tr> 
                                <th>9</th> 
                                <td>Minyak dan lemak</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>    
                            <tr> 
                                <th>10</th> 
                                <td>Bahan Minuman (Teh/Kopi/Gula)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>  
                            <tr> 
                                <th>11</th> 
                                <td>Bumbu-bumbuan (bumbu dapur)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>  
                            <tr class="info"> 
                                <th>12</th> 
                                <td>Konsumsi lainnya </td> 
                                <td></td> 
                            </tr>
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;12.1</th> 
                                <td>Mie instan, mie basah, bihun, makaroni/mie kering</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>     
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;12.2</th> 
                                <td>Lainnya</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr class="info"> 
                                <th>13</th> 
                                <td>Makanan dan minuman jadi</td> 
                                <td></td> 
                            </tr>
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;13.1</th> 
                                <td>Makanan jadi / makanan ringan</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>     
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;13.2</th> 
                                <td>Minuman non alkohol (soda)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;13.3</th> 
                                <td>Minuman mengandung alkohol</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>  
                            <tr class="info"> 
                                <th>14</th> 
                                <td>Tembakau dan sirih </td> 
                                <td></td> 
                            </tr>
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;14.1</th> 
                                <td>Rokok (selain yang untuk melaut)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>     
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;14.2</th> 
                                <td>Lainnya (pinang dll sesuai lokasi)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>                                                                                                                                                                                                                         
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">II PENGELUARAN NON PANGAN BULANAN RUMAH TANGGA PERIKANAN</div>
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
                                <th></th> 
                                <td><center>Jenis</center></td> 
                                <td><center>Jumlah Pengeluaran (Rp/Bulan)</center></td> 
                            </tr> 
                            <tr class="info"> 
                                <th>1</th> 
                                <td>Perumahan dan fasilitas rumah tangga</td> 
                                <td></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;1.1</th> 
                                <td>Sewa, kontrak, perkiraan sewa rumah (milik sendiri, bebas sewa, dinas), dll</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;1.2</th> 
                                <td>Pemeliharaan rumah dan perbaikan ringan</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;1.3</th> 
                                <td>Rekening listrik, air, gas, minyak tanah, kayu bakar, dll.</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;1.4</th> 
                                <td>Rekening telepon rumah, pulsa HP, telepon umum, wartel, benda pos</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr class="info"> 
                                <th>2</th> 
                                <td>Aneka barang dan jasa</td> 
                                <td></td> 
                            </tr>    
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;2.1</th> 
                                <td>Sabun mandi/cuci, kosmetik, perawatan rambut/muka, tissue, dll.</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;2.2</th> 
                                <td>Biaya kesehatan (rumah sakit, puskesmas, dokter praktek, dukun, obat-obatan, dll.)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;2.3</th> 
                                <td>Biaya pendidikan</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;2.4</th> 
                                <td>Transportasi, pengangkutan, bensin, solar, minyak pelumas</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;2.5</th> 
                                <td>Sumbangan(hajatan/tempat ibadah/keluarga besar)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>                                                                                                            
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">III PENGELUARAN NON PANGAN TAHUNAN RUMAH TANGGA PERIKANAN</div>
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
                                <th></th> 
                                <td><center>Jenis</center></td> 
                                <td><center>Jumlah Pengeluaran (Rp/Tahun)</center></td> 
                            </tr> 
                            <tr> 
                                <th>3</th> 
                                <td>Pakaian, alas kaki, dan tutup kepala</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>4</th> 
                                <td>Barang tahan lama</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>5</th> 
                                <td>Pajak, pungutan, dan asuransi</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;5.1</th> 
                                <td>Pajak (PBB, Pajak kendaraan)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;5.2</th> 
                                <td>Pungutan/Retribusi</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr class="info"> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;5.3</th> 
                                <td>Asuransi kesehatan</td> 
                                <td></td> 
                            </tr>     
                            <tr> 
                                <th scope="row">&nbsp;&nbsp;&nbsp;5.4</th> 
                                <td>Lainnya (asuransi jiwa lainnya, asuransi kerugian, PPh, tilang, dll.)</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>6</th> 
                                <td>Keperluan pesta dan upacara/kenduri</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>                                                                                                                                        
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <p><b>Justifikasi</b>: Pertanyaan tentang konsumsi ikan tidak dibreak down menurut jenis ikan karena respondents adalah para nelayan pesisir yang mana konsumsi ikannya mayoritas berdasarkan ketersediaan ikan / musim, dan bukan didasarkan oleh individual preference akan jenis ikan tertentu seperti layaknya di masyarakat kota. </p>
        </div>

        <div class="col-md-10 col-md-offset-1">
          <button type="submit" class="btn btn-primary col-md-offset-11">Simpan</button>
          <br><br><br>
        </div>


    </div>
</div>
@endsection
