<?php


class OracleSqlFactory extends DBSqlFactory
{
    public function DBConnectionFactory(): DbSql{
        $DBConnection = new OracleSql();
        return $DBConnection->DBConnection();

    }
    public function DBRecordFactory(): DbSql{
        $DBRecord = new OracleSql();
        return $DBRecord->DBRecord();
    }
    public function DBQueryBuilderFactory(): DbSql{
        $DBQueryBuilder = new OracleSql();
        return $DBQueryBuilder->DBQueryBuilder();
    }
}