<?php

// DI Container
define("DBCONNECTION_DI_KEY", "db");
define("TEMPLATE_ENGINE_DI_KEY", "view");
define("HTTP_RESPONSE_DI_KEY", "response");
define("HTTP_REQUEST_DI_KEY", "request");
define("SYSTEM_ROUTER_DI_KEY", "router");

// Database
define("MAX_CONNECT_TRY_COUNT", 1);
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

// Status
define("CATEGORY_STATUS_OFF", 0);
define("CATEGORY_STATUS_ON",  1);
