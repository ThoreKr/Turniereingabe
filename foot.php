<script src="libs/external/jquery/jquery.js"></script>
<script src="libs/jquery-ui.js"></script>
<script>

<!--Buttons zum Bestätigen To be remodeled-->
$( "input[type=submit], a, button" ).button();


$( "#tabs" ).tabs();



$( "#datepicker" ).datepicker({
      numberOfMonths: 3,
      showButtonPanel: true
});
$('#datepicker').datepicker('option', 'dateFormat', 'yy-mm-dd'); //Set date format for mysql

$( "#tooltip" ).tooltip();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>