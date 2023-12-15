<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrastructure Form</title>
</head>
<style>
    .container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
  }
  
  form{
    
  }
  .form-group {
    margin-bottom: 10px;
  }
  
  label {
    display: block;
    font-weight: bold;
  }
  
  input[type="nom"], input[type="lieu"], input[type="file"] {
    width: 100%;
    padding: 5px;
    border-radius: 3px;
    border: 1px solid #ccc;
  }
  
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    color: white;
    background-color: #4CAF50;
    border: none;
    display:center;
    font-size: 16px;
    cursor: pointer;
    border-radius: 3px;
 
  }
</style>

<body>
    
    <div class="container">
        <h2>Infrastructure Form</h2>
        @if(Session::has('structures_created'))
    <div class="alert alert-success" role="alert">
        {{Session::get('structures_created')}}
   </div>
    @endif
        <form method="POST" action="{{route('struc.addsubmit')}}">
            @csrf
           
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="nom" name="nom" placeholder="Infrastructure name">
            </div>
            <div class="form-group">
                <label for="lieu">Lieu:</label>
                <input type="lieu" name="lieu" placeholder="Infrastructure location">
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" accept="image/*">
            </div>
            <input type="submit" value="Submit">
             <!-- <a href="/post_infrastructure" class="btn-success"></a>  -->
        </form>
   
        </div>

    
</body>
</html>