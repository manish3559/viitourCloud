<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
</head>
<body>
	<form action="{{ url('index/store')}}" type="post" id="myform">
		<input type="hidden" name="id" value="@if(isset($update)) {{ $update->id }}  @endif" >
		<table border="2">
			<tr>
				<td>First Name</td>
					<td><input type="text" name="first_name" value="{{$update->first_name}}">
					@if($errors->has('first_name')) 
					    {{ $errors->first('first_name') }} 
					@endif
				</td>

			</tr>
			<tr>
				<td>Last Name</td>
					<td><input type="text" name="last_name" value="{{$update->last_name}}">
					@if($errors->has('last_name')) 
					    {{ $errors->first('last_name') }} 
					@endif
				</td>

			</tr>

			<tr>
				<td>DOB</td>
					<td><input type="dob" name="dob" value=" {{$update->dob}} ">
					@if($errors->has('dob')) 
					    {{ $errors->first('dob') }} 
					@endif
				</td>

			</tr>

			<tr>
				<td>email</td>
					<td><input type="text" name="email" value="{{$update->email}}">
					@if($errors->has('email')) 
					    {{ $errors->first('email') }} 
					@endif
				</td>

			</tr>

			<tr>
				<td>
				<button id="submit" type="submit">Submit</button>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	
	 $('#submit').click(function(){

    $('#myform').validate({ 
        rules: {
            name: {
                required: true
            },
            mobile: {
                required: true,
                minlength: 10,
                // digits: true
                numericOnly:true
            },
            gender: {
                required: true
            },
             email: {
                required: true,
                email: true
            },

        },
        submitHandler: function(form) {
        	 form.submit();
        }
    });

});
</script>