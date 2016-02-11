<?php

class Config {

      public static function databaseConnection() {
      	     return [
	     	    "host"	=> "shirox",
	     	    "port"	=> "22",
	     	    "username"	=> "shirox",
	     	    "password"	=> "shirox",
	     	    "dbname"	=> "shirox",
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
}