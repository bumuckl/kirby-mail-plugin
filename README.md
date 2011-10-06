**Woot? What is it?**

This is just a small extension for the kirby PHP Toolkit (kirby is veeery veeery nice, you should check it out at http://getkirby.com). This littel file provides a class for sending emails. Nothing more. Nothing less. No magic.

**Usage**

That's pretty easy. Require the file. Then there is actually only one method you can work with:

  mail::send($fromName, $fromEmail, $replyEmail, $to, $subject, $message, $footer = '', $type = 'text/html', $characterSet = 'utf-8');

But that's quite nice, isn't it? By the way, the method returns true when the mail was sent successfully. Otherwise it returns false.