@extends('Layout.Adminlayout')
@section('content')


@if(session('message'))
		<div class="alert alert-success" id="alertMessage">
			{{session('message')}}
		</div>
@endif
<div class="container">
<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>skill</th>
									<th>image</th>
									<th>status</th>
                                    <th>edit</th>
                                    <th>delete</th>
								</tr>
							</thead>
							<tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($multioptions as $multioptions)
								<tr>
									<th scope="row">{{$i}}</th>
									<td>{{$multioptions->skill}}</td>
									<td><img src="{{$multioptions->image}}" alt="" style="height:50px;width:50px"></td>
									<td>
                                        @if($multioptions->status == 'active')
                                        <button class="btn btn-success" id="statusid{{$multioptions->id}}" onclick="optionstatus('{{$multioptions->id}}','{{$multioptions->status}}')">Active</button>
                                        @else
                                        <button class="btn btn-warning" id="statusid{{$multioptions->id}}" onclick="optionstatus('{{$multioptions->id}}','{{$multioptions->status}}')">Inactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">edit</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger">delete</button>
                                    </td>
								</tr>
                                @php
                                $i++;
                                @endphp
                                @endforeach
								<!-- <tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr> -->
							</tbody>
						</table>


    <div class="option">
        <a href="{{route('add-mul-option')}}" class="btn btn-info">Add Options</a>
    </div>
</div>
<!-- jqery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- sweet alert cdn-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- status change code -->

<script>
		function optionstatus(id ,status){
			// console.log('status',status);
			Swal.fire({
				title: "Are you sure to change status?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, update it!"
				}).then((result) => {
				if (result.isConfirmed) {
					var csrftoken=$("meta[name='csrf-token']").attr('content');
					$.ajax({
						url:"{{route('mul-option-status')}}",
						type:'post',
						data:{
								id:id,
								oldstatus:status,
								_token:csrftoken
						},
						success:function(data){
						if(data.status == 1){
							$("#statusid" + id).attr("class", "btn btn-success").attr("onclick", "optionstatus('" + id + "','active')").text("Active")


						}else if(data.status == 2){

							$("#statusid" + id).attr("class", "btn btn-warning").attr("onclick", "optionstatus('" + id + "','inactive')").text("Inactive")

						}else{
							Swal.fire({
								title: "Updated!",
								text: "Your faq has been Updated.",
								icon: "success"
							});
						}
							// window.location.href=""
						},
						error:function(error){
							Swal.fire({
								title: "update!",
								text: "Unable to update the Faq.",
								icon: "success"
							});
						}
					})
					
				}
			});
		}
	</script>


@endsection