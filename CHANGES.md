moodle-local_profiletheme
=========================

Changes
-------

### v5.0-r1

* 2025-04-14 - Prepare compatibility for Moodle 5.0.

### v4.5-r1

* 2024-10-14 - Upgrade: Adopt changes from MDL-82183 and use new \core\output\html_writer
* 2024-10-14 - Upgrade: Adopt changes from MDL-81960 and use new \core\url class
* 2024-10-14 - Upgrade: Adopt changes from MDL-81818 to remove old bootstrap classes
* 2024-10-14 - Upgrade: Adopt changes from MDL-81920 and use new \core\lang_string class.
* 2024-10-14 - Upgrade: Adopt changes from MDL-82183 and use new \core\output\tabtree class.
* 2024-10-14 - Upgrade: Adopt changes from MDL-82183 and use new \core\output\tabobject class.
* 2024-10-14 - Upgrade: Adopt changes from MDL-82183 and use new \core\output\single_select class.
* 2024-10-14 - Upgrade: Adopt changes from MDL-82183 and use new \core\output\theme_config class.
* 2024-10-14 - Upgrade: Adopt changes from MDL-66903 and use new \core\component class.
* 2024-10-07 - Prepare compatibility for Moodle 4.5.

### v4.4-r2

* 2024-10-27 - Tests: Call parent setup() function when instantiating PHPUnit tests.

### v4.4-r1

* 2024-08-24 - Development: Rename master branch to main, please update your clones.
* 2024-08-20 - Prepare compatibility for Moodle 4.4.

### v4.3-r3

* 2024-08-20 - Remove duplicate header on overview page.

### v4.3-r2

* 2024-08-11 - Add section for scheduled tasks to README
* 2024-08-11 - Updated Moodle Plugin CI to latest upstream recommendations

### v4.3-r1

* 2023-10-20 - Prepare compatibility for Moodle 4.3.

### v4.2-r1

* 2023-09-01 - Prepare compatibility for Moodle 4.2.

### v4.1-r2

* 2023-10-14 - Add automated release to moodle.org/plugins
* 2023-10-14 - Make codechecker happy again
* 2023-10-10 - Updated Moodle Plugin CI to latest upstream recommendations
* 2023-04-30 - Tests: Updated Moodle Plugin CI to use PHP 8.1 and Postgres 13 from Moodle 4.1 on.

### v4.1-r1

* 2023-01-21 - Prepare compatibility for Moodle 4.1.
* 2022-11-28 - Updated Moodle Plugin CI to latest upstream recommendations

### v4.0-r1

* 2022-07-12 - Slightly improve the rule management GUI
* 2022-07-12 - Fix Behat tests which broke with Moodle 4.0
* 2022-07-12 - Make codechecker happy again
* 2022-07-12 - Prepare compatibility for Moodle 4.0.

### v3.11-r3

* 2022-07-10 - Add Visual checks section to UPGRADE.md
* 2022-07-10 - Add Capabilities section to README.md

### v3.11-r2

* 2022-06-26 - Make codechecker happy again
* 2022-06-26 - Updated Moodle Plugin CI to latest upstream recommendations
* 2022-06-26 - Add UPGRADE.md as internal upgrade documentation
* 2022-06-26 - Update maintainers and copyrights in README.md.

### v3.11-r1

* 2021-06-13 - Prepare compatibility for Moodle 3.11.
* 2021-06-13 - Added definition for a PHPUnit local_profiletheme_testsuite.

### v3.10-r2

* 2021-02-05 - Make codechecker fully happy
* 2021-02-05 - Move Moodle Plugin CI from Travis CI to Github actions

### v3.10-r1

* 2021-01-09 - Fix PHPUnit function declaration for Moodle 3.10.
* 2021-01-09 - Prepare compatibility for Moodle 3.10.
* 2021-01-06 - Change in Moodle release support:
               For the time being, this plugin is maintained for the most recent LTS release of Moodle as well as the most recent major release of Moodle.
               Bugfixes are backported to the LTS release. However, new features and improvements are not necessarily backported to the LTS release.
* 2021-01-06 - Improvement: Declare which major stable version of Moodle this plugin supports (see MDL-59562 for details).

### v3.9-r1

* 2020-08-17 - Prepare compatibility for Moodle 3.9.

### v3.8-r1

* 2020-02-13 - Prepare compatibility for Moodle 3.8.

### V3.7-r1

* 2019-07-03 - Make codechecker happy.
* 2019-07-03 - Adjusted PHP unit tests.
* 2019-07-03 - Fixed broken behat tests and renamed the feature file.
* 2019-07-02 - Prepare compatibility for Moodle 3.7.

### v3.6-r1

* 2019-03-26 - Replaced deprecated Behat test steps.
* 2019-03-26 - Check compatibility for Moodle 3.6, no functionality change.
* 2019-03-25 - Add the fact that we are listening to \core\event\user_loggedinas event to README.md.
* 2018-12-05 - Changed travis.yml due to upstream changes.

### v3.5-r3

* 2018-07-10 - Support for testing if text fields or textareas are (not) empty.

### v3.5-r2

* 2018-07-03 - Bugfix: Login As did not show the right theme - Thanks to Jason Maur

### v3.5-r1

* 2018-05-30 - Minor change to README.md to respect recently added core cohort themes.
* 2018-05-30 - Check compatibility for Moodle 3.5, no functionality change.

### v3.4-r2

* 2018-05-16 - Implement Privacy API.

### v3.4-r1

* 2017-12-12 - Check compatibility for Moodle 3.4, no functionality change.
* 2017-12-05 - Added Workaround to travis.yml for fixing Behat tests with TravisCI.

### v3.3-r1

* 2017-11-23 - Check compatibility for Moodle 3.3, no functionality change.
* 2017-11-08 - Updated travis.yml to use newer node version for fixing TravisCI error.

### v3.2-r6

* 2017-06-25 - Make codechecker happier

### v3.2-r5

* 2017-05-19 - Improve Bugfix: String in language pack didn't work for Moodle installed in subdirectories

### v3.2-r4

* 2017-05-19 - Bugfix: String in language pack didn't work for Moodle installed in subdirectories - Credits to David Mudrák
* 2017-05-29 - Add Travis CI support

### v3.2-r3

* 2017-05-22 - Make Moodle repo prechecker even happier

### v3.2-r2

* 2017-05-21 - Update code documentation - Credits to Davo Smith

### v3.2-r1

* 2017-05-05 - Improve README.md
* 2017-04-28 - Add several features before publishing the plugin in the Moodle plugin repo
* 2017-01-18 - Check compatibility for Moodle 3.2, no functionality change
* 2017-01-12 - Move Changelog from README.md to CHANGES.md
* 2016-09-20 - Add several features before publishing the plugin in the Moodle plugin repo
* 2016-04-18 - Initial version
