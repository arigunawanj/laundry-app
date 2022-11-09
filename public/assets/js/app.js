function bayar(id) {
    // console.log(id);
    $.ajax({
        type: "get",
        url: "midtrans",
        data: {
            harga:$('#harga'+id).html(),
        },
        dataType: "json",
        success: function (response) {

            // console.log(response);
            snap.pay(response, {
                // Optional
                onSuccess: function (result) {
                },
                // Optional
                onPending: function (result) {
                },
                // Optional
                onError: function (result) {
                }
            });

        }
    });    
}

$('#bayar').click(function (e) {
    
    // console.log('aaaaaaaa');
    e.preventDefault();
    alert('success');
   
});
