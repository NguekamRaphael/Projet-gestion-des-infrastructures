<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DB CRUD Operation</title>
</head>

<style>
    .container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }
  
  .form-group {
    margin-bottom: 10px;
  }
  
  label {
    display: block;
    font-weight: bold;
  }
  
  input[type="text"], input[type="email"], input[type="matricule"], input[type="motif"], input[type="date"] {
    width: 100%;
    padding: 5px;
    border-radius: 3px;
    border: 1px solid #ccc;
  }
  
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 3px;
  }
</style>

<body>
  <div class="container">
    <h2>Infrastructure Reservation</h2>
    @if(Session::has('post_created'))
    <div class="alert alert-success" role="alert">
{{Session::get('post_created')}}
</div>
    @endif
    <form method="post" action="{{route('post.addsubmit')}}">
        @csrf
      <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" name="nom">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email">
      </div>
      <div class="form-group">
        <label for="matricule">Matricule:</label>
        <input type="matricule" name="matricule">
      </div>
      <div class="form-group">
        <label for="motif">Motif:</label>
        <input type="text" name="motif">
      </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" name="date" >
      </div>
      <div class="form-group">
        <label for="status">Status:</label>
        <input type="status" name="status" >
      </div> 
      <input type="submit" value="Reserve">
    </form>
  </div>
</body>
</html>