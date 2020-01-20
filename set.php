<html>
<head><style>
.fffg_body { background:#d1d6da; color:black; font-family:Arial, San-serif, Times New Roman; font-size:medium;padding:0px;margin:0px; }

.fffg_ac {border:1px solid #babec1;margin-bottom: 7px;}


.fffg_menu {background:#ffffff; padding:5px;border-bottom:1px solid #e5e5e5;}

.fffg_submit{
    background: #01579B; padding: 4px; border: 1px solid #37548c; color: white;
}


.fffg_submit:hover {
    background: #4FC3F7; border: 1px solid #37548c;
    color: white;
}


.fffg_submit:focus {
    background: #F44336; border:1px solid #ff0000
    color: white;
}

iframe {display:none}

</style></head>
<body>
<form action="set.php" method="post">
<table border=0>


<tr>
<td>UserAgent : </td>
<td><input type="text" name="useragent" value="opera mini android"></td>
</tr>

<tr><td>Cookies : </td>
<td><input type="checkbox" name="cookie" value="1" checked></td></tr><tr><td>Fit to Screen : </td>
<td><input type="checkbox" name="screen" value="1" ></td></tr><tr><td>Download : </td>
<td><input type="checkbox" name="download" value="1" checked></td></tr><tr><td>Hide Browse Form : </td>
<td><input type="checkbox" name="hide_browse_form" value="1" ></td></tr><tr><td>Hide FreeBasics : </td>
<td><input type="checkbox" name="hide_free_basics" value="1" ></td></tr>
<tr>
<td>PassWord : </td>
<td><input type="text" name="pass" value="FREE"></td>
</tr>

<tr>
<td>
<input type="submit" class="fffg_submit" name="save" value="Save"> </td></tr>
</table>
</form>