<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Dynamic Tabs Example</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div role="tabpanel">
      <ul class="nav nav-tabs" role="tablist">
          @foreach ($category as $item)
            <li role="presentation" class="{{ $item->id == 1 ? 'active' : '' }}">
              <a href="#home{{ $item->id }}" aria-controls="home" role="tab" data-toggle="tab">{{ $item->name }}</a>
            </li>
          @endforeach
      </ul>
      <div class="tab-content">
       @foreach ($category as $item)
            <div role="tabpanel" class="tab-pane fade in {{ $item->id == 1 ? 'active' : '' }}" id="home{{ $item->id }}">
              <ul>
			    @foreach ($item->products as $element)
                   <li> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> {{ $element->name}}</li>
                @endforeach
			 
              </ul>
            </div>
       @endforeach
      </div>
    </div>
	<script>
	$(document).ready(function(){
	  $(".nav-tabs a").click(function(){
		$(this).tab('show');
	  });
	  $('.nav-tabs a').on('shown.bs.tab', function(event){
		var x = $(event.target).text();         // active tab
		var y = $(event.relatedTarget).text();  // previous tab
		//$(".act span").text(x);
		//$(".prev span").text(y);
	  });
	});
	</script>
    </body>
</html>