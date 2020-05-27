<html>

<script src="https://code.jquery.com/jquery-1.9.1.min.js">
var auto_refresh = setInterval(function () {
    $('.View').fadeOut('slow', function() {
        $(this).load('/echo/json/', function() {
            $(this).fadeIn('slow');
        });
    });
}, 1000); // refresh every 15000 milliseconds
</script>
<body>
<div class="View">{online}</div>
</body>
</html>