<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infras</title>
</head>

<style>
    .container {
    width: 600px;
    display:center;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead th {
    background-color: #ccc;
    padding: 8px;
    text-align: left;
}

tbody td {
    padding: 8px;
    border-bottom: 1px solid #ccc;
}
.btn-success {
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
 
</style>

    <body>
   
      <section>
        <div class="container">
         <h2>Table of all infrastructure</h2>
        
      
        <table>
            <thead>
                <tr>
                    <th>Post Nom</th>
                    <th>Post Lieu</th>
                    <th>Post Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $struc)
                <tr>
                    <td>{{ $struc->nom }}</td>
                    <td>{{ $struc->lieu }}</td>
                    <td>{{ $struc->photo }}</td>
                    <td>
                        @csrf
                        <!-- <a href="/post_infrastructure/{{$struc->nom}}" class="btn-success">Select</a> -->
                         <a href="/add_reservation" class="btn-success">Select</a> 
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </section>
    </body>
</html>