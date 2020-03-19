### ipsecFritzer

Just use the native iOS and Mac OS X VPN clients to connect your apple device to your integrated FritzBox!IPSEC-Server. Normally, this is a big pain. Now, you can use ipsecFritzer - a small PHP console script - to generate the whole FritzBox!-VPN-configuration.

#### Get started

1. Update config.inc.php with your local network range, accounts you want to have generated, passwords and everything else
2. Use your terminal to generate your specific FritzBox!-VPN-Config in the output/-Folder (just type ./ipsecFritzer.php)
3. Upload your generated vpn-configuration to your fritzbox, connect your iOS and Mac OS X devices (Cisco vpn mode) and enjoy :)
