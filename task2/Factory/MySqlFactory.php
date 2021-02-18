<?php


class MySqlFactory extends DBSqlFactory
{
    public function DBConnectionFactory(): DbSql{
        $DBConnection = new MySql();
        return $DBConnection->DBConnection();

    }
    public function DBRecordFactory(): DbSql{
        $DBRecord = new MySql();
        return $DBRecord->DBRecord();
    }
    public function DBQueryBuilderFactory(): DbSql{
        $DBQueryBuilder = new MySql();
        return $DBQueryBuilder->DBQueryBuilder();
    }
}