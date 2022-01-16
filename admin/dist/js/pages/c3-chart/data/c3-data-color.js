/*************************************************************************************/
// -->Template Name: Bootstrap Press Admin
// -->Author: Themedesigner
// -->Email: niravjoshi87@gmail.com
// -->File: c3_chart_JS
/*************************************************************************************/
$(function() {

var data_nama = [];
var data_jumlah = [];

$.post("<?= base_url('admin/getData') ?>", 
function (data) {
    var obj = JSON.parse(data);
    $.each(obj, function (test, item) {
        data_nama.push(item.nama_angkatan);
        data_jumlah.push (item.jumlah);
    });
});


    var a = c3.generate({
        bindto: "#data-color",
        size: { height: 200 },
        data: {
            columns: [
                ["Lewat > 3 H", 300, 240, 200, 200],
                ["Lewat 1-3 H", 100, 130, 100, 100],
                ["Kurang 1 H", 130, 200, 150, 150]
            ],
            type: "bar",
            colors: { data1: "#4fc3f7", data2: "#2962FF" },
            color: function(a, o) { return o.id && "data3" === o.id ? d3.rgb(a).darker(o.value / 150) : a }
        },
        grid: { y: { show: !0 } }
    });
});