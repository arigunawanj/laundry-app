$.ajax({
    type: "get",
    url: "/tambahprofil",
    dataType: "json",
    success: function(response) {
        response.map((value) => {
            $('#districts').append($('<option>', {
                value: value.id,
                text: value.name
            }));
        })
    }
});

function daerah(id) {
    $.ajax({
        type: "get",
        url: `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${id}.json`,
        dataType: "json",
        success: function(response) {
            console.log(response);
            $(`#villages`).children().remove()
            response.map((value) => {
                $(`#villages`).append($('<option>', {
                    value: value.id,
                    text: value.name
                }));
            })
        }
    });
}