<?php namespace Andev\Musicool\Models;

use Model;
use Andev\Musicool\Models\Mor;
use Andev\Musicool\Models\Provinsi;
use Andev\Musicool\Models\Kota;
use Andev\Musicool\Models\Kecamatan;
/**
 * Model
 */
class JaringanKami extends Model
{
    public $incrementing = false;
    use \October\Rain\Database\Traits\Validation;
    protected $jsonable = ['tipe_layanan'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andev_musicool_jaringan_kami';
    public $appends = [
        "qrcode", "location","provinsi","kota"
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
        "mor_id" => "required",
        "nama" => "required",
        "tipe_layanan" => "required"
    ];
    public function getProvinsiAttribute(){
        return Provinsi::where("id",$this->provinsi_id)->first()->provinsi;
    }
    public function getKotaAttribute(){
        return Kota::where("id",$this->kota_id)->first()->kota;
    }
    public function getKecamatanAttribute(){
        return Kecamatan::where("id",$this->kecamatan_id)->first()->kecamatan;
    }
    public function getMorAttribute(){
        return Mor::where("id",$this->mor_id)->first()->mor;
    }
    public function getMorIdOptions(){
        $options = collect();
        $options[0] = "Pilih Mor";
        $mor = Mor::get();
        foreach($mor as $item){
            $options[$item->id] = $item->mor;
        }
        return $options;
    }
    public function getProvinsiIdOptions(){
        $options = collect();
        $options[0] = "PIlih Provinsi";
        $data = Provinsi::get();
        foreach($data as $item){
            $options[$item->id] = $item->provinsi;
        }
        return $options;
    }
    public function getKotaIdOptions(){
        $options = collect();
        $options[0] = "PIlih Kota";
        if($this->provinsi_id !== null){
            $data = Kota::get();
            foreach($data as $item){
                $options[$item->id] = $item->kota;
            }
        }
        return $options;
    }
    public function getKecamatanIdOptions(){
        $options = collect();
        $options[0] = "PIlih Kecamatan";
        if($this->kota_id !== null){
            $data = Kecamatan::get();
            foreach($data as $item){
                $options[$item->id] = $item->kecamatan;
            }
        }
        return $options;
    }
    public function beforeValidate(){
        if($this->mor_id == 0){
            unset ($this->mor_id);
        }
        if($this->provinsi_id == 0){
            unset ($this->provinsi_id);
        }
        if($this->kota_id == 0){
            unset ($this->kota_id);
        }
        if($this->kecamatan_id == 0){
            unset ($this->kecamatan_id);
        }
    }
    public function getQrcodeAttribute(){
        return $this->id;
    }
    public function getLocationAttribute(){
        $location = [
            "lat" => $this->latitude,
            "lng" => $this->longitude
        ];
        return $location;
    }
    public function beforeSave(){
        $this->kompetensi = $this->kompetensi ?? 0;
        $location = explode(",",$this->maps);
        unset($this->maps);
        $this->latitude = $location[0];
        $this->longitude = $location[1];
        $tipe_layanan = ["is_agen","is_bengkel","is_teknisi"];
        $kode_layanan = ["A","B","T"];
        $this->{$tipe_layanan[$this->tipe_layanan]} = 1;
        $no_urut = JaringanKami::latest()->first();
        $no_urut = $no_urut ? substr($no_urut->id,8,5) : 0;
        $no_urut = (int)$no_urut + 1;
        $this->id = $this->mor_id.str_replace(".","",$this->kecamatan_id).$kode_layanan[$this->tipe_layanan].sprintf('%05d',$no_urut).$this->kompetensi;
        unset($this->tipe_layanan);

    }
}
