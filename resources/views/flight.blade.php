@extends('app_flight')

@section('content')

<script type="text/javascript">
	$(function(){
		$('select').material_select();
		$('.datepicker').pickadate({
			selectMonths: true,
			selectYears: 15
		})
	});

	function check_type(){
		var tipe = $('#type').val();
		if(tipe == "OW"){
			$('#ganti').prop('disabled', true);
		} else {
			$('#ganti').prop('disabled', false);
		}
	}
</script>

	<div class="row">
		<div class="col s12">
			<div class="row">
				<div class="col s2">
					<select name="from">
						@foreach($airport as $key)
							<option value="{{$key->airport_code}}">
							{{$key->airport_name}} {{$key->airport_code}}
							</option>
						@endforeach
					</select>
				</div>
				<div class="col s2">
						<select name="to">
						@foreach($airport as $key)
							<option value="{{$key->airport_code}}">
							{{$key->airport_name}} {{$key->airport_code}}
							</option>
						@endforeach
					</select>
					</div>
				<div class="row">
					<div class="col s2">
						<select name="to" id="type"  onchange="check_type()">
							<option value="OW">Oneway</option>
							<option value="RT">Roundtrip</option>
						</select>
					</div>
					<div class="col s2">
						<input type="text" class="for_date datepicker" name="depart_date" placeholder="berangkat">
					</div>
					<div class="col s2">
						<input type="text" class="for_date datepicker" name="return_date" id="ganti" placeholder="pulang">
					</div>
					<div class="col s1">
						<select name="adult" id="adult">
							@for($i=1;$i<5;$i++)
							<option value="{{$i}}">{{$i}}</option>
							@endfor
						</select>
					</div>
					<div class="col s1">
						<select name="child" id="child">
							@for($i=0;$i<5;$i++)
							<option value="{{$i}}">{{$i}}</option>
							@endfor
						</select>
					</div>
					<div class="col s1">
						<select name="infant" id="infant">
							@for($i=0;$i<5;$i++)
							<option value="{{$i}}">{{$i}}</option>
							@endfor
						</select>
					</div>
					<div class="col s3">
						<span class="btn">Search</span>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection