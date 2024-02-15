<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('add_blo')}}" method="post">
@csrf
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" value="John"><br>
  <label for="description">Description :</label><br>
  <input type="text" id="description" name="description" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
