$('#bayar').click(function (e) {
    
    // console.log('aaaaaaaa');
    e.preventDefault();
    
    $.ajax({
        type: "get",
        url: "midtrans",
        data: {
            harga:$('#harga').html(),
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
});
