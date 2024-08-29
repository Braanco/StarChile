<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera os dados do formulário
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $homeAddress = $_POST["home_address"];
  $hotelName = $_POST["hotel_name"];
  $hotelAddress = $_POST["hotel_address"];
  $tourDate = $_POST["tour_date"];
  $personQuantity = $_POST["person_quantity"];
  $tourNameId = $_POST["tour_name"];  // Corrigido para usar $tourNameId

  // Abre o banco de dados SQLite (certifique-se de ter permissão para escrever no diretório)
  $db = new SQLite3('../database.db');

  // Cria a tabela se não existir
  $db->exec('CREATE TABLE IF NOT EXISTS tours (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT,
        phone TEXT,
        home_address TEXT,
        hotel_name TEXT,
        hotel_address TEXT,
        tour_date DATE,
        person_quantity INTEGER,
        tour_name INTEGER,
        final_price REAL,
        FOREIGN KEY (tour_name) REFERENCES tour_names(id)
    )');

  // Insere os dados na tabela
  $stmt = $db->prepare('INSERT INTO tours (name, phone, home_address, hotel_name, hotel_address, tour_date, person_quantity, tour_name)
                          VALUES (:name, :phone, :home_address, :hotel_name, :hotel_address, :tour_date, :person_quantity, :tour_name)');

  $stmt->bindValue(':name', $name, SQLITE3_TEXT);
  $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
  $stmt->bindValue(':home_address', $homeAddress, SQLITE3_TEXT);
  $stmt->bindValue(':hotel_name', $hotelName, SQLITE3_TEXT);
  $stmt->bindValue(':hotel_address', $hotelAddress, SQLITE3_TEXT);
  $stmt->bindValue(':tour_date', $tourDate, SQLITE3_TEXT); // SQLite3_DATE format is TEXT
  $stmt->bindValue(':person_quantity', $personQuantity, SQLITE3_INTEGER);
  $stmt->bindValue(':tour_name', $tourNameId, SQLITE3_INTEGER);

  $stmt->execute();

  // Obtém o ID do último registro inserido
  $lastInsertId = $db->lastInsertRowID();

  // Consulta o preço do passeio na tabela tour_names
  $stmt = $db->prepare('SELECT price FROM tour_names WHERE id = :tour_name');
  $stmt->bindValue(':tour_name', $tourNameId, SQLITE3_INTEGER);
  $result = $stmt->execute();
  $row = $result->fetchArray(SQLITE3_ASSOC);

  if ($row) {
    $price = $row['price'];

    // Atualiza o final_price multiplicando o preço pelo número de pessoas
    $finalPrice = $price * $personQuantity;

    // Atualiza o final_price na tabela tours
    $stmt = $db->prepare('UPDATE tours SET final_price = :final_price WHERE id = :last_insert_id');
    $stmt->bindValue(':final_price', $finalPrice, SQLITE3_FLOAT);
    $stmt->bindValue(':last_insert_id', $lastInsertId, SQLITE3_INTEGER);

    $stmt->execute();

    echo "Cadastro realizado com sucesso!";
  } else {
    echo "Erro: O ID do passeio não foi encontrado.";
  }

  // Fecha a conexão com o banco de dados
  $db->close();
}

include_once '../view/list.php';
