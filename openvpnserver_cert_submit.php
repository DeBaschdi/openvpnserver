<?PHP
$INSTALL_ON_BOOT = $_POST['INSTALL_ON_BOOT'];
$DISCONNECT_ON_UMOUNT = $_POST['DISCONNECT_ON_UMOUNT'];
$EASYRSAKEYSIZE = $_POST['EASYRSAKEYSIZE'];
$SERVER_PATH = $_POST['SERVER_PATH'];
$PASSPHRASE = $_POST['PASSPHRASE'];

$arguments = "";
$arguments .= "INSTALL_ON_BOOT_NEW=\"$INSTALL_ON_BOOT\"\n";
$arguments .= "DISCONNECT_ON_UMOUNT_NEW=\"$DISCONNECT_ON_UMOUNT\"\n";
$arguments .= "EASYRSAKEYSIZE_NEW=\"$EASYRSAKEYSIZE\"\n";
$arguments .= "SERVER_PATH_NEW=\"$SERVER_PATH\"\n";
$arguments .= "PASSPHRASE_NEW=\"$PASSPHRASE\"\n";

echo "Please wait while updating configuration for certs and Misc...";

$file = "/usr/local/emhttp/plugins/openvpnserver/openvpnserver_cert.args";
file_put_contents($file, $arguments);
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver updatecfg_cert");
?>

<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
