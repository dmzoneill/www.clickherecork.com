<td width="*" valign="top" bgcolor="#FFFFFF">
		  
			  <table bgcolor="#FEFEFE" cellpadding="0" cellspacing="0" border="0"><tr><td>
           
			
			<fieldset>
<legend><strong> <?php print $language['contactus']; ?></strong></legend>

 <?php 
  print "<strong>" .$language['address'] ."</strong> :<br>";
  print "Click Here Internet Cafe<br>Morrison Quay, Cork. Ireland.<br><br><strong>Ph.</strong> 00 353 21 4271200";
  
// $f1 = $mailage;
// $f2 = $fname;
// $f3 = $femail;
// $f4 = $fmessage;
// $f5 = $subject; 
// $f6 = $recp;
  
if($f1){
  
	$f5 = "ClickHere Customer $f5!";
	$headers = "From: $f2 <$f3>" . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "Reply-To: $f3" . "\r\n";
	$address = "$f6@clickherecork.com";

	if(mail($address, $f5, $f4, $headers)){
		print "<br><br><u>Thank you $f2 we have received your email</u><br>";
	}
	else {
		print "<br><br><u>They're was a problem with your email request, please click back and fill out all the fields corectly.</u>";
	}
}
  
  
  if(!$f1){
  ?>

 
	  <FORM method='POST' ACTION='index.php?pageview=contactus&mailage=2'>
          <br>
      
           <?php print $language['titlemessage']; ?> 
        
          <br><br>
          <table cellpadding=5 cellspacing=0 width=400 border=0>
          <tr>
            <td valign=top><?php print $language['yourname']; ?>  :</td>
            <td valign=top><input type=text name=fname size=21></td>
          </tr>
          <tr>
            <td valign=top><?php print $language['youremail']; ?> : </td>
            <td valign=top><input type=text name=femail size=30>  </td>
          </tr>
		     <tr>
            <td valign=top><?php print $language['recipient']; ?> : </td>
            <td valign=top>
			<select name='recp'>
			<option value='info'><?php print $language['mailinfo']; ?></option>
			<option value='services'><?php print $language['mailservices']; ?></option>
			<option value='staff'><?php print $language['mailstaff']; ?></option>
			<option value='manager'><?php print $language['mailmanager']; ?></option>
			<option value='webmaster'><?php print $language['mailwebmaster']; ?></option>
			</select> @clickherecork.com
            </td>
          </tr>
          <tr>
            <td valign=top><?php print $language['subject']; ?> : </td>
            <td valign=top><select name='subject'>
			<option value='Complaint'><?php print $language['mailcomplaint']; ?></option>
			<option value='Enquiry'><?php print $language['mailenquiry']; ?></option>
			<option value='Web Help'><?php print $language['mailwebhelp']; ?></option>
			<option value='Suggestion'><?php print $language['mailsuggest']; ?></option>
			<option value='Other'><?php print $language['mailother']; ?></option>
			</select>
            </td>
          </tr>
          <tr>
            <td valign=top colspan=2><?php print $language['message']; ?> :</td>
		</tr>	
			<tr>
             <td valign=top colspan=2><textarea rows=13 cols=58 name='fmessage' wrap="on"></textarea></td>
          </tr>
          <tr>
            <td valign=top></td>
            <td valign=top><input type=submit value="<?php print $language['sendemail']; ?>" class="submit-button">
			<input type=hidden value="2" name=m>
        </form>
        <br>
      </td>
    </tr>
  </table>
  
  <?php
  
  }
 
  ?>
 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</fieldset> 
			</td></tr></table>
            
			</td>
