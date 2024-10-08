<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star chile</title>
    <link rel="stylesheet" href="../style/style_registro.css">
</head>

<body>
    <header>
        <div class="container_titulo">
            <h1 class="title_projeto">Star Chile</h1>
        </div>

        <div class="container_menu">
            <a href="../index.php">Home</a>
            <a href="#">Registro de Viagem</a>
            <a href="../view/list.php">Lista de Viagem</a>
        </div>
    </header>
    <main class="corpo_conteudo">
        <div class="box-titulo">
            <h2 class="titulo-registro">Registro de Viagem</h2>
        </div>
        <div class="box-form">
            <form action="../controller/TourRegisterController.php" method="post" class="form-registro">
                <div class="container">

                    <label for="name" class="lbl-name lbl-item">Nome Completo:</label>
                    <input type="text" name="name" id="name" class="tr"><br>



                    <label for="phone" class="lbl-phone lbl-item">Telefone:</label>
                    <input type="tel" name="phone" id="phone" placeholder="(xx) xxxxx-xxxx"><br>



                    <label for="home_address" class="lbl-home lbl-item">Endereço do Hotel:</label>
                    <input type="text" name="home_address" id="home_address"><br>



                    <label for="hotel_name" class="lbl-hotel lbl-item">Nome do Hotel:</label>
                    <input type="text" name="hotel_name" id="hotel_name"><br>



                    <label for="hotel_address" class="lbl-hotel-address lbl-item">Endereço:</label>
                    <input type="text" name="hotel_address" id="hotel_address"><br>



                    <label for="tour_date" class="lbl-date lbl-item">Data do Passeio:</label>
                    <input type="date" name="tour_date" id="tour_date"><br>



                    <label for="person_quantity" class="lbl-quantity lbl-item">Número de Pessoas:</label>
                    <input type="number" name="person_quantity" id="person_quantity"><br>



                    <label for="tour_name" class="lbl-tour lbl-item">Selecione o Passeio:</label>
                    <select name="tour_name" id="tour_name">
                        <option value="0">selecione a opção...</option>
                        <option value="1">VALLE NEVADO PANORAMICO, 300.00</option>
                        <option value="2">VALLE NEVADO PUESTA DE SOL, 320.00</option>
                        <option value="3">RAFTING EN CAJÓN DEL MAIPO, 480.00 </option>
                        <option value="4">TERMAS DE COLINA + EMBALSE EL YESO, 350.00 </option>
                        <option value="5">TERMAS DE COLINA, 290.00</option>
                        <option value="6">EMBALSE EL YESO, 260.00</option>
                    </select><br>

                </div>
                <div class="box-submit">
                    <input type="submit" value="Registrar">
                </div>
            </form>

        </div>
        <p class="lead">

        </p>

    </main>
</body>

</html>