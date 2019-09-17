<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\laragon\www\musicool-cms/themes/musicool/pages/jaringan-kami.htm */
class __TwigTemplate_14835b92d9439feeb68638fdd81a2154f6874037367f4ed4859bfd887029f955 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a id=\"top\"></a>
<section id=\"title-page\" class=\"bg-green\" style=\"margin-top: 75px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h2 class=\"text-white text-center\">Jaringan Kami</h2>
            </div>
        </div>
    </div>
</section>
<section id=\"content\">
  <div class=\"container\">
    <div class=\"row mx-50\">
      <div class=\"col-sm-12\">
          <div id=\"toolbar\">
              <div class=\"row\">
                  <div class=\"col-sm-2\">
                      <div class=\"form-group\">
                          <label>Tipe Layanan</label>
                          <select class=\"form-control\" id=\"tipe_layanan\">
                              <option value=\"\">Semua Layanan</option>
                              <option>Agen</option>
                              <option>Bengkel</option>
                              <option>Teknisi</option>
                          </select>
                      </div>
                  </div>
                  <div class=\"col-sm-2\">
                      <div class=\"form-group\">
                          <label>Provinsi</label>
                          <select class=\"form-control\" id=\"provinsi\">
                              
                          </select>
                      </div>
                  </div>
                  <div class=\"col-sm-2\">
                      <div class=\"form-group\">
                          <label>Kota / Kabupaten</label>
                          <select class=\"form-control\" id=\"kota\">
                          <option value=\"\">Pilih Kota</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"table-responsive\">
              <table class=\"table\" id=\"jaringan-kami\">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Provinsi</th>
                          <th>Kota / Kabupaten</th>
                          <th>No Telp</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody id=\"table-content\">
                     <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                     </tr>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</section>
<div class=\"modal fade\" id=\"qrcode\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">QR Code</h5>
                <button type=\"button\" class=\"close\"
                    data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body text-center\">
                <canvas id=\"qr-code\"></canvas>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\"
                    class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"gmaps\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Location</h5>
                <button type=\"button\" onclick=\"event.stopPropagation(); \$('#gmaps').modal('hide')\" class=\"close\"
                    data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body text-center\">
                <div id=\"location\" style=\"width: 100%; height: 500px;\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" onclick=\"event.stopPropagation(); \$('#gmaps').modal('hide')\"
                    class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
";
        // line 116
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 117
        echo "<script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\">
