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
  
  .btn-accept {
    display: flex;
    flex-direction: space-between;
    color: white;
    background-color: red;
    border-radius: 5px;
    border: 1px solid #ccc;
    text-decoration: none;
    padding: 5px;
    justify-content: center;
 }
 .btn-delete {
    display: flex;
    flex-direction: space-between;
    color: white;
    background-color: green;
    border-radius: 5px;
    border: 1px solid #ccc;
    text-decoration: none;
    padding: 5px;
    justify-content: center;
 }
  
</style>

<body>
  <div class="container">
   Edit Posts

@if(Session::has('post_updated'))
        <div class="alert alert-success" role="alert">
{{Session::get('post_updated')}}
</div>
        @endif
    <form method="post" action="{{route('post.update')}}">
        @csrf
        <input type="hidden" name="maticule" value="{{$post->matricule}}">
      <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" value="{{$post->nom}}">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{$post->email}}">
      </div>
      <div class="form-group">
        <label for="matricule">Matricule:</label>
        <input type="matricule" name="matricule" value="{{$post->matricule}}">
      </div>
      <div class="form-group">
        <label for="motif">Motif:</label>
        <input type="text" name="motif" value="{{$post->motif}}">
      </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" name="date" value="{{$post->date}}">
      </div>
      <input type="submit" class="btn-accept" name="status" value="Accept" action="/updateStatus">
    <input type="submit" class="btn-delete" name="status" value="Delete" action="/deleteStatus">
    </form>
    
  </div>
</body>
</html>