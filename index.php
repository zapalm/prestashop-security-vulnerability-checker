<?php
/**
 * PrestaShop security vulnerability checker.
 *
 * @author    Maksim T. <zapalm@yandex.com>
 * @copyright 2019 Maksim T.
 * @license   https://opensource.org/licenses/MIT MIT
 * @link      https://github.com/zapalm/prestashop-security-vulnerability-checker GitHub
 * @link      https://prestashop.modulez.ru/en/tools-scripts/70-prestashop-security-vulnerability-checker.html Homepage
 *
 * @version 1.0.0
 *
 * This is the script, that checks vulnerabilities and prints a report.
 */

$configPath = dirname(__FILE__) . '/../config/config.inc.php';
if (false === file_exists($configPath)) {
    exit('Can not execute the tool. You should place the folder of this tool to the root of your PrestaShop installation directory.' . PHP_EOL);
}
require_once $configPath;
require_once __DIR__ . '/PrestaShopSecurityVulnerabilityChecker.php';

$checker = new \zapalm\PrestaShopSecurityVulnerabilityChecker();
$report  = $checker->check();
$checker->printReport($report);
