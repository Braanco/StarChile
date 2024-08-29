<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarChile</title>

    <link rel="stylesheet" href="../style/style_list.css">
</head>

<body>

    <header>
        <div class="container_titulo">
            <h1 class="title_projeto">Star Chile</h1>
        </div>

        <div class="container_menu">
            <a href="../index.php">Home</a>
            <a href="../view/register.php">Registro de Viagem</a>
            <a href="../view/list.php">Lista de Viagem</a>
        </div>
    </header>


    <main class="corpo_conteudo">
        <div class="box-titulo">
            <h1 class="titulo-list">List of Tours</h1>
        </div>
        <div class="container">
            <script>
                (function(d, s, id) {
                    if (d.getElementById(id)) {
                        if (window.__TOMORROW__) {
                            window.__TOMORROW__.renderWidget();
                        }
                        return;
                    }
                    const fjs = d.getElementsByTagName(s)[0];
                    const js = d.createElement(s);
                    js.id = id;
                    js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

                    fjs.parentNode.insertBefore(js, fjs);
                })(document, 'script', 'tomorrow-sdk');
            </script>

            <div class="tomorrow"
                data-location-id="019111"
                data-language="EN"
                data-unit-system="METRIC"
                data-skin="light"
                data-widget-type="upcoming"
                style="padding-bottom:22px;position:relative;">
                <a
                    href="https://www.tomorrow.io/weather-api/"
                    rel="nofollow noopener noreferrer"
                    target="_blank"
                    style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;">
                    <img
                        alt="Powered by the Tomorrow.io Weather API"
                        src="https://weather-website-client.tomorrow.io/img/powered-by.svg"
                        width="500"
                        height="18" />
                </a>
            </div>
        </div>


        <table class="table text-black table-white table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Home Address</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Hotel Address</th>
                    <th scope="col">Tour Date</th>
                    <th scope="col">Person Quantity</th>
                    <th scope="col">Tour Name</th>
                    <th scope="col">Final Price</th>
                </tr>
            </thead>
            <tbody>
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
                    $stmt2 = $db->prepare('SELECT * FROM tour_names WHERE tourName = :tour_name');
                    $stmt2->bindParam(':tour_name', $row['tour_name']);
                    $result2 = $stmt2->execute();
                    //$tourName = $result2->fetchArray(SQLITE3_ASSOC)['name'];
                    $result2Array = $result2->fetchArray(SQLITE3_ASSOC);
                    echo $tourName;
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

                    echo "</tr>";
                }


                $db->close();
                ?>
            </tbody>
        </table>


        <p><a href="register.php">Back to Home</a></p>
        <script>
            function deleteTour(id) {

                var confirmDelete = confirm("Are you sure you want to delete this tour?");

                if (confirmDelete) {

                    window.location.href = "delete_tour.php?id=" + id;
                }
            }
        </script>
    </main>
</body>

</html>