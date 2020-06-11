<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		  <h1 style="color: white" class="bg-primary text-center mt-3">Member Promotion App</h1>

	<h1 class="text-center">List</h1>
		<a style="float: right" href="/register" class="btn btn-primary " >Back </a><br><br>

	<table class="table table-striped table-hover table-bordered mt-3">
  <thead>
    <tr>
  <!-- <th scope="col" class="text-center">No</th>-->

      <th scope="col" class="text-center">Name</th>
      <th scope="col"class="text-center">Amount($)</th>
      <th scope="col"class="text-center">pool</th>

    </tr>
  </thead>
  <tbody>

   
    @foreach($data as $items)
    <tr>
            <!--<td class="text-center">{{$items->id}}</td>-->

      <td class="text-center">{{$items->name}}</td>
      <td class="text-center">{{$items->amt}}</td>
      <td class="text-center">{{$items->pool}}</td>

    </tr>

      @endforeach

</div>
</tbody>
</table>

</body>
</html>