<!DOCTYPE html>
<html>
  <head>
  <title>Laravel Pagination using Ajax</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" /> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
    .box{
      width:600px;
      margin:0 auto;
    }
    .mask{
      display: none; /*This hides the mask*/
    }
    .mask.ajax{
      display: block;
      width: 100%;
      height: 100%;
      position: relative; /*required for z-index*/
      z-index: 1000; /*puts on top of everything*/
      background-image: url (loading-icon.png);
    }
    .wrapper{
      width:200px;
      padding:20px;
      height: 150px;
    }
    .select{
    height:100px;
    overflow:scroll;
}
  </style>
  </head>
  <body>
    <br />
    <div class="container">
      <h3 align="center">Laravel Pagination using Ajax</h3><br />
      <div id="table_data">
        <div class="wrapper" >
          <select id="framework" name="framework[]" multiple class="select form-control" >
            <option value="Codeigniter">Codeigniter</option>
            <option value="CakePHP">CakePHP</option>
            <option value="Laravel">Laravel</option>
            <option value="YII">YII</option>
            <option value="Zend">Zend</option>
            <option value="Symfony">Symfony</option>
            <option value="Phalcon">Phalcon</option>
            <option value="Slim">Slim</option>
            <option value="Codeigniter">Codeigniter</option>
            <option value="CakePHP">CakePHP</option>
            <option value="Laravel">Laravel</option>
            <option value="YII">YII</option>
            <option value="Zend">Zend</option>
            <option value="Symfony">Symfony</option>
            <option value="Phalcon">Phalcon</option>
            <option value="Slim">Slim</option>
            <option value="Codeigniter">Codeigniter</option>
            <option value="CakePHP">CakePHP</option>
            <option value="Laravel">Laravel</option>
            <option value="YII">YII</option>
            <option value="Zend">Zend</option>
            <option value="Symfony">Symfony</option>
            <option value="Phalcon">Phalcon</option>
            <option value="Slim">Slim</option>
            <option value="Codeigniter">Codeigniter</option>
            <option value="CakePHP">CakePHP</option>
            <option value="Laravel">Laravel</option>
            <option value="YII">YII</option>
            <option value="Zend">Zend</option>
            <option value="Symfony">Symfony</option>
            <option value="Phalcon">Phalcon</option>
            <option value="Slim">Slim</option>
            <option value="Codeigniter">Codeigniter</option>
            <option value="CakePHP">CakePHP</option>
            <option value="Laravel">Laravel</option>
            <option value="YII">YII</option>
            <option value="Zend">Zend</option>
            <option value="Symfony">Symfony</option>
            <option value="Phalcon">Phalcon</option>
            <option value="Slim">Slim</option>
            <option value="Codeigniter">Codeigniter</option>
            <option value="CakePHP">CakePHP</option>
            <option value="Laravel">Laravel</option>
            <option value="YII">YII</option>
            <option value="Zend">Zend</option>
            <option value="Symfony">Symfony</option>
            <option value="Phalcon">Phalcon</option>
            <option value="Slim">Slim</option>
          </select>
        </div>
        @include('pagination_data')
      </div>
    </div>
  </body>
</html>
<script>
  $(document).ready(function(){
    $('#framework').multiselect({
      nonSelectedText: 'Select Framework',
      enableFiltering: true,
      enableCaseInsensitiveFiltering: true,
      buttonWidth:'400px'
    });
    /*on pagination click*/
    $(document).on('click', '.pagination a', function(event){
      event.preventDefault(); 
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
    });
/*    function fetch_data(page)
    {
      $.ajax({
        url:"/pagination/fetch_data?page="+page,
        beforeSend : function() {
          $("#content").html('<img src="ajax-icon-from-www.ajaxload.info">');
        },
        success:function(data)
        {
          $('#table_data').html(data);
          console.log(data);
          
        }
      });
    }*/
    function fetch_data(page,sort_type="",sort_by="",search="",region="",channelType="",channel="",investment="",storeType="",mall=""){
      $.ajax({
          type: "post",
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
          success:function(data)
          {
            $('#table_data').html(data);
            console.log(data);
            
          }
      });
    }
  });
</script>