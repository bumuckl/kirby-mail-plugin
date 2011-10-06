<?php

class mail {
 
 	public static $to = '';
 	public static $subject = '';
 	public static $message = '';
 	
 	public static $fromName = '';
 	public static $fromEmail = '';
 	public static $footer = '';
 	public static $replyEmail = '';
 	
 	public static $type = 'text/html';
 	public static $characterSet = 'utf-8';
    
    function send($fromName, $fromEmail, $replyEmail, $to, $subject, $message, $footer = '', $type = 'text/html', $characterSet = 'utf-8'){
		self::$to = $to;
		self::$subject = $subject;
		self::$message = $message;
		self::$footer = $footer;
		self::$fromName = $fromName;
		self::$fromEmail = $fromEmail;
		self::$replyEmail = $replyEmail;
		self::$type = $type;
		self::$characterSet = $characterSet;
	
    	$header = self::createHeader();
    	
        if ( @mail(self::$to,self::$subject,self::$message.self::$footer,$header) ){
            return true;
        } else {
            return false;
        }
    }
    
    function createHeader(){
    	$from   = "From: " . self::$fromName . " <" . self::$fromEmail . ">\r\n";
        $reply = "Reply-To: " . self::$replyEmail . "\r\n";    
        $params = "MIME-Version: 1.0\r\n";
        $params .= "Content-type: " . self::$type . "; charset=" . self::$characterSet . "\r\n";
        
        $header = $from.$reply.$params;
        return $header;
    }

};

?>