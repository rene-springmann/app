<?php

$di = \Core\Services\DI::getInstance();

/*
 * Singleton Instance (shared)
 */

$di->set('asset-manager',           \Core\Services\AssetManager::class, true);
$di->set('cache-factory',           \Core\Services\CacheFactory::class, true);
$di->set('command-factory',         \Core\Services\CommandFactory::class, true);
$di->set('config',                  \Core\Services\Config::class, true);
$di->set('database-factory',        \Core\Services\DatabaseFactory::class, true);
$di->set('exception-handler',       \App\Handler\ExceptionHandler::class, true);
$di->set('logger',                  \Core\Services\Logger::class, true);
$di->set('query-builder-factory',   \Core\Services\QueryBuilderFactory::class, true);
$di->set('request',                 \Core\Services\Request::class, true);
$di->set('response',                \Core\Services\Response::class, true);
$di->set('route',                   \Core\Services\Route::class, true);
$di->set('shutdown-handler',        \App\Handler\ShutdownHandler::class, true);
$di->set('stdio',                   \Core\Services\Stdio::class, true);

/*
 * Multiple Instance (not shared)
 */

$di->set('collection',              \Core\Services\Collection::class, false);
$di->set('date-time',               \Core\Services\DateTime::class, false);
$di->set('migrator',                \Core\Services\Migrator::class, false);
$di->set('plugin-manager',          \Core\Services\PluginManager::class, false);
$di->set('view',                    \Core\Services\View::class, false);
$di->set('view-compiler',           \Core\Services\ViewCompiler::class, false);
