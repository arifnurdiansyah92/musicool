<?php 
use Andev\Musicool\Models\Wilayah;
use Andev\Musicool\Models\Provinsi;
use Andev\Musicool\Models\Kota;
use Andev\Musicool\Models\Kecamatan;
use Andev\Musicool\Models\JaringanKami;
Route::post('api/contact_us', 'Andev\Musicool\Controllers\Contact@contact');
Route::get('api/provinsi',function(){
    $provinsi = Provinsi::get();
    return $provinsi;
});
Route::get('api/kota',function(){
    $kota = Kota::where("provinsi_id",request("provinsi_id"))->get();
    return $kota;
});
Route::get('api/kecamatan',function(){
    $kecamatan = Kecamatan::where("kota_id",request("kota_id"))->get();
    return $kecamatan;
});
Route::get('api/jaringan_kami',function(){
    $data = JaringanKami::orderBy("id","desc");
    if(request("provinsi_id") != null){
        $data = JaringanKami::where("provinsi_id",request("provinsi_id"));
    }
    else if(request("kota_id") != null){
        $data = JaringanKami::where("kota_id",request("provinsi_id"));
    }
    else if(request("kecamatan_id") != null){
        $data = JaringanKami::where("kecamatan_id",request("kecamatan_id"));
    }
    if(request("layanan") != null){
        if(request("layanan") == "Agen"){
            $data = $data->where("is_agen",1);
        }else if(request("layanan") == "Bengkel"){
            $data = $data->where("is_bengkel",1);
        }else if(request("layanan") == "Teknisi"){
            $data = $data->where("is_teknisi",1);
        }
    }
    $data = $data->get();

    return $data;
});