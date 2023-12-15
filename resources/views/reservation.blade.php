<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<style>
    .container {
    width: 600px;
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
 .btn-info {
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
 .btn-danger {
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
        <h2>Table of all posts</h2>
        @if(Session::has('post_deleted'))
        <div class="alert alert-success" role="alert">
{{Session::get('post_deleted')}}
</div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Post Nom</th>
                    <th>Post Email</th>
                    <th>Post Matricule</th>
                    <th>Post Motif</th>
                    <th>Post Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->nom }}</td>
                    <td>{{ $post->email }}</td>
                    <td>{{ $post->matricule }}</td>
                    <td>{{ $post->motif }}</td>
                    <td>{{ $post->date }}</td>
                    <td>
                        <a href="/reservation/{{$post->id}}" class="btn-success">View</a>
                        <a href="/edit_post/{{$post->id}}" class="btn-info">Edit</a>
                        <a href="/delete_post/{{$post->id}}" class="btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</section>
</body>
</html>