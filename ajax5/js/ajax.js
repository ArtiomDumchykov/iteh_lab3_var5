function getVendor(){
    $.ajax({
        converters: {
            "text xml": function(data){return data}
        },
        type: "GET",
        url: "vendor.php",
        data: {
            vendor: $('[name="vendor"]').val(),
        },
        success: function(result){
            $('#result1').html('');
            $(result).find('name').each(function(){
                $('#result1').append('<li>'+ $(this).text() + '</li>');
            });
        }
    });
}
function getCat(){
    $.ajax({
        converters: {
            "text json": jQuery.parseJSON
        },
        type: "GET",
        url: "catefory.php",
        data: {category: $('[name="category"]').val()},
        success: function(result){
            $('#result2').html('<li>'+ result + '</li>');
        }
    });
}
function getPrice(){
    $.ajax({
        type: "POST",
        url: "price.php",
        data: {
            test: $('[name="test"]').val(),
        },
        success: function(result){
            $('#result3').html(result);
        }
    });
}