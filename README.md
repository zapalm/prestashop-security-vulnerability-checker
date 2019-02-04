# PrestaShop security vulnerability checker.
**The library and the tool to check PrestaShop for vulnerabilities.**

**The tool home page and the support page: [prestashop.modulez.ru][5].**
The full description, how to use and the stable release for download are available there.

### Report example
```
PrestaShop security vulnerability checker (homepage: https://prestashop.modulez.ru/en/tools-scripts/70-prestashop-security-vulnerability-checker.html)
------
[Not exists] : CVE-2018-19355 : Security vulnerability (7.5/10) with the module OrderFiles. Solution: update the module, remove or fix vulnerable files. There is no information about vulnerable OrderFiles module version and about the author of the module. If you have the information, contact with me: https://prestashop.modulez.ru/en/contact-us?id_product=70
[Possible] : CVE-2018-19126 | CVE-2018-19125 | CVE-2018-19124 : Security vulnerability (7.5/10). The explanation: https://prestashop.modulez.ru/en/news/51
[Possible] : CVE-2018-13784 : Security vulnerability (6.4/10). More info: http://build.prestashop.com/news/prestashop-1-7-3-4-1-6-1-20-maintenance-releases/
[Not exists] : CVE-2018-8824 | CVE-2018-8823 : Security vulnerability (7.5/10) with the "Responsive Mega Menu (Horizontal+Vertical+Dropdown) Pro" module v1.0.32. Solution: update the module, remove or fix vulnerable files. The module on Addons: https://addons.prestashop.com/en/menu/20464-responsive-mega-menu-horizontaldropdownswipesticky.html
[Exists] : CVE-2018-7491 : Security vulnerability (5/10). This is UI-Redressing/Clickjacking vulnerability. More info: https://github.com/PrestaShop/PrestaShop/pull/8807
[Exists] : CVE-2018-5682 : Security vulnerability (5/10). The attacker can review existent emails of employees and customers. More info: http://forge.prestashop.com/browse/BOOM-4613
[Exists] : CVE-2018-5681 : Security vulnerability (3.5/10). More info: http://forge.prestashop.com/browse/BOOM-4612
[Not exists] : CVE-2015-1175 : Security vulnerability (4.3/10) with the BlockLayered module v2.0.5 or less. Solution: update the module, remove or fix vulnerable files. The module on GitHub: https://github.com/PrestaShop/blocklayered
[Not exists] : CVE-2012-6641 : Security vulnerability (5/10) with the SoColissimo module in PrestaShop before 1.4.7.2. Solution: update the module, remove or fix vulnerable files. The module on GitHub: https://github.com/quadra-informatique/SoColissimo-3.x-Prestashop
[Possible] : CVE-2012-5801 | CVE-2012-5800 | CVE-2012-5799 : Security vulnerability (5.8/10) with the PayPal, ebay, CanadaPost (Presto-Changeo) modules. There is no information about issue for a concrete version of PrestaShop and a version of PayPal, ebay, CanadaPost (Presto-Changeo) modules. More info: https://www.cs.utexas.edu/~shmat/shmat_ccs12.pdf
[Not exists] : CVE-2011-4545 : Security vulnerability (5/10). Solution: update your PHP to at least the last of 5.6. More info: https://www.dognaedis.com/vulns/DGS-SEC-7.html
[Not exists] : CVE-2011-4544 : Security vulnerability (4.3/10) with the "mondialrelay" module and "ajaxfilemanager" script. More info: https://www.dognaedis.com/vulns/DGS-SEC-5.html
[Not exists] : CVE-2011-3796 : Security vulnerability (5/10). Allows remote attackers to obtain sensitive information via a direct request to a .php file, which reveals the installation path in an error message.
[Not exists] : Outdated version of PrestaShop : Actual versions of PrestaShop are 1.6 and 1.7. Solution: upgrade. How to do this: https://prestashop.modulez.ru/en/services/28-prestashop-upgrade-to-newest-16-17-or-thirtybees.html
------
ATTENTION: Your website has 6 security issues!
The vulnerability with the score of 10 is the most dangerous and vice versa for the score of 1.
```

## How to check for vulnerabilities
Copy the folder (`prestashopSecurityVulnerabilityChecker`) to your PrestaShop root directory (where there are `index.php`, `init.php` and so on).
Run this script via web browser or from console, for example:
1) Run from browser: `http://localhost/prestashopSecurityVulnerabilityChecker/index.php`
2) Run from console: `php index.php`

## Installation
Add the dependency directly to your `composer.json` file:
```
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/zapalm/prestashopSecurityVulnerabilityChecker"
  }
],
"require": {
  "php": ">=5.2",
  "zapalm/prestashopSecurityVulnerabilityChecker": "dev-master"
},
```
See usage example in `index.php` script.

## How to help the project grow and get updates
* **Become the [patron][2]** to help me work more for supporting and improving this project.
* Report an issue.
* Give me feedback or contact with me.
* Give the star to the project.
* Contribute to the code.

## Contributing to the code

### Requirements for code contributors 

Contributors **must** follow the following rules:

* **Make your Pull Request on the *dev* branch**, NOT the *master* branch.
* Do not update a helper version number.
* Follow [PSR coding standards][1].

### Process in details for code contributors

Contributors wishing to edit the project's files should follow the following process:

1. Create your GitHub account, if you do not have one already.
2. Fork the project to your GitHub account.
3. Clone your fork to your local machine.
4. Create a branch in your local clone of the project for your changes.
5. Change the files in your branch. Be sure to follow [the coding standards][1].
6. Push your changed branch to your fork in your GitHub account.
7. Create a pull request for your changes **on the *dev* branch** of the project.
   If you need help to make a pull request, read the [Github help page about creating pull requests][4].
8. Wait for the maintainer to apply your changes.

**Do not hesitate to create a pull request if even it's hard for you to apply the coding standards.**

[1]: https://www.php-fig.org/psr/
[2]: https://www.patreon.com/zapalm
[4]: https://help.github.com/articles/about-pull-requests/
[5]: https://prestashop.modulez.ru/en/tools-scripts/70-prestashop-security-vulnerability-checker.html