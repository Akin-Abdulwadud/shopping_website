<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>My Applicants</title>
	<style>
	#customers {
	  font-family: Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #04AA6D;
	  color: white;
	}
	.profile-picture{
		width: 50px;
	}
	</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
	<thead>
		<tr>
    		<th>Image</th>
    		<th>Name</th>
    		<th>Department</th>
  		</tr>
	</thead>
	<tbody id="allApplicants">

  </tbody>
</table>


</body>
<script type="text/javascript">
$(window).on("load" ,function(){
    $.get("allApplicantsProcessor.php", function(response){
    		alert(response);
			var response = JSON.parse(response);
    		for(i in response){
    			console.log(response[i].first_name);
    			// alert(response[i].picture_link);
    			if (response[i].picture_link == null) {
    				response[i].picture_link = "uploads/default.png";
    			}
				document.getElementById('allApplicants').innerHTML +=
					'<tr>'+
					'<td><img src='+response[i].picture_link+' class="profile-picture"></td>'+
					'<td>'+response[i].first_name+ " "+ response[i].last_name +'</td>'+
					'<td>'+response[i].dept_name+'</td>'+
					'</tr>';
    		}
    		console.log(response.picture_link);
    		// $('#profilePicture'). attr('src', userData.picture_link);
    		// $('#userName').html(userData.first_name +" "+ userData.last_name); 
    		// $('#email').html(userData.email); 
    		// $('#department').html(userData.dept_name); 
    });
});
</script>
</html>