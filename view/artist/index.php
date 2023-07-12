
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link rel="stylesheet" href="/style.css">
</head>

<br>

<!--<a href="./views/user/create.php"> create new one</a>-->



<div class="projects">
    <table>
        <tr>
            <!--            <th rowspan>id</th>-->
            <th>Projects</th>

        </tr>
        <?php foreach ($getartistinfo as $index => $artist):?>

            <tr>
                <div class="projectlist">
                    <td>
                        <form action="/artistinfo" method="post">
<!--                            <img src="--><?php //echo $artist->artist_name ?><!--" />-->
                            <!--                        <input type="button" name="" value="--><?php //echo $user->project_name?><!--">-->
                            <button type="submit" class="projectlist" name="artistid" value="<?php echo $artist->id; ?>"><?php echo $artist->artist_name;?></button>
                        </form>
                    </td>
                </div>
            </tr>
        <?php endforeach;?>


        <div class="btninfodiv">
            <form action="/CreateNewartist" method="post">
                <button class="infotn" type ="submit" >Create new artist</button>
            </form>

        </div>


<!--        --><?php //foreach ($artistinfo as $index => $info):?>
<!---->
<!---->
<!--                <div class="projectlist">-->
<!--                    <img src="--><?php //echo $info->image_path ?><!--" />-->
<!--                </div>-->
<!---->
<!--        --><?php //endforeach;?>
</div>



</body>
</html>

