$(document).on("change", "input[name='JaringanKami[tipe_layanan]']", function () {
    if (this.value != 2) {
        $("#Form-field-JaringanKami-kompetensi").html(` <option value="0" disabled="disabled">Non Teknisi</option>
        <option value="B">Basic</option>
        <option value="I">Intermediet</option>
        <option value="K">Kompeten</option>`);
        $("#Form-field-JaringanKami-kompetensi").val(0);
        $("#Form-field-JaringanKami-kompetensi").attr("disabled", "disabled")
    } else {
        $("#Form-field-JaringanKami-kompetensi").html(`
        <option value="B">Basic</option>
        <option value="I">Intermediet</option>
        <option value="K">Kompeten</option>`);
        $("#Form-field-JaringanKami-kompetensi").attr("disabled", false)

    }
});
$(document).ready(function () {
    let id = window.location.pathname.split("/");
    id = id[id.length - 1];
    id = id.substr(7, 1);
    console.log(id);
    if (id == "A") {
        id = 0;
    } else if (id == "B") {
        id = 1;
    } else if(id== "T"){
        id = 2;
    }else{
        id = 0;
    }

    htmlid = $("input[name='JaringanKami[tipe_layanan]']")[id].getAttribute("id");
    $("#" + htmlid).attr("checked", true);
});