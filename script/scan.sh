scanimage > /var/www/webscannerpi/scan/scan.pnm
pnmtojpeg /var/www/webscannerpi/scan/scan.pnm > /var/www/webscannerpi/scan/scan.jpeg
mutt -s "WebScannerPi" $1 -a /var/www/webscannerpi/scan/scan.jpeg < /var/www/webscannerpi/email/body.txt
/var/www/webscannerpi/lib/./usbreset /dev/bus/usb/001/004
