<?php


class OracleSql implements DbSql
{
    public function DBConnection(){
        echo "Соединение с базой OracleSQL" . PHP_EOL;
    }
    public function DBRecord(){
        echo "Запись таблицы базы данных OracleSQL" . PHP_EOL;
    }
    public function DBQueryBuilder(){
        echo "Запросы к базе данных OracleSQL" . PHP_EOL;
    }

}