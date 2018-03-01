<?PHP
$REVOKE_A_CLIENT = $_POST['REVOKE_CLIENT'];
echo "Please wait while revoking client...";
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver revoke_client $REVOKE_A_CLIENT >/var/local/emhttp/plugins/openvpnserver/add_client.log 2>&1");
?>
<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
