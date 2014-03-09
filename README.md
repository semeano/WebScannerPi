#WebScannerPi

Use an old scanner with your Raspberry Pi and send the scan to your email.


##Instalation

First of all, make sure that your scanner works with sane. Then, check if you have all these required components installed and configured on your Raspberry Pi:

- sane
- lighttpd
- php5
- mutt


After that, these are steps you have to take:

1. Power on the scanner and connect it to a usb port

2. Check the address of the scanner:

	<i>$ lsusb</i><br />
	Bus 001 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub<br />
	Bus 001 Device 002: ID 0424:9512 Standard Microsystems Corp.<br />
	Bus 001 Device 003: ID 0424:ec00 Standard Microsystems Corp.<br />
	Bus 001 Device 004: ID 03f0:0405 Hewlett-Packard ScanJet 3400cse (<b>mine was on 004</b>)<br />
	Bus 001 Device 005: ID 059b:0275 Iomega Corp.


3. Give read+write permissions to other users for the usb port where the scanner is:

	<i>$ sudo chmod 666 /dev/bus/usb/001/004</i>


4. Copy the project folder (webscannerpi) to lighttpd default folder, usually on /var/www

5. Change lighttpd folder permissions and owners:

	<i>$ sudo chmod 774 /var/www</i>
	<i>$ sudo chown pi:www-data /var/www</i>


6. Do the same for the project folder, but this time recursively:

	<i>$ sudo chmod 774 -R /var/www/webscannerpi</i>
	<i>$ sudo chown pi:www-data -R /var/www/webscannerpi</i>

This is needed because when you call the script from a webpage (through a shell_exec command) the user who runs it is www-data


7. Add the user www-data to saned group:

	<i>$ sudo usermod -a -G saned www-data</i>



And that's it! Just go to http://<i>your_raspberrypi_ip_address</i>/webscannerpi and test it out.


##Copyright & Licence

Copyright (c) 2014 Pedro Semeano - Released under The MIT License.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
