<?php

class Config {

      public static function databaseConnection() {
      	     return [
	     	    "host"	=> "localhost",
	     	    "port"	=> "3306",
	     	    "username"	=> "root",
	     	    "password"	=> "",
	     	    "dbname"	=> "kojima",
	     ];
      }

      public static function s3Config() {
      	     return [
	     	    "version" => "",
	     	    "region" => "",
	     	    "credentials" => [
		    		  "key" => "",
		    		  "secret" => "",
		    ],
	     ];
      }

      public static function getS3BucketName() {
      	     return "kojima";
      }

      public static function getTemplatesPath() {
      	     return "/views/";
      }
}