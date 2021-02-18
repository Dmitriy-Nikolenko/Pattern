<?php


abstract class DBSqlFactory
{
    abstract public function DBConnectionFactory(): DbSql;
    abstract public function DBRecordFactory(): DbSql;
    abstract public function DBQueryBuilderFactory(): DbSql;
}