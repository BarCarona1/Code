
<!DOCTYPE html>
<html>
    <body>
        <table>
            <tr>
                <th> date </th>
                <th> time </th>
                <th> room </th>
                <th> air quality </th>
            </tr>
            <?php 
            $conn = mysqli_connect("10.101.100.22", "BARKER", "BARKER", "BAQ");
            $sql = "SELECT * FROM date";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>" . $row["date"] . "</td><td>" . $row["time"] . "</td><td>" . $row["room"] . "</td><td>" . $row["airq"] . "</td></tr>"; 
                }
            } else{
                echo "No Results";
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>

            