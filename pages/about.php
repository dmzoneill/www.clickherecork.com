<td width="550" valign="top" bgcolor="#FFFFFF">

			  <table bgcolor="#FEFEFE" cellpadding="0" cellspacing="0" border="0"><tr><td>
  <?php
  
  include("connect.php");
  
  $sql = $stream->do_query("SELECT * FROM `clicknews` order by id desc","array");
  
  for($r=0;$r<count($sql);$r++){

$tmp = $sql[$r];
$id = $tmp[0];
$name = $tmp[1];
$msg = $tmp[2];

print "<fieldset><legend><strong><h4> $name</h4></strong></legend>$msg</fieldset><br>";

}

?>


<fieldset>
<legend><strong> <?php print $language['flights']; ?></strong></legend>
<table width="340" border="0" cellpadding="2">
  <tr>
    <td><a href='http://www.ryanair.com' class="tab">Ryan Air</a></td>
    <td><a href='http://www.aerlingus.com' class="tab">Aer Lingus</a></td>
  </tr>
    <tr>
    <td><a href='http://budgetair.ie/' class="tab">BudgetAir</a></td>
    <td><a href='http://www.easyjet.com/' class="tab">Easy Jet</a></td>
  </tr>  
  <tr>
    <td><a href='http://www.ba.com' class="tab">British Airways</a></td>
    <td><a href='http://www.bmibaby.com' class="tab">BMI Baby</a></td>
  </tr>
  <tr>
    <td><a href='http://www.delta.com/' class="tab">Delta Airlines</a></td>
    <td><a href='http://www.swiss.com' class="tab">Swiss Airlines</a></td>
  </tr>
  <tr>
    <td><a href='http://www.united.com' class="tab">United Airlines</a></td>
    <td><a href='http://AirFrance.co.uk' class="tab">Air France</a></td>
  </tr>
  <tr>
    <td><a href='http://www.qantas.com.au' class="tab">Quantas Airlines</a></td>
    <td><a href='http://www.google.ie/search?q=airlines&hl=en&lr=&start=30&sa=N/' class="tab">More Airlines</a></td>
  </tr>
</table>
</fieldset> 

<br><br>
<fieldset>
<legend><strong> <?php print $language['freemail']; ?></strong></legend>

<table width="340" border="0" cellpadding="2">
  <tr>
    <td><A href="http://www.hotmail.com/" class="tab">Hotmail</A></td>
    <td><A href="http://www.yahoo.com" class="tab">Yahoo</A></td>
  </tr>
  <tr>
    <td><A href="http://www.emailfast.com/" class="tab">Email Fast</A></td>
    <td><A href="http://www.eircom.net/" class="tab">Eircom</A></td>
  </tr>
  <tr>
    <td><A href="http://www.mail.com/" class="tab">Mail.com</A></td>
    <td><A href="http://mail.lycos.com/" class="tab">Lycos</A></td>
  </tr>
</table>


</fieldset> 
<br><br>
<fieldset>
<legend><strong><?php print $language['currencyconverter']; ?></strong></legend>

<form name="ucc" method="post" action="http://www.xe.com/ucc/convert.cgi">

  Amount to convert<br>
  <input type="text" name="Amount" value="1" size=10>
  <br>
