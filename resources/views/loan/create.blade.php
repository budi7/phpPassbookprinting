<html>
	<div>
		<form action="{{route('loan.store')}}" method="POST">
		    {{ csrf_field() }}

		    <div>
		        Name: <input type="text" name="name">
		    </div>

		    <div>
		        Ammount: <input type="text" name="ammount">
		    </div>

		    <div>
		        <input type="submit" value="Register">
		    </div>
		</form>
	</div>
</html>