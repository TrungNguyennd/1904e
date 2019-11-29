<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $i=0;
            while($i<=20){
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>Bản ghi số $i</td>";
                echo "</tr>";
                $i++;

            }
            ?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>