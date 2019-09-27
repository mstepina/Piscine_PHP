#!/usr/bin/php
<?PHP

	$fd = fopen("/var/run/utmpx", "rb");
    date_default_timezone_set("America/Los_Angeles");
    while ($who = fread($fd, 628))
    {

        $who = unpack("a256user/a4id/a32line/ipid/itype/itime", $who);
        if ($who['type'] == 7) // normal process
        {
            echo trim($who['user']).' ';
            echo trim($who['line']).' ';
            $time = date("M d H:i", $who['time']);
            $time = trim($time);
     
            echo "$time\n";
        }
    }
    fclose($fd); 

?>