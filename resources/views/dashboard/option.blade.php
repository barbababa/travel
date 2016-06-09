@extends('layout.admin')
@push('links')
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css">
@endpush
@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">{{$option_set->option_group_name}}</div>
			<div class="panel-body">
				<table class="table">
				<thead>
					<tr>
						<th>Option Name</th>
						<th>Option Type</th>
						<th>Option Mandate</th>
					</tr>
				</thead>
				<tbody>
				@foreach($option_set->options as $option)
				<tr>
					<td>{{$option->option_name}}</td>
					<td>{{ucfirst($option->optionSet->type)}}</td>
					<td>{{$option->isRequired ? "True" : "False"}}</td>
				</tr>
				@endforeach

				<tr>
					<form action="">
						<td>
							<input type="text" name="option_name" id="" class="form-control" placeholder="Option Name" required="">
						</td>
						<td>
							<select name="option_type" id="" class="selectpicker" data-style="btn-primary" >
								@foreach($type_sets as $type)
									<option value="{{$type->id}}">{{ucfirst($type->type)}} <span class="text-info">{{$type->multiple ? "+": ""}}</span></option>
								@endforeach
							</select>
						</td>
						<td>
						<label class="radio-inline">
						<input type="radio" name="isRequired" value="false" checked="" > No
						</label>
						<label class="radio-inline">
							<input type="radio" name="isRequired" value="true" > Yes
							</label>
							<button class="btn btn-success btn">
								<i class="glyphicon glyphicon-plus"></i>
							</button>
						</td>
					</form>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div>
@stop

