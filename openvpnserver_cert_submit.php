<?PHP
$INSTALL_ON_BOOT = $_POST['INSTALL_ON_BOOT'];
$DISCONNECT_ON_UMOUNT = $_POST['DISCONNECT_ON_UMOUNT'];
$EASYRSAKEYSIZE = $_POST['EASYRSAKEYSIZE'];
$SERVER_PATH = $_POST['SERVER_PATH'];
$PASSPHRASE = $_POST['PASSPHRASE'];
$CRYPTO = $_POST['CRYPTO'];
$CURVE = $_POST['CURVE'];
$EASYRSACAEXPIRE = $_POST['EASYRSACAEXPIRE'];
$EASYRSACERTEXPIRE = $_POST['EASYRSACERTEXPIRE'];
$EASYRSAREQCOUNTRY = $_POST['EASYRSAREQCOUNTRY'];
$EASYRSAREQPROVINCE = $_POST['EASYRSAREQPROVINCE'];
$EASYRSAREQCITY = $_POST['EASYRSAREQCITY'];
$EASYRSAREQORG = $_POST['EASYRSAREQORG'];
$EASYRSAREQEMAIL = $_POST['EASYRSAREQEMAIL'];
$EASYRSAREQOU = $_POST['EASYRSAREQOU'];

$arguments = "";
$arguments .= "INSTALL_ON_BOOT_NEW=\"$INSTALL_ON_BOOT\"\n";
$arguments .= "DISCONNECT_ON_UMOUNT_NEW=\"$DISCONNECT_ON_UMOUNT\"\n";
$arguments .= "EASYRSAKEYSIZE_NEW=\"$EASYRSAKEYSIZE\"\n";
$arguments .= "SERVER_PATH_NEW=\"$SERVER_PATH\"\n";
$arguments .= "PASSPHRASE_NEW=\"$PASSPHRASE\"\n";
$arguments .= "CRYPTO_NEW=\"$CRYPTO\"\n";
$arguments .= "CURVE_NEW=\"$CURVE\"\n";
$arguments .= "EASYRSACAEXPIRE_NEW=\"$EASYRSACAEXPIRE\"\n";
$arguments .= "EASYRSACERTEXPIRE_NEW=\"$EASYRSACERTEXPIRE\"\n";
$arguments .= "EASYRSAREQCOUNTRY_NEW=\"$EASYRSAREQCOUNTRY\"\n";
$arguments .= "EASYRSAREQPROVINCE_NEW=\"$EASYRSAREQPROVINCE\"\n";
$arguments .= "EASYRSAREQCITY_NEW=\"$EASYRSAREQCITY\"\n";
$arguments .= "EASYRSAREQORG_NEW=\"$EASYRSAREQORG\"\n";
$arguments .= "EASYRSAREQEMAIL_NEW=\"$EASYRSAREQEMAIL\"\n";
$arguments .= "EASYRSAREQOU_NEW=\"$EASYRSAREQOU\"\n";

echo "Please wait while updating configuration for certs and Misc...";

$file = "/usr/local/emhttp/plugins/openvpnserver/openvpnserver_cert.args";
file_put_contents($file, $arguments);
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver updatecfg_cert");
?>

<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
