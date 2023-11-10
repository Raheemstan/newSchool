<?php
class DatabaseHandler
{
    private $link;

    public function __construct()
    {
        include('dbc.php');

        // Create a new instance of mysqli
        $this->link = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

        if ($this->link->connect_error) {
            die("Connection failed: " . $this->link->connect_error);
        }

        // Set character set to UTF-8 to handle special characters properly
        $this->link->set_charset("utf8");
    }

    public function startTransaction()
    {
        $this->link->begin_transaction();
    }

    public function commitTransaction()
    {
        $this->link->commit();
    }

    public function rollbackTransaction()
    {
        $this->link->rollback();
    }

    public function executeQuery($sql)
    {
        return $this->link->query($sql);
    }

    public function insertData($table, $data)
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

        $stmt = $this->link->prepare($sql);

        if ($stmt) {
            $types = "";
            $values = array();
            foreach ($data as $value) {
                $types .= $this->getType($value);
                $values[] = $value;
            }

            $stmt->bind_param($types, ...$values);

            if ($stmt->execute()) {
                $stmt->close();
                return "Data inserted successfully!";
            } else {
                $stmt->close();
                return "Error: " . $stmt->error;
            }
        } else {
            return "Error in preparing the SQL statement.";
        }
    }

    public function fetchData($table, $condition = null)
    {
        $sql = "SELECT * FROM $table";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $this->link->query($sql);

        if ($result) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            $result->close();
            return $data;
        } else {
            return "Error: " . $this->link->error;
        }
    }

    public function updateData($table, $data, $condition)
    {
        $setClause = implode('=?, ', array_keys($data)) . '=?';
        $sql = "UPDATE $table SET $setClause WHERE $condition";

        $stmt = $this->link->prepare($sql);

        if ($stmt) {
            $types = "";
            $values = array();
            foreach ($data as $value) {
                $types .= $this->getType($value);
                $values[] = $value;
            }

            $stmt->bind_param($types, ...$values);

            if ($stmt->execute()) {
                $stmt->close();
                return "Data updated successfully!";
            } else {
                $stmt->close();
                return "Error: " . $stmt->error;
            }
        } else {
            return "Error in preparing the SQL statement.";
        }
    }

    public function deleteData($table, $condition)
    {
        $sql = "DELETE FROM $table WHERE $condition";

        if ($this->link->query($sql)) {
            return "Data deleted successfully!";
        } else {
            return "Error: " . $this->link->error;
        }
    }

    public function closeConnection()
    {
        $this->link->close();
    }

    private function getType($value)
    {
        if (is_int($value)) {
            return "i";
        } elseif (is_float($value)) {
            return "d";
        } else {
            return "s";
        }
    }
}

// // Example usage of transactions
// $db = new DatabaseHandler();

// try {
//     // Start the transaction
//     $db->startTransaction();

//     // Example for each CRUD operation within the transaction:
//     // Insert data
//     $data = array(
//         'first_name' => 'John',
//         'last_name' => 'Doe',
//         // Add other fields
//     );
//     $insertResult = $db->insertData('students', $data);

//     // Update data
//     $updateData = array('first_name' => 'UpdatedName');
//     $updateResult = $db->updateData('students', $updateData, 'student_id = 1');

//     // Commit the transaction
//     $db->commitTransaction();

//     echo "Transaction successfully committed!";
// } catch (Exception $e) {
//     // An error occurred, rollback the transaction
//     $db->rollbackTransaction();
//     echo "Transaction failed: " . $e->getMessage();
// } finally {
//     // Close the database connection
//     $db->closeConnection();
// }

// // Example usage of fetchData
// $table = 'students';
// $condition = 'class_id = 1';  // Specify your condition if needed

// $data = $db->fetchData($table, $condition);

// if (!is_array($data)) {
//     echo "Error fetching data: $data";
// } else {
//     // Process the fetched data
//     print_r($data);
// }

// // Example usage of deleteData
// $table = 'students';
// $condition = 'student_id = 3';  // Specify your condition for deletion

// $deleteResult = $db->deleteData($table, $condition);

// if (strpos($deleteResult, 'Error') !== false) {
//     echo "Error deleting data: $deleteResult";
// } else {
//     echo "Deletion successful: $deleteResult";
// }
