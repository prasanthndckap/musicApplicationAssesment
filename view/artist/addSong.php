<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create project</title>
</head>
<body>
<div class = "createtask">
    <form action="/createSong" method="post" enctype="multipart/form-data">
        <h2>Create Task</h2>
        <label for="project">song name</label>
        <input type="text"  id ="project" name ="song_name">
        <label for="project"> description</label>
        <input type="text"  id ="project" name ="song_desccription">
        <label for="project">uploadimage</label>
        <input type="file"  id ="project" name ="Image[]" multiple="multiple" required>

        <button type ="submit">Create New Artist</button>
    </form>
</div>


</body>
</html>

