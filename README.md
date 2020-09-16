# Olive-Useragent
User Agent Parsing module for the OliveWeb Framework

## Installation
In your OliveWeb application's composer.json file:
1. Add the Github repository to your repositories list: `"repositories": [{"type": "vcs", "url": "https://github.com/lukejbullard/olive-useragent"}]`

2. Add it to the require list: `"require": {"lbullard/olive-useragent": "dev-master"}`

3. Add it to the extra->installer-paths->./modules/{$name} list: `"extra": {"installer-paths": {"./modules/{$name}": ["lbullard/olive-useragent"]}}`

## Usage
1. Retrieve the module from the OliveWeb module manager: `$modules = Modules::getInstance(); $mod_useragent = $modules['useragent'];`
2. Retrieve the user agent info for the current user: `$ua = $mod_useragent->userAgentData();`
3. Alternatively, retrieve the user agent info for a user agent string: `$ua = $mod_useragent->userAgentData($userAgentString);`

The user agent info is in the array form as seen here: https://github.com/donatj/PhpUserAgent#usage

## Credits & Licensing
This uses donatj's PhpUserAgent package under the hood. https://github.com/donatj/PhpUserAgent

The wrapper was initially written by https://github.com/lukejbullard

Both are under the MIT license.
