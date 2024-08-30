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
                <div class="box-nome box-item">
                    <label for="name ">Nome Completo:</label>
                    <input type="text" name="name" id="name" class="tr"><br>
                </div>

                <div class="box-telefone box-item">
                    <label for="phone">Telefone:</label>
                    <input type="tel" name="phone" id="phone" placeholder="(xx) xxxxx-xxxx"><br>
                </div>

                <div class="box-endereco-hotel box-item">
                    <label for="home_address">Endereço do Hotel:</label>
                    <input type="text" name="home_address" id="home_address"><br>
                </div>

                <div class="box-nome-hotel box-item">
                    <label for="hotel_name">Nome do Hotel:</label>
                    <input type="text" name="hotel_name" id="hotel_name"><br>
                </div>

                <div class="box-endereco-residencial box-item">
                    <label for="hotel_address">Endereço:</label>
                    <input type="text" name="hotel_address" id="hotel_address"><br>
                </div>

                <div class="box-data-passeio box-item">
                    <label for="">Data do Passeio:</label>
                    <input type="date" name="" id=""><br>
                </div>

                <div class="box-numero-pessoa box-item">
                    <label for="person_quantity">Número de Pessoas:</label>
                    <input type="number" name="person_quantity" id="person_quantity"><br>
                </div>

                <div class="box-select-passeio box-item">
                    <label for="tour_name">Selecione o Passeio:</label>
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
