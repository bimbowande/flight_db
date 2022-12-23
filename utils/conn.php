<?php


 interface ConnInfo{

    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const DBPASS = '';
    const DBNAME = 'flight_management_db';

    public function connect();
 }