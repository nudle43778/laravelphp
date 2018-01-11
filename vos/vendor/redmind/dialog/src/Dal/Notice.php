<?php
    namespace RedMind\Dialog\Dal;
    class Notice
    {
        private $notice;
        private $noticeBoard;
        
        public function setnotice($notice) {
            $this->notice = $notice;
        }
        
        public function getnotice() {
            return $this->notice;
        }
        
        public function setNoticeBoard(\RedMind\Dialog\Model\INoticeBoard $noticeBoard) {
            $this->noticeBoard = $noticeBoard;
        }
        
        public function getNoticeBoard() {
            return $this->noticeBoard;
        }
        
        public function readingOne() {
             // een rij uit een tabel inlezen
            $db = new \PDO('mysql:host=localhost;dbname=vos;', 'msahri', '');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $feedback = 'Alles loopt gesmeerd...';
            try {
                $sqlStatement = 'SELECT * FROM Notice WHERE Id=:id';
                $statement = $db->prepare($sqlStatement);
                $statement->bindValue(':id', $this->notice->getId(), \PDO::PARAM_INT);
                $statement->execute();
                $row_count = $stmt->rowCount();
                if ($row_count > 0) {
                    $array = $statement->fetch(\PDO::FETCH_ASSOC);
                    $this->notice->setSubject($array['Subject']);
                    $this->notice->setCode($array['Code']);
                    $this->notice->setMessage($array['Message']);
                    $this->notice->setStart($array['Start']);
                    $this->notice->setEnd($array['End']);
                    $this->notice->setSource($array['Source']);
                   
                    $feedback = "Aantal rijen in tabel: $row_count";
                } else {
                   $feedback = "Rij met id {$this->notice->getId()} niet gevonden.";
                
                }
             }
                catch (PDOException $e) {
                    $feedback = "Foutmelding: {$e->getMessage()}";
            }
            return $feedback;           
        }
        
        public function readingAll () {
            $db = new \PDO('mysql:host=localhost;dbname=vos;', 'msahri', '');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $feedback = 'Alles loopt gesmeerd...';
            try {
                $array = $db->query('SELECT * FROM Notice');
                $row_count = $array->rowCount();
                $feedback = "Aantal rijen in tabel: $row_count";
                if ($row_count > 0) {
                    foreach ($array as $notice) {
                        $this->notice->setId($notice['Id']);
                        $this->notice->setSubject($notice['Subject']);
                        $this->notice->setCode($notice['Code']);
                        $this->notice->setMessage($notice['Message']);
                        $this->notice->setStart($notice['Start']);
                        $this->notice->setEnd($notice['End']);
                        $this->notice->setSource($notice['Source']);
                        $this->noticeBoard->pin($this->notice);
                    }
                    $feedback = "Aantal rijen in tabel: $row_count";
                } else {
                   $feedback = "Rij met id {$this->notice->getId()} niet gevonden.";
            
                }
             }
                catch (PDOException $e) {
                    $feedback = "Foutmelding: {$e->getMessage()}";
            }
            return $feedback;                 
        }
        
        public function insert() {
            // inserten in database
            $db = new \PDO('mysql:host=localhost;dbname=vos;', 'msahri', '');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $feedback = 'Alles loopt gesmeerd...';
            try {
                $sqlStatement = 'INSERT INTO Notice(Subject, Code, Message, Start, End, Source) VALUES(';
                $sqlStatement .= ':subject, :code, :message, :start, :end, :source)';
                $statement = $db->prepare($sqlStatement);
                $statement->bindValue(':subject', $this->notice->getSubject(), \PDO::PARAM_STR);
                $statement->bindValue(':code', $this->notice->getCode(), \PDO::PARAM_STR);
                $statement->bindValue(':message', $this->notice->getMessage(), \PDO::PARAM_STR);
                $statement->bindValue(':start', $this->notice->getStart(), \PDO::PARAM_STR);
                $statement->bindValue(':end', $this->notice->getEnd(), \PDO::PARAM_STR);
                $statement->bindValue(':source', $this->notice->getSource(), \PDO::PARAM_STR);
                $statement->execute();
                $insertId = $db->lastInsertId();
                // stop nieuwe Id in Id veld van Notice
                $this->notice->setId($insertId);
            }
                catch (PDOException $e) {
                    $feedback = "Foutmelding: {$e->getMessage()}";
            }
            return $feedback;
        }
    }