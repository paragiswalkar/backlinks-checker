	<h2>Submit Link</h2>
	<form action="index.php" method="post">
		<table border="0" cellspacing="2" cellpadding="0">
			<tr>
				<th>Your URL</th>
				<td colspan="2"><input type="url" class="sf_active" name="inputurl1" value="" maxlength="100" required /></td>
			</tr>
			<tr>
				<th>Target URL</th>
				<td colspan="2"><input type="url" class="sf_active" name="inputurl2" value="" maxlength="50" required /></td>
			</tr>
			<tr>
				<th>Verify</th>
				<td><input type="text" class="sf_active" name="Captcha" value="" size="7" required /></td>
				<td align="right" valign="middle"><div style="width:73px; height:17px; border:1px solid #AFC2FF;"><img src="./captcha.php"></div></td>
			</tr>
			<tr>
				<td colspan="3" align="right"><br /><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
	</form>