<?php


class Connection
{
 public function DB(DBSqlFactory $DBSqlFactory) {
     $conDB = $DBSqlFactory->DBConnectionFactory();
     $recDB = $DBSqlFactory->DBRecordFactory();
     $queDB = $DBSqlFactory->DBQueryBuilderFactory();
 }
}