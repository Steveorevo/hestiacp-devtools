# hestiacp-devtools
A plugin for Hestia Control Panel (via [hestiacp-pluginable](https://github.com/steveorevo/hestiacp-pluginable)) that automatically furnishes composer, wp-cli, etc. for each user account that is created. This plugin will automatically configure the command line so that users can use the commands `composer` and `wp` from the shell. 

&nbsp;
## Installation
HestiaCP-NodeApp requires an Ubuntu based installation of [Hestia Control Panel](https://hestiacp.com) in addition to an installation of [HestiaCP-Pluginable](https://github.com/steveorevo/hestiacp-pluginable) to function; please ensure that you have first installed pluginable on your Hestia Control Panel before proceeding. Switch to a root user and simply download and unzip this project and move the folder to the `/usr/local/hestia/plugins` folder. It should appear as a subfolder with the name `devtools`, i.e. `/usr/local/hestia/plugins/devtools`.

Be sure to logout/login to Hestia Control Panel to complete installation.
