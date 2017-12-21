<?php
    namespace RedMind\Dialog\Dal;
    class Notice
    {
        private $model;
        
        public function setModel($model) {
            $this->model = $model;
        }
        
        public function getModel() {
            return $this->model;
        }
        
        public function insert() {
            // inserten in database
            $db = new \PDO('mysql:host=localhost;dbname=vos;', 'msahri', '');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $feedback = 'Alles loopt gesmeerd...';
            try {
                $sqlStatement = 'INSERT INTO Notice(Subject, Code, Message, Start, End, Source) VALUES(:subject, :code, :message, :start, :end, :source)';
                $statement = $db->prepare($sqlStatement);
                $statement->bindValue(':subject', $this->model->getSubject(), \PDO::PARAM_STR);
                $statement->bindValue(':code', $this->model->getCode(), \PDO::PARAM_STR);
                $statement->bindValue(':message', $this->model->getMessage(), \PDO::PARAM_STR);
                $statement->bindValue(':start', $this->model->getStart(), \PDO::PARAM_STR);
                $statement->bindValue(':end', $this->model->getEnd(), \PDO::PARAM_STR);
                $statement->bindValue(':source', $this->model->getSource(), \PDO::PARAM_STR);
                $statement->execute();
                $insertId = $db->lastInsertId();
                $stmt = $db->query('SELECT * FROM Notice');
                $row_count = $stmt->rowCount();
                $feedback = "Aantal rijen in tabel: $row_count";
                // stop nieuwe Id in Id veld van Notice
                $this->model->setId($insertId);
            }
                catch (PDOException $e) {
                    $feedback = "Foutmelding: {$e->getMessage()}";
            }
            return $feedback;
        }
    }