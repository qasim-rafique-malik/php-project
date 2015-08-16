







<?php
/**
 * Created by PhpStorm.
 * User: Qasim
 * Date: 8/14/2015
 * Time: 2:31 PM
 */

//echo  getenv( "HTTP_USER_AGENT" );

//echo $_SERVER['PHP_SELF']; exit;

#!/usr/bin/perl

# HTTP Header
print "Content-Type:application/octet-stream; name=\"FileName\"\r\n";
print "Content-Disposition: attachment; filename=\"FileName\"\r\n\n";

# Actual File Content
open( FILE, "<FileName" );
while(read(FILE, $buffer, 100) )
{
    print("$buffer");
}