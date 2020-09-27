    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Notebook</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All tasks</h1>
            <a href="/posts/create" class="btn btn-success">Add tasks</a>
            <br><br>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $post):?>
                <tr>
                    <td><?=$post['id']?></td>
                    <td><?=$post['title']?></td>
                    <td>
                        <a href="posts/{{$post['id']}} " class="btn btn-info">show</a>
                    </td>
                    <td>
                        <a href="posts/{{$post['id']}}/edit" class="btn btn-warning">edit</a>
                    </td>
                    <td>
                        <form action="/posts/{{$post['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
