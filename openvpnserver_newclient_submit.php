<?PHP
$ADD_NEW_CLIENT = $_POST['ADD_CLIENT'];
$NEW_PASSWORD_PKCS12 = $_POST['PASSWORD_PKCS12'];

$vpn_type = $_POST['vpn_type']; 
	$vpn_name = strval($_POST['vpn_name']); 
	if (is_array($vpn_type)) { 
	  foreach ($vpn_type as $key => $vpn_value) { 
	  } 
	} 

echo "Please wait while adding new client...";
shell_exec("/usr/local/emhttp/plugins/openvpnserver/scripts/rc.openvpnserver add_client $vpn_value $ADD_NEW_CLIENT $NEW_PASSWORD_PKCS12 >/var/local/emhttp/plugins/openvpnserver/add_client.log 2>&1");
?>
<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
