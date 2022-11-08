$.ajax({
    type: "get",
    url: "/dataoutlet-add",
    dataType: "json",
    success: function (response) {
        response.map((value) => {
            $('#provinces').append($('<option>', {
                value: value.id,
                text: value.name
            }));
        })
    }
});

function daerah(jenis, id){
    let wilayah

    if (jenis == 'provinces') {
        wilayah = 'regencies'
    } else if (jenis == 'regencies') {
        wilayah = 'districts'
    } else if (jenis == 'districts') {
        wilayah = 'villages'
    }
    $.ajax({
        type: "get",
        url: `https://www.emsifa.com/api-wilayah-indonesia/api/${wilayah}/${id}.json`,
        dataType: "json",
        success: function (response) {
            console.log(response);
            $(`#${wilayah}`).children().remove()
            response.map((value) => { 
                $(`#${wilayah}`).append($('<option>', {
                    value: value.id,
                    text: value.name
                }));
            })
        }
    });
}