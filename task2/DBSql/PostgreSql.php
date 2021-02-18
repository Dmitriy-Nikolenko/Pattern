<?php


class PostgreSql implements DbSql
{
    public function DBConnection(){
        echo "Соединение с базой PostgreSQL" . PHP_EOL;
    }
    public function DBRecord(){
        echo "Запись таблицы базы данных PostgreSQL" . PHP_EOL;
    }
    public function DBQueryBuilder(){
        echo "Запросы к базе данных PostgreSQL" . PHP_EOL;
    }

}