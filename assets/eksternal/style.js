
(function() {
$('#tanggal').bootstrapMaterialDatePicker({ 
    time: false,
    format : 'dddd, DD MMMM YYYY',
    lang : 'id'
});

$('#jam').bootstrapMaterialDatePicker({ 
    date: false,
    shortTime: false,
    format : 'HH:mm'
});
})(jQuery);

(function () {
$( "#dosen" ).autocomplete({
    source: function(request, response) {
        $.ajax({ 
            url: "<?php echo base_url();?>koordinator/jadwal_sidang/get_dosen",
            data: { nama: $("#autocomplete").val()},
            dataType: "json",
            type: "POST",
            success: function(data){
                 response(data);
            }    
        });
    },
    });
});