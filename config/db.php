<?php

return [
    'class' => 'yii\db\Connection',
    //'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=acme',
    'username' => 'alex',
    'password' => 'rasdak21',
    'charset' => 'utf8',

/*
    'connectionString' => 
	'pgsql:host=localhost;port=5432;dbname=mediateca2',
    'username'=>'alex',
    'password'=>'rasdak21',
    'charset'=>'UTF8',
*/
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
