echo "INSTALL BAHAN DULU COEG :V"
sleep 0.1
clear
pkg upgrade && pkg update
pkg install php
pkg install clang
pkg install python
pkg install python2
pip2 install mechanize
pip2 install bs4
pip2 install beautifulsoup
clear
echo "[!] Memasuki Gerbang [!]"
sleep 1
clear
echo "================"
echo "Pakai yang mana ?"
echo "================="
echo "1) PHP (100% WORK)"
echo "2) PYTHON (98% WORK)"
echo "===================="
echo "No.2 Pengembangan !"
echo "===================="
echo ""
read -p "PILIH=> " menu;

if [$menu == 1] || [$menu == 01]
then
clear
echo "Hubungi pupusampah@gmail.com jika any problem !"
sleep 1
php tools.php
fi

if [$menu == 2] || [$menu == 02]
then
clear
echo "Hubungi pupusampah@gmail.com jika any problem !"
sleep 1
python2 tools.py
fi
