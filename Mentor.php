<!doctype html>
<html>
<head>
    <title>Mentor </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link href='https://fonts.googleapis.com/css?family=KronaOne' rel='stylesheet'>
         <link rel="icon" type="image/png" href="assets/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href='css/jquery-ui.min.css' type='text/css' rel='stylesheet' >
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('keydown', '.username', function() {

                var id = this.id;
                var splitid = id.split('_');
                var index = splitid[1];

                $( '#'+id ).autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: "info.php",
                            type: 'post',
                            dataType: "json",
                            data: {
                                search: request.term,request:1
                            },
                            success: function( data ) {
                                response( data );
                            }
                        });
                    },
                    select: function (event, ui) {
                        $(this).val(ui.item.label); // display the selected text
                        var userid = ui.item.value; // selected id to input

                        // AJAX
                        $.ajax({
                            url: 'info.php',
                            type: 'post',
                            data: {userid:userid,request:2},
                            dataType: 'json',
                            success:function(response){

                                var len = response.length;

                                if(len > 0){
                                    var id = response[0]['id'];                                  
                                    var email = response[0]['email'];                               
                                   var phone = response[0]['phone'];

                                    document.getElementById('email_'+index).value = email;
                                    document.getElementById('phone_'+index).value = phone;

                                }

                            }
                        });

                        return false;
                    }
                });
            });

            // Add more
            $('#Add').click(function(){

                // Get last id
                var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
                var split_id = lastname_id.split('_');

                // New index
                var index = Number(split_id[1]) + 1;

                // Create row with input elements
                var html = "<tr class='tr_input' style='height:30px;'><td><input type='text' class='username' id='username_"+index+"' placeholder='Enter Name'></td><td><input type='text' class='email' id='email_"+index+"' ></td><td><input type='text' class='phone' id='phone_"+index+"' ></td></tr>";

                // Append data
                $('tbody').append(html);

            });
        });

    </script>
	<style>
	<style>
    
table{
   
  margin-top:-80px;
  margin-left:50px;
  padding:100px;
 
  border:1px solid lightgrey;
}
tr,td,th{border:1px solid lightgrey;
  padding:6px;
 
  text-align:center;
  color:black;
padding-right:45.2px;

}
th{
  color:white;
  background-color:#993399;
  height:50px;
  font-size:25px;
letter-spacing:1px;
}
body{
    font-family:cursive;
    background: linear-gradient(to bottom right, #ff0066 0%, #cc00cc 100%);

}

	</style>
</head><br><br>
<body>
<h1 style="margin-left:600px;text-shadow: 2px 2px #ff0000;"> <b> MENTOR ASSIGNMENT</b></h1><br><br>
    <div class="row">
	<div style="">
	
        <div class="col-sm-4">
		<table style='border-collapse: collapse;border:1px'>
            <thead>
			<tr style="  font-size:27px">
				<th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
				 </tr>
				 <tr >
			<?php
				$con2 = mysqli_connect("localhost", "root", "", "users");
				
				if ($con2->connect_error) {
				die("Connection failed: " . $con2->connect_error);
                }
				$sql = "SELECT * FROM regs";
                $result = $con2->query($sql);
             

				if ($result->num_rows > 0) {
				
				while($row = $result->fetch_assoc()) {
				echo "<tr style='height:44px;' ><td>" . $row["ID"]. "</td><td>" . $row["Candidate"] . "</td><td>"
				. $row["Email"]. "</td><td>" . $row["Phone"]. "</td>";

                }			
				} else { echo "0 results"; }
			
			?>

            </tr>
			</thead>
		</table>
		</div>
		<div class="col-sm-6">
        <table  style='border-collapse: collapse;margin-left:65.9px;border="1px"'>
            <thead>
            <tr>
            <th>Mentor Name</th>
                <th>Mentor Email</th>
                <th>Mentor Phone</th>
            </tr>
            </thead>
            <tbody style="height:10px;font-size:18px;">
            <tr class='tr_input' >
                <td><input type='text' class='username' id='username_1' placeholder='Enter Name'></td>
                <td><input type='text' class='email' id='email_1' ></td>
                <td><input type='text' class='phone' id='phone_1' ></td>

            </tr>
            </tbody>
        </table>
        <br>
        <h3><center><input type='button' value='Add' id='Add'  style="background:#993399; letter-spacing:2px;width:300px;"></center></h3>
    </div></div>
	</div>
</body>
</html>
