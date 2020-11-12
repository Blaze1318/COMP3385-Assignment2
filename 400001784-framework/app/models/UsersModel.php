<?php
   class UsersModel extends Model
   {
     use ModelMethods;

        public function makeConnection():void
        {
            $dbconnect = new DatabaseConnect();
            $this->databaseConnection = $dbconnect->createConnection();
        }
        public function findAll(): array
        {
            $stmt = $this->databaseConnection->prepare("SELECT * FROM users");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }

        public function findRecord(string $id):array
        {
            $stmt = $this->databaseConnection->prepare("SELECT * FROM users WHERE email ='".$id."'");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //var_dump($stmt->fetch());
            return $stmt->fetchAll();
        }

        public function registerUsers($name,$email,$password):void
        {
          echo strlen($password);
              $this->databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = "INSERT INTO users (name,email,password)
              VALUES ('".$name."', '".$email."', '".$password."')";
              $stmt = $this->databaseConnection->prepare($sql);
              $stmt->execute();
        }
    }
?>