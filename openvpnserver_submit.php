<?PHP
$NETMASK = $_POST['NETMASK'];
$SERVER_PORT = $_POST['SERVER_PORT'];
$CANONICAL = $_POST['CANONICAL'];
$PROTOCOL = $_POST['PROTOCOL'];
$CIPHER = $_POST['CIPHER'];
$CLIENT = $_POST['CLIENT'];
$HASH_ALGO = $_POST['HASH_ALGO'];
$GATEWAY = $_POST['GATEWAY'];
$SUBNET = $_POST['SUBNET'];
$LAN_SUBNET = $_POST['LAN_SUBNET'];
$COMP_LZO = $_POST['COMP_LZO'];
$IPP = $_POST['IPP'];
$DNS_1 = $_POST['DNS_1'];
$DNS_2 = $_POST['DNS_2'];
$DNS_3 = $_POST['DNS_3'];
$POOL = $_POST['POOL'];
$WINS = $_POST['WINS'];
$DOMAIN = $_POST['DOMAIN'];
$TELNET_CONSOLE = $_POST['TELNET_CONSOLE'];
$VERB = $_POST['VERB'];
$IP_PORT_SHARE = $_POST['IP_PORT_SHARE'];
$TLSENCRYPT = $_POST['TLSENCRYPT'];


$arguments = "";
$arguments .= "NETMASK_NEW=\"$NETMASK\"\n";
$arguments .= "SERVER_PORT_NEW=\"$SERVER_PORT\"\n";
$arguments .= "CANONICAL_NEW=\"$CANONICAL\"\n";
$arguments .= "PROTOCOL_NEW=\"$PROTOCOL\"\n";
$arguments .= "CIPHER_NEW=\"$CIPHER\"\n";
$arguments .= "CLIENT_NEW=\"$CLIENT\"\n";
$arguments .= "HASH_ALGO_NEW=\"$HASH_ALGO\"\n";
$arguments .= "GATEWAY_NEW=\"$GATEWAY\"\n";
$arguments .= "SUBNET_NEW=\"$SUBNET\"\n";
$arguments .= "LAN_SUBNET_NEW=\"$LAN_SUBNET\"\n";
$arguments .= "COMP_LZO_NEW=\"$COMP_LZO\"\n";
$arguments .= "IPP_NEW=\"$IPP\"\n";
$arguments .= "DNS_1_NEW=\"$DNS_1\"\n";
$arguments .= "DNS_2_NEW=\"$DNS_2\"\n";
$arguments .= "DNS_3_NEW=\"$DNS_3\"\n";
$arguments .= "POOL_NEW=\"$POOL\"\n";
$arguments .= "WINS_NEW=\"$WINS\"\n";
$arguments .= "DOMAIN_NEW=\"$DOMAIN\"\n";
$arguments .= "TELNET_CONSOLE_NEW=\"$TELNET_CONSOLE\"\n";
$arguments .= "VERB_NEW=\"$VERB\"\n";
$arguments .= "IP_PORT_SHARE_NEW=\"$IP_PORT_SHARE\"\n";
$arguments .= "TLSENCRYPT_NEW=\"$TLSENCRYPT\"\n";

echo "Please wait while updating configuration...";

$file = "/usr/local/emhttp/plugins/openvpnserver/openvpnserver.args";
file_put_contents($file, $arguments);
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver updatecfg");
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver writeconf");
?>

<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
