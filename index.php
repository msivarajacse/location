<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function()
    {
		
		getLocation();
        function getLocation() 
        {
            if (navigator.geolocation) 
        {
            navigator.geolocation.getCurrentPosition(showPosition);
        } 
        else 
        { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
        }
        function showPosition(position) 
        {
            var latitude=position.coords.latitude;
            var longitude=position.coords.longitude;
            // alert(latitude);
            $('#latitude').html(latitude);
            $('#longitude').html(longitude);
            // window.open("people_details.php?lat="+position.coords.latitude+"&long="+position.coords.longitude,'_self');
        }

	setTimeout('location.reload(true)', 1800000);
    });
</script>   
<textarea  id="latitude" name="latitude"></textarea>
<?php echo(rand(10,100)); ?>
<textarea  id="longitude" name="longitude"></textarea>   