</script>
<script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('#jaringan-kami').DataTable({
        \"dom\": '<\"toolbar\">frtip'    
    });
    \$(\"div.toolbar\").html('');
    \$.ajax({
        url: \"";
        // line 127
        echo url("/api/provinsi");
        echo "\",
        method: \"GET\",
        success: function(response){
            \$(\"#provinsi\").html(\"<option value=''>Pilih Provinsi</option>\");
            response.map(item => {
                \$(\"#provinsi\").append(`<option value='\${item.id}'>\${item.provinsi}</option>`);    
            })
            getJaringan();
        }
    });
    function getKota(provinsi_id) {
        \$.ajax({
            url: \"";
        // line 139
        echo url("/api/kota");
        echo "\",
            type: \"GET\",
            data: {
                provinsi_id: provinsi_id
            },
            success: function (response) {
                \$(\"#kota\").html(\"<option value=''>Pilih Kota</option>\");
                response.map(item => {
                    \$(\"#kota\").append(`<option value='\${item.id}'>\${item.kota}</option>`);    
                })
            }
        })
    }
    \$(document).on(\"change\", \"#provinsi\", function () {
        getKota(this.value);
        getJaringan();
    });
    \$(document).on(\"change\", \"#tipe_layanan\", function(){
        getJaringan();
    });
    function getJaringan(){
        let url = \"";
        // line 160
        echo url("api/jaringan_kami");
        echo "\";
        \$.ajax({
            url: `\${url}?provinsi_id=\${\$(\"#provinsi\").val()}&kota_id=\${\$(\"#kota\").val()}&layanan=\${\$(\"#tipe_layanan\").val()}`,
            type: \"GET\",
            success: function (response) {
                \$(\"#table-content\").html(`<tr> <td colspan=\"7\">No Data To Display</td> </tr>`);
                \$(\"#jaringan-kami\").DataTable().clear();
                \$(\"#jaringan-kami\").DataTable().destroy();
                response.map((item,index) => {
                    \$(\"#table-content\").append(`
                        <tr>
                            <td>\${index+1}</td>
                            <td>\${item.nama}</td>
                            <td>\${item.alamat}</td>
                            <td>\${item.provinsi}</td>
                            <td>\${item.kota}</td>
                            <td>\${item.no_telp}</td>
                            <td><a id=\"show-qrcode\" href=\"#\" onclick=\"generateQRCode('\${item.id}')\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#qrcode\">QR Code</a> <a id=\"show-gmaps\" href=\"#\" onclick=\"generateMap('\${item.location.lat}', '\${item.location.lng}')\" class=\"btn btn-primary\"
    data-toggle=\"modal\" data-target=\"#gmaps\">Location</a></td>
                        </tr>
                    `); 
                });
                
                \$(\"#jaringan-kami\").DataTable({
                    \"dom\": '<\"toolbar\">frtip'  
                });
            }
        })
    }
});
</script>
<script src=\"";
        // line 191
        echo url("plugins/andev/musicool/models/jaringankami/assets/js/qr.min.js");
        echo "\"></script>
<!-- Modal -->
<script>
    function generateQRCode(value){
        qr.canvas({
        canvas: document.getElementById('qr-code'),
        level: \"Q\",
        foreground: \"#111\",
        background: \"#FFF\",
        size: \"7\",
        value: value
    });
    }
</script>
<script src=\"//maps.googleapis.com/maps/api/js?key=AIzaSyD2UVhsmHEKaUdYMVjLcl4A2rr3B1Zj9Oc&libraries=places\"></script>

<script>
    var map;
    function generateMap(lat,lng) {
        lat = Number(lat);
        lng = Number(lng);
        map = new google.maps.Map(document.getElementById('location'), {
            center: {
                lat: lat,
                lng: lng
            },
            zoom: 17
        });
        var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            map: map,
            title: 'Lokasi'
        });
    }
    
</script>
";
        // line 116
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\musicool-cms/themes/musicool/pages/jaringan-kami.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 116,  239 => 191,  205 => 160,  181 => 139,  166 => 127,  154 => 117,  152 => 116,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"top\"></a>
<section id=\"title-page\" class=\"bg-green\" style=\"margin-top: 75px\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h2 class=\"text-white text-center\">Jaringan Kami</h2>
            </div>
        </div>
    </div>
</section>
<section id=\"content\">
  <div class=\"container\">
    <div class=\"row mx-50\">
      <div class=\"col-sm-12\">
          <div id=\"toolbar\">
              <div class=\"row\">
                  <div class=\"col-sm-2\">
                      <div class=\"form-group\">
                          <label>Tipe Layanan</label>
                          <select class=\"form-control\" id=\"tipe_layanan\">
                              <option value=\"\">Semua Layanan</option>
                              <option>Agen</option>
                              <option>Bengkel</option>
                              <option>Teknisi</option>
                          </select>
                      </div>
                  </div>
                  <div class=\"col-sm-2\">
                      <div class=\"form-group\">
                          <label>Provinsi</label>
                          <select class=\"form-control\" id=\"provinsi\">
                              
                          </select>
                      </div>
                  </div>
                  <div class=\"col-sm-2\">
                      <div class=\"form-group\">
                          <label>Kota / Kabupaten</label>
                          <select class=\"form-control\" id=\"kota\">
                          <option value=\"\">Pilih Kota</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"table-responsive\">
              <table class=\"table\" id=\"jaringan-kami\">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Provinsi</th>
                          <th>Kota / Kabupaten</th>
                          <th>No Telp</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody id=\"table-content\">
                     <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                     </tr>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</section>
<div class=\"modal fade\" id=\"qrcode\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">QR Code</h5>
                <button type=\"button\" class=\"close\"
                    data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body text-center\">
                <canvas id=\"qr-code\"></canvas>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\"
                    class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"gmaps\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Location</h5>
                <button type=\"button\" onclick=\"event.stopPropagation(); \$('#gmaps').modal('hide')\" class=\"close\"
                    data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body text-center\">
                <div id=\"location\" style=\"width: 100%; height: 500px;\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" onclick=\"event.stopPropagation(); \$('#gmaps').modal('hide')\"
                    class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
{% put scripts %}
<script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\">
</script>
<script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('#jaringan-kami').DataTable({
        \"dom\": '<\"toolbar\">frtip'    
    });
    \$(\"div.toolbar\").html('');
    \$.ajax({
        url: \"{{ url('/api/provinsi') }}\",
        method: \"GET\",
        success: function(response){
            \$(\"#provinsi\").html(\"<option value=''>Pilih Provinsi</option>\");
            response.map(item => {
                \$(\"#provinsi\").append(`<option value='\${item.id}'>\${item.provinsi}</option>`);    
            })
            getJaringan();
        }
    });
    function getKota(provinsi_id) {
        \$.ajax({
            url: \"{{ url('/api/kota') }}\",
            type: \"GET\",
            data: {
                provinsi_id: provinsi_id
            },
            success: function (response) {
                \$(\"#kota\").html(\"<option value=''>Pilih Kota</option>\");
                response.map(item => {
                    \$(\"#kota\").append(`<option value='\${item.id}'>\${item.kota}</option>`);    
                })
            }
        })
    }
    \$(document).on(\"change\", \"#provinsi\", function () {
        getKota(this.value);
        getJaringan();
    });
    \$(document).on(\"change\", \"#tipe_layanan\", function(){
        getJaringan();
    });
    function getJaringan(){
        let url = \"{{ url('api/jaringan_kami') }}\";
        \$.ajax({
            url: `\${url}?provinsi_id=\${\$(\"#provinsi\").val()}&kota_id=\${\$(\"#kota\").val()}&layanan=\${\$(\"#tipe_layanan\").val()}`,
            type: \"GET\",
            success: function (response) {
                \$(\"#table-content\").html(`<tr> <td colspan=\"7\">No Data To Display</td> </tr>`);
                \$(\"#jaringan-kami\").DataTable().clear();
                \$(\"#jaringan-kami\").DataTable().destroy();
                response.map((item,index) => {
                    \$(\"#table-content\").append(`
                        <tr>
                            <td>\${index+1}</td>
                            <td>\${item.nama}</td>
                            <td>\${item.alamat}</td>
                            <td>\${item.provinsi}</td>
                            <td>\${item.kota}</td>
                            <td>\${item.no_telp}</td>
                            <td><a id=\"show-qrcode\" href=\"#\" onclick=\"generateQRCode('\${item.id}')\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#qrcode\">QR Code</a> <a id=\"show-gmaps\" href=\"#\" onclick=\"generateMap('\${item.location.lat}', '\${item.location.lng}')\" class=\"btn btn-primary\"
    data-toggle=\"modal\" data-target=\"#gmaps\">Location</a></td>
                        </tr>
                    `); 
                });
                
                \$(\"#jaringan-kami\").DataTable({
                    \"dom\": '<\"toolbar\">frtip'  
                });
            }
        })
    }
});
</script>
<script src=\"{{ url('plugins/andev/musicool/models/jaringankami/assets/js/qr.min.js') }}\"></script>
<!-- Modal -->
<script>
    function generateQRCode(value){
        qr.canvas({
        canvas: document.getElementById('qr-code'),
        level: \"Q\",
        foreground: \"#111\",
        background: \"#FFF\",
        size: \"7\",
        value: value
    });
    }
</script>
<script src=\"//maps.googleapis.com/maps/api/js?key=AIzaSyD2UVhsmHEKaUdYMVjLcl4A2rr3B1Zj9Oc&libraries=places\"></script>

<script>
    var map;
    function generateMap(lat,lng) {
        lat = Number(lat);
        lng = Number(lng);
        map = new google.maps.Map(document.getElementById('location'), {
            center: {
                lat: lat,
                lng: lng
            },
            zoom: 17
        });
        var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            map: map,
            title: 'Lokasi'
        });
    }
    
</script>
{% endput %}", "D:\\laragon\\www\\musicool-cms/themes/musicool/pages/jaringan-kami.htm", "");
    }
}
