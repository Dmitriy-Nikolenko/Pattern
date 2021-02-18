<?php


class PostreSqlFactory extends DBSqlFactory
{
    public function DBConnectionFactory(): DbSql{
        $DBConnection = new PostgreSql();
        return $DBConnection->DBConnection();

    }
    public function DBRecordFactory(): DbSql{
        $DBRecord = new PostgreSql();
        return $DBRecord->DBRecord();
    }
     public function DBQueryBuilderFactory(): DbSql{
         $DBQueryBuilder = new PostgreSql();
         return $DBQueryBuilder->DBQueryBuilder();
     }
}