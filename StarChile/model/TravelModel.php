<?php
    // Open the SQLite database
    $db = new SQLite3('../database.db');

    // Select all records from the 'tours' table
    $stmt = $db->prepare('SELECT * FROM tours');
    $result = $stmt->execute();

    // Fetch each record as an associative array
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $id = $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];
        $homeAddress = $row['home_address'];
        $hotelName = $row['hotel_name'];
        $hotelAddress = $row['hotel_address'];
        $tourDate = $row['tour_date'];
        $personQuantity = $row['person_quantity'];
        $tourName = $row['tour_name'];
        $finalPrice = $row['final_price'];

        // Select the name of the tour from the 'tour_names' table
        $stmt2 = $db->prepare('SELECT name FROM tour_names WHERE name = :tour_name');
        $stmt2->bindParam(':tour_name', $row['tour_name']);
        $result2 = $stmt2->execute();
        //$tourName = $result2->fetchArray(SQLITE3_ASSOC)['name'];
        $result2Array = $result2->fetchArray(SQLITE3_ASSOC);
        echo "$tourName";
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$phone</td>";
        echo "<td>$homeAddress</td>";
        echo "<td>$hotelName</td>";
        echo "<td>$hotelAddress</td>";
        echo "<td>$tourDate</td>";
        echo "<td>$personQuantity</td>";
        echo "<td>$tourName</td>";
        echo "<td>$finalPrice</td>";
        echo "<td><button onclick=\"deleteTour($id)\">Delete</button></td>"; 
        echo "</tr>";
    }


    $db->close();
?>