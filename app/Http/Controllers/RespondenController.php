<?php

namespace App\Http\Controllers;

use App\Enumerator;
use App\Responden;
use App\JwbPartisipasi;
use App\JwbRasaPercaya;
use App\JwbNilaiNorma;
use App\JenisPekerjaanRumahTg;
use App\KarakteristikRumahTangga;
use App\AsetRumahTangga;
use App\Kesehatan;
use App\JawabanKonsumsi;
use App\AsetPendukungUsaha;
use App\HasilTangkapan;
use App\BiayaPerijinan;
use App\BiayaOperasional;
use App\BiayaRansum;
use App\BiayaJasa;
use App\AlatTangkap;
use App\Mesin;
use App\Perahu;
use App\CurahanTenagaKerja;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class RespondenController extends Controller
{

    var $status_responden = [
        1 => 'Pemilik',
        2 => 'Nahkoda',
        3 => 'ABK',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // Remove current session
        $request->session()->forget('id_responden');

        return view('responden.index', [
            'subtitle'  => 'Responden',
            'responden' => Responden::orderBy('id_responden', 'DESC')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responden.form', [
            'subtitle' => 'Tambah Responden',
            'action'   => 'responden/tambah',
            'method'   => 'post',
            'status'   => $this->status_responden
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $responden                   = new Responden;
        $responden->id_id            = $request->input('id_id', null);
        $responden->nama_responden   = $request->input('nama_responden', null);
        $responden->suku             = $request->input('suku', '');
        $responden->kampung          = $request->input('kampung', null);
        $responden->dusun            = $request->input('dusun', null);
        $responden->kelurahan        = $request->input('kelurahan', null);
        $responden->kecamatan        = $request->input('kecamatan', null);
        $responden->kabupaten        = $request->input('kabupaten', null);
        $responden->provinsi         = $request->input('provinsi', null);
        $responden->stat_responden   = $request->input('stat_responden', null);
        $responden->pengalaman_usaha = $request->input('pengalaman_usaha', null);

        $responden->save();

        return redirect('responden');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('responden.edit', [
            'subtitle'  => 'Edit Responden',
            'action'    => 'responden/edit/' . $id,
            'method'    => 'patch',
            'status'    => $this->status_responden,

            // Data
            'responden' => Responden::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $responden                   = Responden::find($id);
        $responden->id_id            = $request->input('id_id', null);
        $responden->nama_responden   = $request->input('nama_responden', null);
        $responden->suku             = $request->input('suku', '');
        $responden->kampung          = $request->input('kampung', null);
        $responden->dusun            = $request->input('dusun', null);
        $responden->kelurahan        = $request->input('kelurahan', null);
        $responden->kecamatan        = $request->input('kecamatan', null);
        $responden->kabupaten        = $request->input('kabupaten', null);
        $responden->provinsi         = $request->input('provinsi', null);
        $responden->stat_responden   = $request->input('stat_responden', null);
        $responden->pengalaman_usaha = $request->input('pengalaman_usaha', null);

        $responden->save();

        return redirect('responden');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Responden::find($id)->delete();
        return redirect('responden');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, $id_responden)
    {
        if (!Responden::where('id_responden', $id_responden)->count())
        {
            return redirect('responden');
        }

        // Save id responden in session
        $request->session()->put('id_responden', $id_responden);
        $kuesioner = [];

        $kuesioner['aspek_modal_sosial'] = [
            [
                'kuesioner' => 'Partisipasi Sosial',
                'is_done'   => (JwbPartisipasi::where('id_responden', $request->session()->get('id_responden'))->where('kateg_partisipasi', 1)->count()),
                'link'      => 'partisipasi-sosial',
            ],
            [
                'kuesioner' => 'Partisipasi Organisasi',
                'is_done'   => (JwbPartisipasi::where('id_responden', $request->session()->get('id_responden'))->where('kateg_partisipasi', 2)->count()),
                'link'      => 'partisipasi-organisasi',
            ],
            [
                'kuesioner' => 'Partisipasi Politik',
                'is_done'   => (JwbPartisipasi::where('id_responden', $request->session()->get('id_responden'))->where('kateg_partisipasi', 3)->count()),
                'link'      => 'partisipasi-politik',
            ],
            [
                'kuesioner' => 'Rasa Percaya Antar Masyarakat',
                'is_done'   => (JwbRasaPercaya::where('id_responden', $request->session()->get('id_responden'))->where('kateg_rasa_percaya', 1)->count()),
                'link'      => 'rasa-percaya-masyarakat',
            ],
            [
                'kuesioner' => 'Rasa Percaya terhadap Organisasi Sosial',
                'is_done'   => (JwbRasaPercaya::where('id_responden', $request->session()->get('id_responden'))->where('kateg_rasa_percaya', 2)->count()),
                'link'      => 'rasa-percaya-organisasi',
            ],
            [
                'kuesioner' => 'Rasa Percaya Politik',
                'is_done'   => (JwbRasaPercaya::where('id_responden', $request->session()->get('id_responden'))->where('kateg_rasa_percaya', 3)->count()),
                'link'      => 'rasa-percaya-politik',
            ],
            [
                'kuesioner' => 'Nilai dan Norma',
                'is_done'   => (JwbNilaiNorma::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'nilai-norma',
            ]
        ];
        $kuesioner['karakteristik_rt'] = [
            [
                'kuesioner' => 'Karakteristik Anggota Rumah Tangga dan Pendapatan',
                'is_done'   => (KarakteristikRumahTangga::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'karakteristik-rumah-tangga',
            ],
            [
                'kuesioner' => 'Jenis Pekerjaan Rumah Tangga',
                'is_done'   => (JenisPekerjaanRumahTg::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'jenis-pekerjaan-rumah-tangga',
            ],
            [
                'kuesioner' => 'Aset Rumah Tangga',
                'is_done'   => (AsetRumahTangga::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'aset-rumah-tangga',
            ],
            [
                'kuesioner' => 'Kesehatan',
                'is_done'   => (Kesehatan::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'kesehatan',
            ],
        ];

        $kuesioner['konsumsi'] = [
            [
                'kuesioner' => 'Pengeluaran Pangan Mingguan Rumah Tangga Perikanan.',
                'is_done'   => (JawabanKonsumsi::where('id_responden', $request->session()->get('id_responden'))->where('kateg_konsum', 1)->count()),
                'link'      => 'konsumsi',
            ],
            [
                'kuesioner' => 'Pengeluaran Non Pangan Bulanan dan Tahunan Rumah Tangga Perikanan',
                'is_done'   => (JawabanKonsumsi::where('id_responden', $request->session()->get('id_responden'))->where('kateg_konsum', 2)->count()),
                'link'      => 'konsumsinon',
            ],
        ];

        $kuesioner['usaha_tenaga_kerja'] = [
            [
                'kuesioner' => 'Perahu',
                'is_done'   => (Perahu::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'perahu',
            ],
            [
                'kuesioner' => 'Alat Tangkap',
                'is_done'   => (AlatTangkap::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'alat-tangkap',
            ],
            [
                'kuesioner' => 'Tenaga Penggerak / Mesin',
                'is_done'   => (Mesin::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'tenaga-penggerak',
            ],
            [
                'kuesioner' => 'Aset Pendukung Usaha',
                'is_done'   => (AsetPendukungUsaha::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'aset-pendukung-usaha',
            ],
            [
                'kuesioner' => 'Biaya Tetap',
                'is_done'   => (BiayaPerijinan::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'biaya-perijinan',
            ],
            [
                'kuesioner' => 'Biaya Variabel Berdasarkan Musim (Biaya Operasional per Trip)',
                'is_done'   => (BiayaOperasional::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'biaya-operasional',
            ],
            // [
            //     'kuesioner' => 'Biaya Variabel Berdasarkan Musim (Biaya Ransum / Perbekalan per Trip)',
            //     'is_done'   => (BiayaRansum::where('id_responden', $request->session()->get('id_responden'))->count()),
            //     'link'      => 'biaya-ransum',
            // ],
            // [
            //     'kuesioner' => 'Biaya Jasa',
            //     'is_done'   => (BiayaJasa::where('id_responden', $request->session()->get('id_responden'))->count()),
            //     'link'      => 'biaya-jasa',
            // ],
            [
                'kuesioner' => 'Penerimaan Usaha Berdasarkan Musim',
                'is_done'   => (HasilTangkapan::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'hasil-tangkapan-ikan',
            ],
            [
                'kuesioner' => 'Ketenagakerjaan',
                'is_done'   => (CurahanTenagaKerja::where('id_responden', $request->session()->get('id_responden'))->count()),
                'link'      => 'ketenagakerjaan',
            ],
        ];
        return view('responden.detail', [
            'subtitle'   => 'Detil Responden',
            'responden'  => Responden::find($id_responden),
            'kuesioner'  => $kuesioner,
            'enumerator' => Enumerator::where('id_responden', $request->session()->get('id_responden'))->get(),
        ]);
    }
}