Which Currency<br>
      <select name="From" size=5>
        <option value="EUR" SELECTED>Euro - EUR</option>
        <option value="USD">United States Dollars - USD</option>
        <option value="GBP">United Kingdom Pounds - GBP</option>
        <option value="CAD">Canada Dollars - CAD</option>
        <option value="AUD">Australia Dollars - AUD</option>
        <option value="JPY">Japan Yen - JPY</option>
        <option value="INR">India Rupees - INR</option>
        <option value="NZD">New Zealand Dollars - NZD</option>
        <option value="CHF">Switzerland Francs - CHF</option>
        <option value="ZAR">South Africa Rand - ZAR</option>
        <option value="EUR">-- Top 85 Currencies: --</OPTION>
        <option value="AFA">Afghanistan Afghanis - AFA</option>
        <option value="ALL">Albania Leke - ALL</option>
        <option value="DZD">Algeria Dinars - DZD</option>
        <option value="USD">America (United States) Dollars - USD</option>
        <option value="ARS">Argentina Pesos - ARS</option>
        <option value="AUD">Australia Dollars - AUD</option>
        <option value="ATS">Austria Schillings - ATS*</OPTION>
        <option value="BSD">Bahamas Dollars - BSD</option>
        <option value="BHD">Bahrain Dinars - BHD</option>
        <option value="BDT">Bangladesh Taka - BDT</option>
        <option value="BBD">Barbados Dollars - BBD</option>
        <option value="BEF">Belgium Francs - BEF*</OPTION>
        <option value="BMD">Bermuda Dollars - BMD</option>
        <option value="BRL">Brazil Reais - BRL</option>
        <option value="BGN">Bulgaria Leva - BGN</option>
        <option value="CAD">Canada Dollars - CAD</option>
        <option value="XOF">CFA BCEAO Francs - XOF</option>
        <option value="XAF">CFA BEAC Francs - XAF</option>
        <option value="CLP">Chile Pesos - CLP</option>
        <option value="CNY">China Yuan Renminbi - CNY</option>
        <option value="COP">Colombia Pesos - COP</option>
        <option value="XPF">CFP Francs - XPF</option>
        <option value="CRC">Costa Rica Colones - CRC</option>
        <option value="HRK">Croatia Kuna - HRK</option>
        <option value="CYP">Cyprus Pounds - CYP</option>
        <option value="CZK">Czech Republic Koruny - CZK</option>
        <option value="DKK">Denmark Kroner - DKK</option>
        <option value="DEM">Deutsche (Germany) Marks - DEM*</OPTION>
        <option value="DOP">Dominican Republic Pesos - DOP</option>
        <option value="NLG">Dutch (Netherlands) Guilders - NLG*</OPTION>
        <option value="XCD">Eastern Caribbean Dollars - XCD</option>
        <option value="EGP">Egypt Pounds - EGP</option>
        <option value="EEK">Estonia Krooni - EEK</option>
        <option value="EUR">Euro - EUR</option>
        <option value="FJD">Fiji Dollars - FJD</option>
        <option value="FIM">Finland Markkaa - FIM*</OPTION>
        <option value="FRF">France Francs - FRF*</OPTION>
        <option value="DEM">Germany Deutsche Marks - DEM*</OPTION>
        <option value="XAU">Gold Ounces - XAU</option>
        <option value="GRD">Greece Drachmae - GRD*</OPTION>
        <option value="NLG">Holland (Netherlands) Guilders - NLG*</OPTION>
        <option value="HKD">Hong Kong Dollars - HKD</option>
        <option value="HUF">Hungary Forint - HUF</option>
        <option value="ISK">Iceland Kronur - ISK</option>
        <option value="XDR">IMF Special Drawing Right - XDR</option>
        <option value="INR">India Rupees - INR</option>
        <option value="IDR">Indonesia Rupiahs - IDR</option>
        <option value="IRR">Iran Rials - IRR</option>
        <option value="IQD">Iraq Dinars - IQD</option>
        <option value="IEP">Ireland Pounds - IEP*</OPTION>
        <option value="ILS">Israel New Shekels - ILS</option>
        <option value="ITL">Italy Lire - ITL*</OPTION>
        <option value="JMD">Jamaica Dollars - JMD</option>
        <option value="JPY">Japan Yen - JPY</option>
        <option value="JOD">Jordan Dinars - JOD</option>
        <option value="KES">Kenya Shillings - KES</option>
        <option value="KRW">Korea (South) Won - KRW</option>
        <option value="KWD">Kuwait Dinars - KWD</option>
        <option value="LBP">Lebanon Pounds - LBP</option>
        <option value="LUF">Luxembourg Francs - LUF*</OPTION>
        <option value="MYR">Malaysia Ringgits - MYR</option>
        <option value="MTL">Malta Liri - MTL</option>
        <option value="MUR">Mauritius Rupees - MUR</option>
        <option value="MXN">Mexico Pesos - MXN</option>
        <option value="MAD">Morocco Dirhams - MAD</option>
        <option value="NLG">Netherlands Guilders - NLG*</OPTION>
        <option value="NZD">New Zealand Dollars - NZD</option>
        <option value="NOK">Norway Kroner - NOK</option>
        <option value="OMR">Oman Rials - OMR</option>
        <option value="PKR">Pakistan Rupees - PKR</option>
        <option value="XPD">Palladium Ounces - XPD</option>
        <option value="PEN">Peru Nuevos Soles - PEN</option>
        <option value="PHP">Philippines Pesos - PHP</option>
        <option value="XPT">Platinum Ounces - XPT</option>
        <option value="PLN">Poland Zlotych - PLN</option>
        <option value="PTE">Portugal Escudos - PTE*</OPTION>
        <option value="QAR">Qatar Riyals - QAR</option>
        <option value="ROL">Romania Lei - ROL</option>
        <option value="RUB">Russia Rubles - RUB</option>
        <option value="SAR">Saudi Arabia Riyals - SAR</option>
        <option value="XAG">Silver Ounces - XAG</option>
        <option value="SGD">Singapore Dollars - SGD</option>
        <option value="SKK">Slovakia Koruny - SKK</option>
        <option value="SIT">Slovenia Tolars - SIT</option>
        <option value="ZAR">South Africa Rand - ZAR</option>
        <option value="KRW">South Korea Won - KRW</option>
        <option value="ESP">Spain Pesetas - ESP*</OPTION>
        <option value="XDR">Special Drawing Rights (IMF) - XDR</option>
        <option value="LKR">Sri Lanka Rupees - LKR</option>
        <option value="SDD">Sudan Dinars - SDD</option>
        <option value="SEK">Sweden Kronor - SEK</option>
        <option value="CHF">Switzerland Francs - CHF</option>
        <option value="TWD">Taiwan New Dollars - TWD</option>
        <option value="THB">Thailand Baht - THB</option>
        <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
        <option value="TND">Tunisia Dinars - TND</option>
        <option value="TRY">Turkey New Lira - TRY</option>
        <option value="TRL">Turkey Lira - TRL*</OPTION>
        <option value="AED">United Arab Emirates Dirhams - AED</option>
        <option value="GBP">United Kingdom Pounds - GBP</option>
        <option value="USD">United States Dollars - USD</option>
        <option value="VEB">Venezuela Bolivares - VEB</option>
        <option value="VND">Vietnam Dong - VND</option>
        <option value="ZMK">Zambia Kwacha - ZMK</option>
        <option value="EUR">-- Special Units: --</OPTION>
        <option value="XAF">CFA BEAC Francs - XAF</option>
        <option value="XOF">CFA BCEAO Francs - XOF</option>
        <option value="XPF">CFP Francs - XPF</option>
        <option value="XCD">Eastern Caribbean Dollars - XCD</option>
        <option value="EUR">Euro - EUR</option>
        <option value="XDR">IMF Special Drawing Rights - XDR</option>
        <option value="XAU">-- Precious Metals: --</OPTION>
        <option value="XAG">Silver Ounces - XDR</option>
        <option value="XAU">Gold Ounces - XAU</option>
        <option value="XPT">Platinum Ounces - XPT</option>
        <option value="XPD">Palladium Ounces - XPD</option>
      </select><br>
	 To which currency<br>
      <select name="To" size=5>
        <option value="USD" SELECTED>United States Dollars - USD</option>
        <option value="EUR">Euro - EUR</option>
        <option value="GBP">United Kingdom Pounds - GBP</option>
        <option value="CAD">Canada Dollars - CAD</option>
        <option value="AUD">Australia Dollars - AUD</option>
        <option value="JPY">Japan Yen - JPY</option>
        <option value="INR">India Rupees - INR</option>
        <option value="NZD">New Zealand Dollars - NZD</option>
        <option value="CHF">Switzerland Francs - CHF</option>
        <option value="ZAR">South Africa Rand - ZAR</option>
        <option value="EUR">-- Top 85 Currencies: --</OPTION>
        <option value="AFA">Afghanistan Afghanis - AFA</option>
        <option value="ALL">Albania Leke - ALL</option>
        <option value="DZD">Algeria Dinars - DZD</option>
        <option value="USD">America (United States) Dollars - USD</option>
        <option value="ARS">Argentina Pesos - ARS</option>
        <option value="AUD">Australia Dollars - AUD</option>
        <option value="ATS">Austria Schillings - ATS*</OPTION>
        <option value="BSD">Bahamas Dollars - BSD</option>
        <option value="BHD">Bahrain Dinars - BHD</option>
        <option value="BDT">Bangladesh Taka - BDT</option>
        <option value="BBD">Barbados Dollars - BBD</option>
        <option value="BEF">Belgium Francs - BEF*</OPTION>
        <option value="BMD">Bermuda Dollars - BMD</option>
        <option value="BRL">Brazil Reais - BRL</option>
        <option value="BGN">Bulgaria Leva - BGN</option>
        <option value="CAD">Canada Dollars - CAD</option>
        <option value="XOF">CFA BCEAO Francs - XOF</option>
        <option value="XAF">CFA BEAC Francs - XAF</option>
        <option value="CLP">Chile Pesos - CLP</option>
        <option value="CNY">China Yuan Renminbi - CNY</option>
        <option value="COP">Colombia Pesos - COP</option>
        <option value="XPF">CFP Francs - XPF</option>
        <option value="CRC">Costa Rica Colones - CRC</option>
        <option value="HRK">Croatia Kuna - HRK</option>
        <option value="CYP">Cyprus Pounds - CYP</option>
        <option value="CZK">Czech Republic Koruny - CZK</option>
        <option value="DKK">Denmark Kroner - DKK</option>
        <option value="DEM">Deutsche (Germany) Marks - DEM*</OPTION>
        <option value="DOP">Dominican Republic Pesos - DOP</option>
        <option value="NLG">Dutch (Netherlands) Guilders - NLG*</OPTION>
        <option value="XCD">Eastern Caribbean Dollars - XCD</option>
        <option value="EGP">Egypt Pounds - EGP</option>
        <option value="EEK">Estonia Krooni - EEK</option>
        <option value="EUR">Euro - EUR</option>
        <option value="FJD">Fiji Dollars - FJD</option>
        <option value="FIM">Finland Markkaa - FIM*</OPTION>
        <option value="FRF">France Francs - FRF*</OPTION>
        <option value="DEM">Germany Deutsche Marks - DEM*</OPTION>
        <option value="XAU">Gold Ounces - XAU</option>
        <option value="GRD">Greece Drachmae - GRD*</OPTION>
        <option value="NLG">Holland (Netherlands) Guilders - NLG*</OPTION>
        <option value="HKD">Hong Kong Dollars - HKD</option>
        <option value="HUF">Hungary Forint - HUF</option>
        <option value="ISK">Iceland Kronur - ISK</option>
        <option value="XDR">IMF Special Drawing Right - XDR</option>
        <option value="INR">India Rupees - INR</option>
        <option value="IDR">Indonesia Rupiahs - IDR</option>
        <option value="IRR">Iran Rials - IRR</option>
        <option value="IQD">Iraq Dinars - IQD</option>
        <option value="IEP">Ireland Pounds - IEP*</OPTION>
        <option value="ILS">Israel New Shekels - ILS</option>
        <option value="ITL">Italy Lire - ITL*</OPTION>
        <option value="JMD">Jamaica Dollars - JMD</option>
        <option value="JPY">Japan Yen - JPY</option>
        <option value="JOD">Jordan Dinars - JOD</option>
        <option value="KES">Kenya Shillings - KES</option>
        <option value="KRW">Korea (South) Won - KRW</option>
        <option value="KWD">Kuwait Dinars - KWD</option>
        <option value="LBP">Lebanon Pounds - LBP</option>
        <option value="LUF">Luxembourg Francs - LUF*</OPTION>
        <option value="MYR">Malaysia Ringgits - MYR</option>
        <option value="MTL">Malta Liri - MTL</option>
        <option value="MUR">Mauritius Rupees - MUR</option>
        <option value="MXN">Mexico Pesos - MXN</option>
        <option value="MAD">Morocco Dirhams - MAD</option>
        <option value="NLG">Netherlands Guilders - NLG*</OPTION>
        <option value="NZD">New Zealand Dollars - NZD</option>
        <option value="NOK">Norway Kroner - NOK</option>
        <option value="OMR">Oman Rials - OMR</option>
        <option value="PKR">Pakistan Rupees - PKR</option>
        <option value="XPD">Palladium Ounces - XPD</option>
        <option value="PEN">Peru Nuevos Soles - PEN</option>
        <option value="PHP">Philippines Pesos - PHP</option>
        <option value="XPT">Platinum Ounces - XPT</option>
        <option value="PLN">Poland Zlotych - PLN</option>
        <option value="PTE">Portugal Escudos - PTE*</OPTION>
        <option value="QAR">Qatar Riyals - QAR</option>
        <option value="ROL">Romania Lei - ROL</option>
        <option value="RUB">Russia Rubles - RUB</option>
        <option value="SAR">Saudi Arabia Riyals - SAR</option>
        <option value="XAG">Silver Ounces - XAG</option>
        <option value="SGD">Singapore Dollars - SGD</option>
        <option value="SKK">Slovakia Koruny - SKK</option>
        <option value="SIT">Slovenia Tolars - SIT</option>
        <option value="ZAR">South Africa Rand - ZAR</option>
        <option value="KRW">South Korea Won - KRW</option>
        <option value="ESP">Spain Pesetas - ESP*</OPTION>
        <option value="XDR">Special Drawing Rights (IMF) - XDR</option>
        <option value="LKR">Sri Lanka Rupees - LKR</option>
        <option value="SDD">Sudan Dinars - SDD</option>
        <option value="SEK">Sweden Kronor - SEK</option>
        <option value="CHF">Switzerland Francs - CHF</option>
        <option value="TWD">Taiwan New Dollars - TWD</option>
        <option value="THB">Thailand Baht - THB</option>
        <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
        <option value="TND">Tunisia Dinars - TND</option>
        <option value="TRY">Turkey New Lira - TRY</option>
        <option value="TRL">Turkey Lira - TRL*</OPTION>
        <option value="AED">United Arab Emirates Dirhams - AED</option>
        <option value="GBP">United Kingdom Pounds - GBP</option>
        <option value="USD">United States Dollars - USD</option>
        <option value="VEB">Venezuela Bolivares - VEB</option>
        <option value="VND">Vietnam Dong - VND</option>
        <option value="ZMK">Zambia Kwacha - ZMK</option>
        <option value="EUR">-- Special Units: --</OPTION>
        <option value="XAF">CFA BEAC Francs - XAF</option>
        <option value="XOF">CFA BCEAO Francs - XOF</option>
        <option value="XPF">CFP Francs - XPF</option>
        <option value="XCD">Eastern Caribbean Dollars - XCD</option>
        <option value="EUR">Euro - EUR</option>
        <option value="XDR">IMF Special Drawing Rights - XDR</option>
        <option value="XAU">-- Precious Metals: --</OPTION>
        <option value="XAG">Silver Ounces - XDR</option>
        <option value="XAU">Gold Ounces - XAU</option>
        <option value="XPT">Platinum Ounces - XPT</option>
        <option value="XPD">Palladium Ounces - XPD</option>
      </select><br>
      <input class="mainoption" type="submit" name="submit" value="Convert">
	  
	  </form>
</center>
</fieldset> 

<br><br>
<fieldset>
<legend> <strong><?php print $language['latestforums']; ?></strong></legend>

 <?php include("posts.php"); ?>
 
 
 </center>
</fieldset> 

			</td></tr></table>
            
			</td>