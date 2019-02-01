<?php

// Color
$blue="\033[1;34m";
$cyan="\033[1;36m";
$okegreen="\033[92m";
$lightgreen="\033[1;32m";
$white="\033[1;37m";
$purple="\033[1;35m";
$red="\033[1;31m";
$yellow="\033[1;33m";

@system("clear");
print "\n";
print "$cyan      .===. (                                \n";
print "$cyan      |   |  )  $okegreen   _      ___ ____   _    __ \n";
print "$cyan      |   | (   $okegreen  | | /| / (_) _(_) (_)__/ / \n";
print "$cyan      |   | )   $okegreen  | |/ |/ / / _/ / / / _  /  \n";
print "$cyan      |   \*/   $okegreen  |__/|__/_/_//_(_)_/\_,_/   \n";
print "$cyan    ,'    //.   $yellow    Ayam Kampus Generator    \n";
print "$cyan   :~~~~~//~~;                               \n";
print "$cyan    `.  // .'   $white https://github.com/N1ght420 \n";
print "$cyan    `-------'                                \n\n";

print "$cyan Base$red >$white ";
$base = trim(fgets(STDIN));
print "$cyan Panjang Username$red >$white ";
$total = trim(fgets(STDIN));
print "$cyan Nama Kampus$red >$white ";
$univ = trim(fgets(STDIN));
print "$cyan Total Akun$red >$white ";
$jumlah = trim(fgets(STDIN));
print "\n";
function random($panjang){
    $karakter = '';
    $karakter .= '1234567890';
    $string = '';
    for ($i=0; $i < $panjang; $i++){
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter{$pos};
    }
    return $string;
}
for ($i=0; $i < $jumlah; $i++){
    $acak = $base.random($total-strlen($base));
    print "$cyan [$okegreen Username$cyan ]$red >$white ".$acak."@".$univ;print "\n";
    print "$cyan [$okegreen Password$cyan ]$red >$white ".$acak;print "\n\n";
}

?>
