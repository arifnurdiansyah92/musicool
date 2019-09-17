$(document).on("change", "#Form-field-JaringanKami-provinsi_id", function () {
    getKota(this.value);
})
$(document).on("change", "#Form-field-JaringanKami-kota_id", function () {
    getKecamatan(this.value);
})
function getKota(provinsi_id) {
    $.ajax({
        url: baseUrl + "/api/kota",
        type: "GET",
        data: {
            provinsi_id: provinsi_id
        },
        success: function (response) {
            $("#Form-field-JaringanKami-kota_id").html("<option value=''>Pilih Kota</option>")
            $("#Form-field-JaringanKami-kecamatan_id").html("<option value=''>Pilih Kecamatan</option>")
            response.map(item => {
                $("#Form-field-JaringanKami-kota_id").append(`<option value="${item.id}">${item.kota}</option>`);
            })
        }
    })
}
function getKecamatan(kota_id) {
    $.ajax({
        url: baseUrl + "/api/kecamatan",
        type: "GET",
        data: {
            kota_id: kota_id
        },
        success: function (response) {
            $("#Form-field-JaringanKami-kecamatan_id").html("<option value=''>Pilih Kecamatan</option>")
            response.map(item => {
                $("#Form-field-JaringanKami-kecamatan_id").append(`<option value="${item.id}">${item.kecamatan}</option>`);
            })

        }
    })
}