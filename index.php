<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script language="javascript">
   function loadData1()
   {
	   $(document).ready(function(){

			$.ajax({
				type: "DELETE",
				async:true,
				url: 'http://localhost/tutorial/rest-api/server.php',
				data: {
					cmd : 'address',
					first_name : 'Jon',
					last_name  : 'Smith',
					address    : 'new York'
				},
				success: function (results) {
					$("#display1").html(results);
					
				},
				error: function (request, status, error) {
						alert(request.responseText);
					}
			});
			
	   });
   }
  
</script>

<div id="display1"></div>
<br><br>

<a href="javascript:void();" onClick="loadData1()">Load 1</a> 


