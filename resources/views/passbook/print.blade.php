
<style>
	@page {
	  size: A4;
	  margin: 0;
	}

	@media print{    
	    .print-hide{
	        color: transparent !important;
	    }
		html, body {
			width: 210mm;
			height: 297mm;
		}	    
	}
    .last-printed {
    	color: green;
		font-weight: bold; 
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ elixir('js/app.js') }}"></script>

<div id="printSection">
	<table width="100%" class="table">
	    <thead>
	        <tr class="print-hide">
	        	@if(count($datas) > 0)
					@foreach ($datas[0] as $key => $data)
			            <th>{{$key}}</th>
					@endforeach
				@endif
	        </tr>
	        <tbody>
				@foreach ($datas as $key => $data)
				    <tr class="{{ $key < $flag ? 'print-hide' : '' }} {{ $key == $flag -1 ? 'last-printed' : '' }}"">
						@foreach ($data as $dt)
				        <td style="text-align: center;">
							{{ $dt }}
						</td>
						@endforeach
				    </tr>	
				@endforeach
			</tbody>
		</thead>
	</table>
</div>

<a href="javascript:void(0)" id="triggerPrint">Print</a>

<script>
	$('#triggerPrint').click(function(){
		//call print function
	   $("#printSection").print(/*options*/);
	});
</script>