<?php

namespace Config;

use \PDO;

class Database
{
    private $dbh;
    private $config = [
        'dbdriver' => 'pgsql',
        'dbhost' => 'localhost',
        'dbport' => '5432',
        'dbname' => 'pfoto',
        'dbuser' => 'pfoto_user',
        'dbpass' => 'pfoto_password'
    ];

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        try {
            $this->dbh = new PDO($this->config['dbdriver'] . ':host=' . $this->config['dbhost'] . ';dbname=' . $this->config['dbname'], $this->config['dbuser'], $this->config['dbpass'], [
                PDO::ATTR_PERSISTENT => true
            ]);
        } catch (PDOException $e) {
            print "Error! " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function query($sql, $params)
    {
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($params);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}