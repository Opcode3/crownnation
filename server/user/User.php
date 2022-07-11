<?php

namespace app\user;

use app\config\DatabaseHandler;

    class User{

        private $dbconnector = null;
        private $table_name = 'users';

        function __construct(DatabaseHandler $db)
        {
            $this->dbconnector = $db->connection();
        }

        function getUsers()
        {
            $sql = "SELECT * FROM $this->table_name";
            $stmt = $this->dbconnector->prepare($sql);
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute([]);
            return $stmt->fetchAll();
        }

        function getUserByID(string $id)
        {
            $sql = "SELECT * FROM $this->table_name WHERE id=?";
            $stmt = $this->dbconnector->prepare($sql);
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        function getUserBySlug(string $slug)
        {
            $sql = "SELECT * FROM $this->table_name WHERE slug=?";
            $stmt = $this->dbconnector->prepare($sql);
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute([$slug]);
            return $stmt->fetch();
        }

        function setUser(array $new_user){

            if( $this->isUserExisting($new_user["phone"]) ) return true;

            $new_user["slug"] = $this->generateSlug();
            $sql = "INSERT INTO $this->table_name(slug, name, phone, email, gender, address, mstatus, password)
                    VALUES(:slug, :name, :phone, :email, :gender, :address, :mstatus, :password)";
            $stmt = $this->dbconnector->prepare($sql);
            $stmt->execute($new_user);
            if($stmt->rowCount() == 1){
                return $this->getUserBySlug($new_user["slug"]);
            }
            return false;
        }

        function updateUser(array $new_data){

            $sql = $this->generateUpdateSQL($new_data);

            // return [ $sql, $sql];

            if($sql[0] > 0){
                $stmt = $this->dbconnector->prepare($sql[1]);
                $stmt->execute($new_data);
                if($stmt->rowCount() == 1){
                    return $this->getUserByID($new_data["user_id"]);
                }
            }
            return false;

        }

        private function generateUpdateSQL(array $user_update_data): array{
            $sql = "UPDATE $this->table_name SET";
            $count = 0;

            foreach ($user_update_data as $key => $value) {
                
                switch ($key) {
                    case 'full_name':
                        $sql .= $count > 0 ? ",":"";
                        $sql .= " name= :full_name";
                        $count++;
                        break;

                    case 'phone_number':
                        if($this->isUserExisting($value) == false){
                            $sql .= $count > 0 ? ",":"";
                            $sql .= " phone= :phone_number";
                            $count++;
                        }
                        break;

                    case 'email_address':
                        $sql .= $count > 0 ? ",":"";
                        $sql .= " email= :email_address";
                        $count++;
                        break;

                    case 'sex':
                        $sql .= $count > 0 ? ",":"";
                        $sql .= " gender= :sex";
                        $count++;
                        break;

                    case 'location':
                        $sql .= $count > 0 ? ",":"";
                        $sql .= " address= :location";
                        $count++;
                        break;

                    case 'user_password':
                        $sql .= $count > 0 ? ",":"";
                        $sql .= " password= :user_password";
                        $count++;
                        break;
                    
                    default:
                        break;
                }
            }

            $sql .= " WHERE id=:user_id";

            return [$count, $sql];
        }

        function authUser(array $credential){
            $sql = "SELECT * FROM $this->table_name WHERE phone= :username AND password= :password";
            $stmt = $this->dbconnector->prepare($sql);
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute($credential);
            if($stmt->rowCount() == 1){
                return $stmt->fetch();
            }
            return false;
        }



        private function isUserExisting(string $phone_number): bool{
            $sql = "SELECT slug FROM $this->table_name WHERE phone = ?"; 
            $stmt = $this->dbconnector->prepare($sql);
            $stmt->execute([$phone_number]);
            return $stmt->rowCount() != 0;
        }


        private function generateSlug(): string{
            return uniqid(time());
        }
    }

?>