     </tr>
      </table>
	  
	  <?php 
	  if((!$wkdisgood) or ($wkdisgood=="about")){
	  if(!$google){
	  ?>
	  
	  
	  <table width=100% border="0" cellpadding="10" cellspacing="1">
        <tr>
	   	 <td width="33%" valign="top" bgcolor="#FFFFFF">
	 
	 <fieldset>
		<legend>
			<strong>
				<?php print $language['randomuser']; ?> <img alt='clickhere' src="images/topicarrow.gif"> &nbsp; </strong></legend>
				<?php include("person.php"); ?>
	</fieldset> 
	 
	  		</td>
			
			  	 <td width="33%" valign="top" bgcolor="#FFFFFF">

	 <form action="search.php" method="post" class="postbody">
<fieldset>
<legend><strong><?php print $language['mailinglist']; ?> <img alt='clickhere' src="images/topicarrow.gif"> &nbsp; </strong></legend>
<img src="images/mailtopic.gif"><br>
 <?php print $language['address']; ?> <br> <input type="text" value="person@gmail.com" onfocus="value=''" class="input-box"><br>
<input type="submit" value="Signup" class="mainoption">
</fieldset> 
</form>	
	 
	 
	  		</td>
			
			
  		</td>
			
	      </tr>
      </table>
	    <?php 
		}
	  }	  
	  ?>
	  
	  </td>
    </tr>
  </table>


</div>


		
		
		</td>
	</tr>
</table>
<table width="100%" cellspacing="0" border="0" cellpadding="0">
	<tr>
		<td class="left_bottom"><span class="gensmall">&nbsp;</span></td>
		<td class="middle_bottom3"><span class="gensmall">&nbsp;</span></td>
		<td class="middle_bottom2"><span class="gensmall">&nbsp;</span></td>
		<td class="middle_bottom" align="center"><span class="gensmall" nowrap="nowrap"><a href='index.php?pageview=contactus' class="tab"> <?php print $language['designby']; ?> David O Neill</a></span></td>
		<td class="right_bottom"><span class="gensmall">&nbsp;</span></td>
	</tr>
</table>


		</td>
		<td class="back_4_7"></td>
	</tr>
</table>
<table class="bodyline" cellspacing="0" cellpadding="0" border="0" align="center">
	<tr>
		<td class="back_5_1"></td>
		<td class="back_5_2"></td>
		<td class="back_5_3">
			<div align="center" class="copyright"><br /><br /></div>
		</td>
		<td class="back_5_4"></td>
		<td class="back_5_5">
		</td>
		<td class="back_5_6"></td>
		<td class="back_5_7"></td>
	</tr>
	<tr>
		<td class="back_6_1"></td>
		<td class="back_6_2"></td>
		<td class="back_6_3" colspan="3" valign=top>
<a href='javascript:history.back(-1)'>< Back </a> | 
<a href='javascript:history.forward()'>Forward ></a>
		</td>
		<td class="back_6_6"></td>
		<td class="back_6_7"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
<div align=center><img alt='1'  src="images/valid/css2.png">  <img alt='1'  src="images/valid/ie.png"> <img alt='1'  src="images/php.gif"> <img alt='1'  src="images/valid/mozilla.png"> <img alt='1'  src="images/valid/netscape.png"><br> <p>
<img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01!" height="31" width="88">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" height="31" width="88">
    </p><br>
	<img src="vin.php" width=1 height=1>
    </div>




</body>
</html>
