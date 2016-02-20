<?php

// DI
define("DBCONNECTION_DI_KEY", "db");
define("TEMPLATE_ENGINE_DI_KEY", "view");

// Database
define("MAX_CONNECT_TRY_COUNT", 5);
define("CONNECT_TRY_SLEEP_SECONDS", 2);

// Template
define("TEMPLATE_COMPILE_ALWAYS", true);

// Log
define("SYSTEM_LOG_PATH", "/var/log/app/kojima/kj_account_tool_log");
define("LOG_LEVEL_CRITICAL", 'critical');
define("LOG_LEVEL_WARNING", 'warning');
define("LOG_LEVEL_NOTICE", 'notice');
define("LOG_LEVEL_INFO", 'info');
define("LOG_LEVEL_DEBUG", 'debug');

// Contents
define("PROJECT_NAME", "児島測量設計株式会社");
