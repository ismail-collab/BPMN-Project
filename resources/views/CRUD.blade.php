<!DOCTYPE html>
<html>
<head>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	<title>Table Example</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
			font-family: Arial, sans-serif;
			font-size: 14px;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
			font-weight: bold;
			color: #555;
		}
		button {
			padding: 5px 10px;
			border: none;
			border-radius: 5px;
			background-color: #4CAF50;
			color: white;
			font-weight: bold;
			cursor: pointer;
			margin-right: 5px;
		}
		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>




<form  action="userAdd" method="POST">
   @csrf
   <div>
    <div>
        <span >Username</span>
        <input type="text" name="username"  required>
    </div>
<div>
        <span >Name</span>
        <input type="text" name="fullname"  required>
    </div>
<div>
        <span >Password</span>
        <input type="text" name="password" required>
    </div>
  
     <div>
        <button type="submit">Submit</button>
</div>
</div>
</form>

	<h2>User Table</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Password</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			@foreach ($USERS as $USER)
				<td>{{$USER->id}}</td>
				<td>{{$USER->username}}</td>
				<td>{{$USER->name}}</td>
				<td>{{$USER->password}}</td>
				<td>
					<button class="btn_delete">Delete</button>
					<button>Update</button>
				</td>
			</tr>
			@endforeach
			


			<!-- Add more rows here as needed -->
		</tbody>
	</table>



	<script>

var HttpClient = function(){
    this.get = function(Reqdata, aUrl, aCallback) {
        var anHttpRequest = new XMLHttpRequest();
        anHttpRequest.onreadystatechange = function() {
            if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
            aCallback(anHttpRequest.responseText);
        }
        anHttpRequest.open("POST",aUrl,true);
        anHttpRequest.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');

		anHttpRequest.send(JSON.stringify(Reqdata));
    }
}

var client= new HttpClient();


$(".btn_delete").on('click',function(){
            var theurl='http://localhost:9090/deleteuser';
            var currentRow = $(this).closest("tr");
            var username = currentRow.find("td:eq(1)").text();
            var Data = {"username":username }
            var request = new XMLHttpRequest();
request.open('POST', theurl, true);
request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
request.send(JSON.stringify(Data));

});

	</script>



</body>
</html>
