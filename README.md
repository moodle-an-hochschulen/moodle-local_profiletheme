moodle-local_profiletheme
=========================

[![Moodle Plugin CI](https://github.com/moodle-an-hochschulen/moodle-local_profiletheme/workflows/Moodle%20Plugin%20CI/badge.svg?branch=master)](https://github.com/moodle-an-hochschulen/moodle-local_profiletheme/actions?query=workflow%3A%22Moodle+Plugin+CI%22+branch%3Amaster)

Moodle plugin which lets admins deliver a certain theme based on a user's custom profile field


Requirements
------------

This plugin requires Moodle 4.4+


Motivation for this plugin
--------------------------

Moodle core provides multiple mechanims to deliver a certain theme in certain contexts: Course themes, category themes and the site theme. Additionally, users can be allowed to set their preferred theme as user theme in their user profile settings.

Now, larger or fragmented Moodle installations may have multiple themes installed with each theme targeted at a certain group of users. Course or category themes might not completely match the needs for this scenario and asking each user to set the theme he should use in his user profile settings himself is simply unprofessional overkill.

On the other hand these large or fragmented Moodle installations might already have some custom user profile fields - for example a field which contains a user's faculty - which can be leveraged to decide which theme a user should be delivered. This plugin implements a simple solution to deliver a certain theme based on a user's custom profile field.


Installation
------------

Install the plugin like any other plugin to folder
/local/profiletheme

See http://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins


Usage & Settings
----------------

After installing the plugin, it does not do anything to Moodle yet.

To configure the plugin and its behaviour, please visit:
Site administration -> Users -> Accounts -> Profile field based theme delivery.

There, you find two tabs:

### 1. View / edit rules

On this tab, you define the rules mapping custom user profile field values to the theme that will be delivered to a user.
The defined rules are processed in the order that they are displayed - the first matching rule will be used.

### 2. Add new rule

When you use the plugin for the first time and there are no rules yet, this is the tab you will be shown first.

On this tab, you can add a new rule mapping a custom user profile field's value to a theme that will be delivered to a user.

If no custom user profile fields have been defined in your Moodle installation yet, you need to define custom user profile fields first on /user/profile/index.php before you can add rules here.


Capabilities
------------

This plugin does not add any additional capabilities.


Scheduled Tasks
---------------

This plugin does not add any additional scheduled tasks.


How this plugin works / Pitfalls
--------------------------------

There is a defined order in Moodle which controls which mechanism finally decides about the theme to be delivered. This order is stored in `$CFG->themeorder` and defaults to course theme, category theme, session theme, user theme, site theme.

With the exception of session themes Moodle core already provides a GUI to make use of these theme delivery mechanims. As we didn't want to overrule any of the existing theme delivery mechanism, we went for the session theme mechanism to deliver a theme based on a user's custom profile field.

This plugin simply listens for the \core\event\user_loggedin and \core\event\user_loggedinas events, checks if there is an existing rule matching for the custom user profile field values of the user who has just logged in and sets the user's session theme to the theme configured in the rule. This theme is then delivered to this single user until he logs out (and terminates his session hereby). The next time the user logs in, the check is performed again and the session theme is set again.

Please note, as described above, there is a defined order for theme delivery mechanisms. Based on the default order, course themes and category themes will override the theme delivered by this plugin. If you want to avoid this, you have to set $CFG->themeorder manually in config.php to
`$CFG->themeorder = array('session', 'course', 'category', 'user', 'cohort', 'site');`.
Please have a look at config-dist.php for details about this setting.


Theme support
-------------

This plugin acts behind the scenes, therefore it should work with all Moodle themes.
This plugin is developed and tested on Moodle Core's Boost theme.
It should also work with Boost child themes, including Moodle Core's Classic theme. However, we can't support any other theme than Boost.


Plugin repositories
-------------------

This plugin is published and regularly updated in the Moodle plugins repository:
http://moodle.org/plugins/view/local_profiletheme

The latest development version can be found on Github:
https://github.com/moodle-an-hochschulen/moodle-local_profiletheme


Bug and problem reports / Support requests
------------------------------------------

This plugin is carefully developed and thoroughly tested, but bugs and problems can always appear.

Please report bugs and problems on Github:
https://github.com/moodle-an-hochschulen/moodle-local_profiletheme/issues

We will do our best to solve your problems, but please note that due to limited resources we can't always provide per-case support.


Feature proposals
-----------------

Due to limited resources, the functionality of this plugin is primarily implemented for our own local needs and published as-is to the community. We are aware that members of the community will have other needs and would love to see them solved by this plugin.

Please issue feature proposals on Github:
https://github.com/moodle-an-hochschulen/moodle-local_profiletheme/issues

Please create pull requests on Github:
https://github.com/moodle-an-hochschulen/moodle-local_profiletheme/pulls

We are always interested to read about your feature proposals or even get a pull request from you, but please accept that we can handle your issues only as feature _proposals_ and not as feature _requests_.


Moodle release support
----------------------

Due to limited resources, this plugin is only maintained for the most recent major release of Moodle as well as the most recent LTS release of Moodle. Bugfixes are backported to the LTS release. However, new features and improvements are not necessarily backported to the LTS release.

Apart from these maintained releases, previous versions of this plugin which work in legacy major releases of Moodle are still available as-is without any further updates in the Moodle Plugins repository.

There may be several weeks after a new major release of Moodle has been published until we can do a compatibility check and fix problems if necessary. If you encounter problems with a new major release of Moodle - or can confirm that this plugin still works with a new major release - please let us know on Github.

If you are running a legacy version of Moodle, but want or need to run the latest version of this plugin, you can get the latest version of the plugin, remove the line starting with $plugin->requires from version.php and use this latest plugin version then on your legacy Moodle. However, please note that you will run this setup completely at your own risk. We can't support this approach in any way and there is an undeniable risk for erratic behavior.


Translating this plugin
-----------------------

This Moodle plugin is shipped with an english language pack only. All translations into other languages must be managed through AMOS (https://lang.moodle.org) by what they will become part of Moodle's official language pack.

As the plugin creator, we manage the translation into german for our own local needs on AMOS. Please contribute your translation into all other languages in AMOS where they will be reviewed by the official language pack maintainers for Moodle.


Right-to-left support
---------------------

This plugin has not been tested with Moodle's support for right-to-left (RTL) languages.
If you want to use this plugin with a RTL language and it doesn't work as-is, you are free to send us a pull request on Github with modifications.


Maintainers
-----------

The plugin is maintained by\
Moodle an Hochschulen e.V.


Copyright
---------

The copyright of this plugin is held by\
Moodle an Hochschulen e.V.

Individual copyrights of individual developers are tracked in PHPDoc comments and Git commits.


Initial copyright
-----------------

This plugin was initially built by\
Davo Smith\
Synergy Learning UK\
www.synergy-learning.com

on behalf of\
Ulm University\
Communication and Information Centre (kiz)

and maintained and published by\
Ulm University\
Communication and Information Centre (kiz)\
Alexander Bias

It was contributed to the Moodle an Hochschulen e.V. plugin catalogue in 2022.
