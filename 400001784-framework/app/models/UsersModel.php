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

        public function getCourses():array
        {
             $sql = "SELECT courses.course_name, courses.course_description, courses.course_image, instructors.instructor_name 
            FROM courses 
            INNER JOIN course_instructor ON courses.course_id = course_instructor.course_id 
            INNER JOIN instructors ON course_instructor.instructor_id = instructors.instructor_id 
            WHERE courses.course_id = users_courses.course_id";
            $stmt = $this->databaseConnection->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }
    }
?>