<!doctype html>
<html>
	<head>
		<title>szablon</title>
		<meta charset="utf-8" />
         <link rel="stylesheet" href="styl.css" />
        
</head>
	<body>
        <?php
		$tab1 = array("Niedziela","Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota");
            $data = getdate();
            $rr = $data["year"];
            $mm = $data["mon"];
            if($mm<10) $mm="0".$mm;
            $dd = $data["mday"];
            if($dd<10) $dd="0".$dd;
            $dzien=$data["yday"]+1;
            $dz_mies=$data["mday"];
            $hh = $data["hours"];
            if($hh<10) $hh="0".$hh;
            $min= $data["minutes"];
            if($min<10) $min="0".$min;
            $ss = $data["seconds"];
            if($ss<10) $ss="0".$ss;
            $wd = $data["wday"];
            for($i=0;$i<6;$i++){
                if($i==$wd) {
                    $wd=$tab1[$i];
                    break;
                }
            }
            echo ($rr."-".$mm."-".$dd." " .$wd."<br />");
            echo($hh.":".$min.":".$ss."<br />");
            echo("Dzień w roku: ".$dzien."<br /><br />");
            echo date("Y-m-d")."<br />";
            echo date("G-i-s")."<br />";
            header('Refresh: 1; url=');//sposób 1
        ?>

	</body>
</html>

