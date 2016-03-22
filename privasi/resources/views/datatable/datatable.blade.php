<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="    https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    
    <script type="text/javascript">

    	$(document).ready(function() {
		    $('#example').DataTable();
		} );
    </script>


    


	</head>
	<body>
		<h1 class="text-center">Php artisan tinker</h1>

<div class="container">
	
@if (Session::has('message'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Message!</strong> {{ Session::get('message')}}
</div>

@endif

<a href="{{ URL::to('/input') }}" class="button ubutton-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>



		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>body</th>
                <th>created</th>
                <th>updated</th>
                <th>Action</th>
                
            </tr>
        </thead>
        

        <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>   {{ $row->title }} </td>
                <td>{{ $row->body }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td><a href="{{ URL::to('hapus/'.$row->id) }} "><span class="badge">Hapus</span></a>  <a href="{{ URL::to('/showedit/'.$row->id) }}"><span class="badge">Edit</span></a></td>
                
            </tr>
        @endforeach
        </tbody>



    </table>


   

  

    
</div>

		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>