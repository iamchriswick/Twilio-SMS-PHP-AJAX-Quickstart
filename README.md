##Overview##
**Quickstart Twilio/SMS/PHP/AJAX** is a plugin that lets you send SMS message via the [Twilio REST API](https://www.twilio.com/docs/api/rest) with PHP and AJAX.

With Twilio you can programatically send, receive an track SMS worldwide, by building intelligent SMS logic into your web applications over local, toll-free, and short-code numbers globally from one API. [Read more about Twilio SMS](https://www.twilio.com/sms)

##Requirements##
[Twilio Account](https://www.twilio.com/try-twilio)

Webserver running **PHP** 5.2.3 or later

[twilio-php](https://github.com/twilio/twilio-php/)

###Recommendations###
While it's not required, we recommend that you use **Google Chrome** during development for logging variables, with **ChromePhp**, to the console.

[Google Chrome](http://www.google.com/chrome/)

[Chrome Logger](https://github.com/ccampbell/chromelogger)

[ChromePhp](https://github.com/ccampbell/chromephp)

##Installation##
Thees instructions presume that you have **Google Chrome** installed to your system and that you already have a Webserver with **PHP** set up.

###Automatic###
####Step 1: Chrome Logger####
1. Install the **Chrome Logger** extension for **Google Chrome** from: https://chrome.google.com/extensions/detail/noaneddfkdjfnfdakjjmocngnfkfehhd
2. Click the extension icon in the browser to enable it for the current tab's domain

####Step 2: Twilio-SMS-PHP-AJAX-Quickstart####
You can install **Twilio-SMS-PHP-AJAX-Quickstart** via Git or by downloading the source.
#####Via Git:#####
Open a command line and use this command to clone the **Twilio-SMS-PHP-AJAX-Quickstart**:

`$ git clone https://github.com/iamchriswick/Twilio-SMS-PHP-AJAX-Quickstart.git`

#####Via ZIP file:#####
[Click here to download the source (.zip)](https://github.com/iamchriswick/Twilio-SMS-PHP-AJAX-Quickstart/archive/master.zip) which includes all dependencies.

Once you download the library, you're good to Step 5!

###Manual###
####Step 1: Chrome Logger####
1. Install the **Chrome Logger** extension for **Google Chrome** from: https://chrome.google.com/extensions/detail/noaneddfkdjfnfdakjjmocngnfkfehhd
2. Click the extension icon in the browser to enable it for the current tab's domain

####Step 2: Twilio-SMS-PHP-AJAX-Quickstart####
You can install **Twilio-SMS-PHP-AJAX-Quickstart** via Git or by downloading the source.
#####Via Git:#####
Open a command line and use this command to clone the **Twilio-SMS-PHP-AJAX-Quickstart**:

`$ git clone https://github.com/iamchriswick/Twilio-SMS-PHP-AJAX-Quickstart.git`

#####Via ZIP file:#####
[Click here to download the source (.zip)](https://github.com/iamchriswick/Twilio-SMS-PHP-AJAX-Quickstart/archive/master.zip) which includes all dependencies.

####Step 3: ChromePhp####
1. Put **ChromePhp.php** somewhere in your project directory.
2. Include **ChromePhp.php** in **twilio-sms.php**:

```php
include '/path/to/ChromePhp.php';
```

####Step 4: twilio-php####
**4.1:** You can install twilio-php via Git or by downloading the source.
#####Via Git:#####
Open a command line, navigate to your project directory and use this command to clone the **twilio-php** library:

`$ git clone https://github.com/twilio/twilio-php.git`

#####Via ZIP file:#####
[Click here to download the source (.zip)](https://github.com/twilio/twilio-php/zipball/master) which includes all dependencies.

Once you download the library, move the twilio-php folder to your project directory.

**4.2:** Include the library file in **twilio-sms.php**:

```php
require '/path/to/twilio-php/Services/Twilio.php';
```

##Reporting Issues##

We would love to hear your feedback. Report issues using the [Github Issue Tracker](https://github.com/iamchriswick/Twilio-SMS-PHP-AJAX-Quickstart/issues).
