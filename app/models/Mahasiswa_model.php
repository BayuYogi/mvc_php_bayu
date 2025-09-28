<?php
class Mahasiswa_model{
    // private $mhs=[
    //     [
    //         "nama"=> "bayu yogi",
    //         "nim"=>"2415354031",
    //         "email"=>"komangbayu@gmail.com",
    //         "jurusan"=>"teknologi infomasi"
    //     ],
    //     [
    //         "nama"=> "tarvis ",
    //         "nim"=>"2415354030",
    //         "email"=>"trvis@gmail.com",
    //         "jurusan"=>"teknik elektro"
    //     ],
    //     [
    //         "nama"=> "sayang",
    //         "nim"=>"2415354033",
    //         "email"=>"sayang@gmail.com",
    //         "jurusan"=>"teknik sipil"
    //     ]
    // ];

    private $dbh;
    private $stmt;
    
    public function __construct()
    {
        
        $dsn ='mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh=new PDO($dsn,'root','');
        }catch (PDOxception $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt=$this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}