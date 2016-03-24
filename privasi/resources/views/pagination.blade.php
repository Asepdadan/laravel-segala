
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min">

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min"></script>


 		 <style>
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
  #section1 {color: #fff; background-color: #1E88E5;}
  #section2 {color: #fff; background-color: #673ab7;}
  #section3 {color: #fff; background-color: #ff9800;}
  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 150px;
    }
  }
  </style>

  <script language="javascript">
  document.onmousedown = disableclick;
  status = "Right Click Disabled";
  Function disableclick(e)
  {
    if(event.button == 2)
    {
      alert(status);
      return false; 
    }
  }
</script> 
	</head>


		<div class="table-responsive">
	<table class="table table-hover" border="1">
		<thead>
			<tr>
				<th>no</th>
				<th>title</th>
				<th>body</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data as $row)

			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->title }}</td>
				<td>{{ $row->body }}</td>
			</tr>
		@endforeach

		</tbody>
	</table>
</div>

<nav><ul class="pagination">{!! $data->links() !!}</ul></nav>



<nav>
  <ul class="pager">
    <li class="previous"><a href="
{!! $data->previousPageUrl() !!}"><span aria-hidden="true">&larr;</span> Sebelumnya</a></li>
    <li class="next"><a href="{!!
$data->nextPageUrl() !!}">Terbaru <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>

 total :{!! $data->total() !!}
 count : {!! $data->count() !!}
		


<br>
<br>


	</body>
</html>


