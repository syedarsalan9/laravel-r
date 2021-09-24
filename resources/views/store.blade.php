<!DOCTYPE html>
<html lang="en">
<head>
  <title>DataTables Bigdata load</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
<body>

<div class="container">
  <h2>within few sec,load BigData or 10 lakh or 1 million Datas/Rows quickly <br>using Datatables Server side in Laravel</h2>
  <p>Datatables Server Processing</p>            
  <table class="table table-striped" id="emptableid" width="100%">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>type</th>
        <th>city</th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>

  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <script type="text/javascript">
    
    $(document).ready(function() {
    	fetch_data(1);
    	
    });
    function fetch_data(page,sort_type="",sort_by="",search="",region="",channelType="",channel="",investment="",storeType="",mall=""){
		$.ajax({
	        type: "post",
	        dataType: 'JSON',
	        url: "{{url('/getStoreData')}}",
	        data: {
	        	"page": page,
	            "sort_type": sort_type,
	            "sort_by": sort_by,
	            "search": search,
	            "region": region,
	            "channelType": channelType,
	            "channel": channel,
	            "investment": investment,
	            "mall": mall,
	            _method: 'post'
	        },
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        success: function(response) {
	        	console.log("de response terug");
	            console.log(response);
	        },
	        error: function(qXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
    }

  </script>

</body>
</html>