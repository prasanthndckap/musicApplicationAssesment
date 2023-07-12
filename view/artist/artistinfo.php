
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link rel="stylesheet" href="/style.css">
</head>

<br>





<div class="projects">
    <table>
        <tr>

            <th>Projects</th>

        </tr>

        <div class="btninfodiv">
            <form action="/addnewsong" method="post">
                <button class="infotn" type ="submit"  name="artistid" value="<?php echo $artistid ?>">Create new song</button>
            </form>

        </div>

        <div class="btninfodiv">
            <form action="/CreateNewartist" method="post">
                <button class="infotn" type ="submit" >Create new artist</button>
            </form>

        </div>

        <?php foreach ($getsongname as $index => $info):?>
            <form action="/getsongs" method="post">
                
                <button class="infotn" type ="submit" value="<?php echo $info->id ?>"> <?php echo $info->song_name ?></button>
            </form>

            <div class="">

            </div>

        <?php endforeach;?>

        <h2> artist images</h2>
        <?php foreach ($artistinfo as $index => $info):?>


            <div class="projectlist">
                <img src="<?php echo $info->image_path ?>" />
            </div>

        <?php endforeach;?>
</div>


</body>
</html>

