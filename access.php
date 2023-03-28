<?php

class database{

        private $PDO;

        public function __construct(){

          $this->PDO=new PDO('mysql:host=localhost;dbname=internlink;',
                             'root',
                             '4RAOULbernard168',
                                [
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::ATTR_PERSISTENT=> true,
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',]
                            );

        }

        public function getPDO(){
            return $this->PDO;
        }


        public function listedonnees($sql){
            $data=$this->PDO->prepare($sql);
            $data->execute();
            $datalist=$data->fetchAll(PDO::FETCH_OBJ);
            return $datalist;

        }

        public function tableconditionTable($sql,$condition){
            $data=$this->PDO->prepare($sql);
            $data->bindValue(1,$condition);
            $data->execute();
            $datalist=$data->fetchAll(PDO::FETCH_ASSOC);
            return $datalist;

        }

        public function requete($sql){
            $data=$this->PDO->prepare($sql);
            $data->execute();

        }



        public function requetecondition($sql,$condition){
            $data=$this->PDO->prepare($sql);
            $data->bindValue(1,$condition);
            $data->execute();

        }


        public function afficher($data){
            foreach ($data as $i) {
                    echo "<pre>";
                    var_dump($i);
                    echo "</pre>";
            }

        }


}



?>