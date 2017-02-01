<?php


namespace App;


class Db
{
    protected  $dbh;
    protected $dsn ='mysql:host=127.0.0.1;dbname=test';

    public function __construct()
    {
        $this->dbh = new \PDO($this->dsn,'root','');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;

    }

    public function query($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return  $sth->fetchAll();
        }
        return [];

    }

}