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

####Chrome Logger####
1. Install the **Chrome Logger** extension for **Google Chrome** from: https://chrome.google.com/extensions/detail/noaneddfkdjfnfdakjjmocngnfkfehhd
2. Click the extension icon in the browser to enable it for the current tab's domain

####ChromePhp####
3. Put **ChromePhp.php** somewhere in your PHP include path

####twilio-php####
You can install twilio-php via Git or by downloading the source.
#####Via Git:#####
Open a command line, navigate to your project directory and use this command to clone the **twilio-php** library:

`$ git clone https://github.com/twilio/twilio-php.git`

#####Via ZIP file:#####
[Click here to download the source (.zip)](https://github.com/twilio/twilio-php/zipball/master) which includes all dependencies.

Once you download the library, move the twilio-php folder to your project directory and then include the library file in **twilio-sms.php**:

`require '/path/to/twilio-php/Services/Twilio.php';`

##Reporting Issues##

We would love to hear your feedback. Report issues using the [Github Issue Tracker](https://github.com/iamchriswick/Twilio-SMS-PHP-AJAX-Quickstart/issues).
