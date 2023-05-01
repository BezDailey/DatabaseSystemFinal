<?php
    class TeamsDB {
        public static function create_team($name) {
            $db = DATABASE::getDB();
            $query = "INSERT INTO Teams (Name) VALUES (:Name)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":Name", $name);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error= $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function update_team($id, $name) {
            $db = DATABASE::getDB();
            $query = "UPDATE Teams
                        SET Name = :name
                        WHERE TeamID = :id";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":id", $id);
                $statement->bindValue(":Name", $name);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function delete_team($id) {
            $db = DATABASE::getDB();
            $query = "DELETE FROM Teams WHERE TeamID = :id";
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

        public static function get_teams() {
            $db = Database::getDB();
            $query = "SELECT * FROM Teams";
            try {
                $statement = $db->prepare($query);
                $statement->execute();
                $rows = $statement->fetchAll();
                $statement->closeCursor();
                return $rows;
            } catch (PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }
    }
?>