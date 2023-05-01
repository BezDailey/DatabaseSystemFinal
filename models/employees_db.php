<?php
    class EmployeesDB {
        public static function create_employee($type, $username, $password, $teamID) {
            $db = DATABASE::getDB();
            $query = "INSERT INTO Employees (Type, Username, Password, TeamID) VALUES (:Type, :Username, :Password, :TeamID)";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":Type", $type);
                $statement->bindValue(":Username", $username);
                $statement->bindValue(":Password", $password);
                $statement->bindValue(":TeamID", $teamID);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error= $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function update_employee($id, $type, $username, $password, $teamID) {
            $db = DATABASE::getDB();
            $query = "UPDATE Employees
                        SET Type = :Type, Username = :Username, Password = :Password, TeamID = :TeamID
                        WHERE EmployeeID = :id";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":id", $id);
                $statement->bindValue(":Type", $type);
                $statement->bindValue(":Username", $username);
                $statement->bindValue(":Password", $password);
                $statement->bindValue(":TeamID", $teamID);
                $statement->execute();
                $statement->closeCursor();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function delete_employee($id) {
            $db = DATABASE::getDB();
            $query = "DELETE FROM Employees WHERE EmployeeID = :id";
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

        public static function is_employee($username, $password) {
            $db = Database::getDB();
            $query = "SELECT Password FROM Employees WHERE Username = :username";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":username", $username);
                $statement->execute();
                $row = $statement->fetch();
                $statement->closeCursor();
                return ($row["Password"] == $password);
            } catch(PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function is_admin($username) {
            $db = Database::getDB();
            $query = "SELECT Type FROM Employees WHERE Username = :username";
            try {
                $statement = $db->prepare($query);
                $statement->bindValue(":username", $username);
                $statement->execute();
                $row = $statement->fetch();
                $statement->closeCursor();
                return ($row["Type"] == "admin");
            } catch(PDOException $e) {
                $error = $e->getMessage();
                Database::display_db_error($error);
            }
        }

        public static function get_employees() {
            $db = Database::getDB();
            $query = "SELECT * FROM Employees";
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