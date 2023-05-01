<?php
    class QuoteRequestDB {
        public static function create_request($name, $email, $description) {
            $db = DATABASE::getDB();
            $query = "INSERT INTO QuoteRequests (RequestorName, RequestorEmail, RequestDescription) VALUES (:RequestorName, :RequestorEmail, :RequestDescription)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":RequestorName", $name);
                $statement->bindValue(":RequestorEmail", $email);
                $statement->bindValue(":RequestDescription", $description);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error= $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function update_request($id, $name, $email, $description) {
            $db = DATABASE::getDB();
            $query = "UPDATE QuoteRequests
                        SET RequestorName = :RequestorName, RequestorEmail = :RequestorEmail, RequestDescription = :RequestDescription
                        WHERE RequestID = :id";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":id", $id);
                $statement->bindValue(":RequestorName", $name);
                $statement->bindValue(":RequestorEmail", $email);
                $statement->bindValue(":RequestDescription", $description);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function delete_request($id) {
            $db = DATABASE::getDB();
            $query = "DELETE FROM QuoteRequests WHERE RequestID = :id";
            try {
                $statement = $db->prepare($query);
                $statement-> bindValue(":id", $id);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function get_requests() {
            $db = DATABASE::getDB();
            $query = 'SELECT * FROM QuoteRequests';
            try {
                $statement = $db->prepare($query);
                $statement->execute();
                $rows = $statement->fetchAll();
                $statement->closeCursor();
                foreach ($rows as $row){
                    $request = new Request($row[0], $row[1], $row[2], $row[3]);
                    $requests[] = $request;
                }
                return $requests;
            } catch (PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }
    }