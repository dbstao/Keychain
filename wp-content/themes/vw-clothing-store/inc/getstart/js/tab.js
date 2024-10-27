function vw_clothing_store_open_tab(evt, cityName) {
    var vw_clothing_store_i, vw_clothing_store_tabcontent, vw_clothing_store_tablinks;
    vw_clothing_store_tabcontent = document.getElementsByClassName("tabcontent");
    for (vw_clothing_store_i = 0; vw_clothing_store_i < vw_clothing_store_tabcontent.length; vw_clothing_store_i++) {
        vw_clothing_store_tabcontent[vw_clothing_store_i].style.display = "none";
    }
    vw_clothing_store_tablinks = document.getElementsByClassName("tablinks");
    for (vw_clothing_store_i = 0; vw_clothing_store_i < vw_clothing_store_tablinks.length; vw_clothing_store_i++) {
        vw_clothing_store_tablinks[vw_clothing_store_i].className = vw_clothing_store_tablinks[vw_clothing_store_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});