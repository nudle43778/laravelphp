<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leren werken met PDO</title>
</head>
<body>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=vos;', 'msahri', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {   
                $feedback = 'Alles is OK...';
                $statement = $db->prepare("INSERT INTO Notice(Subject, Message) VALUES(:subject, :message)");
                $statement->bindValue(':subject', 'Inserten param', PDO::PARAM_STR);
                $statement->bindValue(':message', 'Gelukt', PDO::PARAM_STR);
                $statement->execute();
                $insertId = $db->lastInsertId();
                $stmt = $db->query('SELECT * FROM Notice');
                $row_count = $stmt->rowCount();
                $feedback = "Aantal rijen in tabel: $row_count";
            
        } catch (PDOException $e) {
            $feedback = "Foutmelding:{$e->getMessage()}";
        }
        

    ?>
    <label for=""><?php echo $feedback;?></label>
</body>
</html>