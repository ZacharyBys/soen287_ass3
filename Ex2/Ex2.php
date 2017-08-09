<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="Ex2.css"></head>
<body>
    <!--TEST WITH QUERY STRING ?age=22&name=Obi+Wan+Kenobi&number=5435432156   --> 
    <table>
        <tr>
            <td>
                Name
            </td>
            <td class="answer">
            <?php
                if (empty($_GET)){
                    echo "No query string data found";
                } else {
                    echo $_GET['name'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Age
            </td>
            <td class="answer">
            <?php
                if (empty($_GET)){
                    echo "No query string data found";
                } else {
                    echo $_GET['age'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Phone Number
            </td>
            <td class="answer">
            <?php
                if (empty($_GET)){
                    echo "No query string data found";
                } else {
                    echo $_GET['number'];
                }
                ?>
            </td>
        </tr>
    </table>  
</body>
</html>