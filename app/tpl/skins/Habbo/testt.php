<script>
var cacheData;
var data = $('#bottom-bar').html();
var auto_refresh = setInterval(
function ()
{
    $.ajax({
        url: 'https://smurfhotel.nl/counter.php',
        type: 'POST',
        data: data,
        dataType: 'html',
        success: function(data) {
            if (data !== cacheData){
                //data has changed (or it's the first call), save new cache data and update div
                cacheData = data;
                $('#bottom-bar').fadeOut("slow").html(data).fadeIn("slow");
            }           
        }
    })
}, 30000); // check every 30000 milliseconds
</script>