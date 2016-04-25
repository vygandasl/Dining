
<hr>
<html lang="{$LANG.isocode}">


<div id ="footer" class="cf">

        <div class="column three">
        <strong>Mobile number</strong>
        +37060000000<br><br>
        <a href="mailto:vygandas.lepsys@gmail.com">Connect me through a email!</a>
      </div>

      <div class="column three">
      <strong>Location</strong>
      54 Tuskulenų street, Vilnius
      Lithuania

<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(54.701461, 25.289908),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:230px;
      height:190px;"></div>

</body>
</html>

    </div>

    <div class="column three last">
    <strong>Hours</strong>
    <em>Tuesday - Friday</em><br>
    9:00pm - 5:00am<br><br>



  </div>
  </div>
  <div class="copyright-info">
  <?php include('copyright.php'); ?>
  </div>

</body>
</html>
