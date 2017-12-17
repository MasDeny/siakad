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
