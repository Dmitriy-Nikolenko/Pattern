<?php


class MySql implements DbSql
{
    public function DBConnection(){
        echo "Соединение с базой MySQL" . PHP_EOL;
    }
    public function DBRecord(){
        echo "Запись таблицы базы данных MySQL" . PHP_EOL;
    }
    public function DBQueryBuilder(){
        echo "Запросы к базе данных MySQL" . PHP_EOL;
    }

}