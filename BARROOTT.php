
<!DOCTYPE html>
<html>
    <body>
        <table>
            <tr>
                <th> date </th>
                <th> time </th>
                <th> air quality </th>
                <th> room </th>
            </tr>
            <?php 
            $conn = mysqli_connect("localhost", "BARKER", "BARKER", "BAQ");
            $sql = "SELECT * FROM tbl_airq";
            $result = $conn-> query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>" . $row["date"] . "</td><td>" . $row["time"] . "</td><td>" . $row["airq"] . "</td><td>" . $row["room"] . "</td></tr>"; 
                }
            } else{
                echo "No Results";
            }
            $conn-> close();
            ?>
        </table>
    </body>
</html>

            