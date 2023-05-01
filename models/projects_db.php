<?php
    class ProjectsDB {
        public static function create_project($name, $email, $description, $teamID) {
            $db = DATABASE::getDB();
            $query = "INSERT INTO Projects (ClientName, ClientEmail, Description, TeamID) VALUES (:ClientName, :ClientEmail, :Description, :TeamID)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":ClientName", $name);
                $statement->bindValue(":ClientEmail", $email);
                $statement->bindValue(":Description", $description);
                $statement->bindValue(":TeamID", $teamID);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error= $e->getMessage();
                Database::display_db_error($error);
            }
        }

        // public static function update_project($id, $name, $email, $description, $teamID) {
        //     $db = DATABASE::getDB();
        //     $query = "UPDATE Projects
        //                 SET ClientName = :ClientName, ClientEmail = :ClientEmail, Description = :Description, TeamID = :TeamID
        //                 WHERE ProjectID = :id";
        //     try {
        //         $statement = $db->prepare($query);
        //         $statement->bindValue(":id", $id);
        //         $statement->bindValue(":ClientName", $name);
        //         $statement->bindValue(":ClientEmail", $email);
        //         $statement->bindValue(":Description", $description);
        //         $statement->bindValue(":TeamID", $teamID);
        //         $statement->execute();
        //         $statement->closeCursor();
        //     } catch (PDOException $e) {
        //         $error = $e->getMessage();
        //         Database::display_db_error($error);
        //     }
        // }

        // public static function delete_project($id) {
        //     $db = DATABASE::getDB();
        //     $query = "DELETE FROM Projects WHERE ProjectID = :id";
        //     try {
        //         $statement = $db->prepare($query);
        //         $statement-> bindValue(":id", $id);
        //         $statement->execute();
        //         $statement->closeCursor();
        //     } catch (PDOException $e) {
        //         $error = $e->getMessage();
        //         Database::display_db_error($error);
        //     }
        // }

        public static function get_projects() {
            $db = Database::getDB();
            $query = "SELECT * FROM Projects";
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