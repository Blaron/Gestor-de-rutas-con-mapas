$(function() {
        $.ajax({
            url: 'https://nominatim.openstreetmap.org/search.php?q=calle+holanda%2Calcal%C3%A1+de+guadaira&format=jsonv2',
            type: 'GET',
            dataType: 'html',
            success: function(data, status, xhr)
            {
                console.log(data);
            },
            error: function(xhr, status, error)
            {
                console.log("Error: " + status + " " + error);
            }
        });
    });