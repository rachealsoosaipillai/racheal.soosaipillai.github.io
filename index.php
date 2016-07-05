﻿<?php include('header.php'); ?>
<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <br><h1></h1>
	<form class="" method="post" action="">
		<input class="pure-button" type="button" value="Add Rule" onClick="addRow('dataTable')" />
	    <input class="pure-button" type="button" value="Remove Rule" onClick="deleteRow('dataTable')" />
	    <input class="pure-button" type="button" value="Add UR" onClick="addUR('dataTable')" />
	    <br>
		  <table id="dataTable">
		    <tr class="tablerow ur">
		      <td class="cell">

		      </td>
		      <td class="cell">
		        Rules
		      </td>
		      <td class="cell">
		        UR: <input type="text" class="userInput" id="input1" name="input1" placeholder="Enter a word">
		      </td>
		    </tr>

		    <tr class="tablerow">
		      <td class="cell">

		      </td>
		      <td class="cell">
		        <select class="rule">
		        	<option value="Hiatus Resolution" title="V → ∅ / V —">Hiatus Resolution</option>
		        	<option value="Final Vowel Deletion" title="V → ∅ / — #">Final Vowel Deletion</option>
		        	<option value="Postnasal Voicing" title="C → [+voice] / [+nasal] —">Postnasal Voicing</option>
		        	<option value="Nasal Place Assimilation" title="[+nasal] → [αcoronal βlabial ɣdorsal] / - [−syllabic αcoronal βlabial ɣdorsal]">Nasal Place Assimilation</option>
		        	<option value="Voicing Assimilation" title="[-sonorant] → [αvoice] / — [αvoice -sonorant]">Voicing Assimilation</option>
		        	<option value="Final Coronal Deletion" title="[+coronal] → ∅ / — #">Final Coronal Deletion</option>
		        	<option value="Height Harmony" title="V → [-high] / — (C)[-high -low]">Height Harmony</option>
		        	<option value="Rounding Harmony" title="V → [αround] / — (C₀VC₀)[αround]">Rounding Harmony</option>
		        	<option value="L-Vocalization" title="l → o / — {C, #}">L-Vocalization</option>
		        	<option value="Dissimilation" title="V → [−low] / — C₀ [+low]">Dissimilation</option>
		        	<option value="Initial Stress Assignment" title="V → [+stress] / # C₀ —">Initial Stress Assignment</option>
		        	<option value="Final Devoicing" title="[-sonorant] → [-voice] / — #">Final Devoicing</option>
		        	<option value="Lenition" title="[−sonorant +voice] → [+continuant] / V — V">Lenition</option>
		        	<option value="Intervocalic Voicing" title="[-sonorant] → [+voice] / V — V">Intervocalic Voicing</option>
		        	<option value="Schwa Epenthesis" title="∅ → ə / C — C">Schwa Epenthesis</option>
		        	<option value="High Vowel Epenthesis" title="∅ → i / C — C">High Vowel Epenthesis</option>
		        	<option value="Metathesis" title="iC → Ci / — #">Metathesis</option>
		        	<option value="Nasal Assimilation" title="[-continuant] → [+nasal] / — [+nasal]">Nasal Assimilation</option>
		        	<option value="Velar Palatalization" title="[+dorsal] → [−dorsal +coronal −anterior] / — [−low −back]">Velar Palatalization</option>
		        	<option value="Aspiration" title="[-continuant -sonorant] → [+spread glottis] / {#, C} — V">Aspiration</option>
		        	<option value="Sibilant Harmony" title="[+coronal +continuant -sonorant] → [αanterior] / — (C₀VC₀)[αanterior +coronal +continuant -sonorant]">Sibilant Harmony</option>
		        	<option value="Vowel Reduction" title="[-stress +syllabic] → [-low]">Vowel Reduction</option>
		        	<option value="Strengthening" title="[−sonorant] → [−continuant] / {#, C} — V">Strengthening</option>
		        	<option value="Word-Final Consonant Neutralization" title="C → ʔ / — #">Word-Final Consonant Neutralization</option>
		        	<option value="Manner Assimilation" title="[−sonorant] → [αcontinuant] / — C₀[αcontinuant −syllabic]">Manner Assimilation</option>
		        </select>
		      </td>
		      <td class="cell">

		      </td>
		    </tr>
		    <tr class="tablerow pr">
		      <td class="cell">

		      </td>
		      <td class="cell">

		      </td>
		      <td class="cell" id="sf1">
		         SF:
		      </td>
		    </tr>
			</table>
			<input class="pure-button pure-button-primary" type="button" value="Derive!" id="btnDerive" onClick="derive('dataTable')" />
		    <input class="pure-button" type="button" value="Reset" id="btnReset" onClick="clearCells('dataTable'), clearUR()" />
		    <input class="pure-button pure-button-secondary" type="button" value="Start from scratch!" id="btnRefresh" onClick="window.location.reload()" />
	</form>
	</div>

	<div class="container">
	    <div id="content">
<br><br>
	    	<textarea id="txtbox" placeholder="Type in IPA here and click to copy!"></textarea>
<br><br>
	    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	        <li class="active"><a href="#vowels" data-toggle="tab">Vowels</a></li>
	        <li><a href="#consonants" data-toggle="tab">Consonants</a></li>
	        <li><a href="#other" data-toggle="tab">Other</a></li>
	    </ul>
	    <div id="my-tab-content" class="tab-content">
	        <div class="tab-pane" id="consonants">
	        	<h1></h1>
	            <img id="Image-Maps-Com-image-maps-2015-07-29-105551" src="img/consonants.png" border="0" width="478" height="159" orgWidth="478" orgHeight="159" usemap="#image-maps-2015-07-29-105551" alt="" />
<map name="image-maps-2015-07-29-105551" id="ImageMapsCom-image-maps-2015-07-29-105551">
<area id="p" alt="p" title="p" href="#" shape="rect" coords="0,0,22,20" style="outline:none;" target="_self"     />
<area id="b" alt="b" title="b" href="#" shape="rect" coords="22,0,44,20" style="outline:none;" target="_self"     />
<area id="t" alt="t" title="t" href="#" shape="rect" coords="130,0,153,21" style="outline:none;" target="_self"     />
<area id="d" alt="d" title="d" href="#" shape="rect" coords="150,0,174,20" style="outline:none;" target="_self"     />
<area id="c" alt="c" title="c" href="#" shape="rect" coords="260,0,282,20" style="outline:none;" target="_self"     />
<area id="k" alt="k" title="k" href="#" shape="rect" coords="304,0,327,20" style="outline:none;" target="_self"     />
<area id="g" alt="g" title="g" href="#" shape="rect" coords="325,0,348,21" style="outline:none;" target="_self"     />
<area id="q" alt="q" title="q" href="#" shape="rect" coords="347,0,371,22" style="outline:none;" target="_self"     />
<area id="m" alt="m" title="m" href="#" shape="rect" coords="19,19,46,42" style="outline:none;" target="_self"     />
<area id="n" alt="n" title="n" href="#" shape="rect" coords="151,18,175,40" style="outline:none;" target="_self"     />
<area id="r" alt="r" title="r" href="#" shape="rect" coords="151,39,174,60" style="outline:none;" target="_self"     />
<area id="f" alt="f" title="f" href="#" shape="rect" coords="44,79,66,100" style="outline:none;" target="_self"     />
<area id="v" alt="v" title="v" href="#" shape="rect" coords="64,78,89,100" style="outline:none;" target="_self"     />
<area id="s" alt="s" title="s" href="#" shape="rect" coords="129,80,154,100" style="outline:none;" target="_self"     />
<area id="z" alt="z" title="z" href="#" shape="rect" coords="151,79,175,101" style="outline:none;" target="_self"     />
<area id="x" alt="x" title="x" href="#" shape="rect" coords="303,80,327,102" style="outline:none;" target="_self"     />
<area id="h" alt="h" title="h" href="#" shape="rect" coords="435,79,458,101" style="outline:none;" target="_self"     />
<area id="l" alt="l" title="l" href="#" shape="rect" coords="152,140,175,159" style="outline:none;" target="_self"     />
<area id="ʈ" alt="ʈ" title="ʈ" href="#" shape="rect" coords="218,0,241,21" style="outline:none;" target="_self"     />
<area id="ɖ" alt="ɖ" title="ɖ" href="#" shape="rect" coords="239,0,262,21" style="outline:none;" target="_self"     />
<area id="ɟ" alt="ɟ" title="ɟ" href="#" shape="rect" coords="282,0,305,20" style="outline:none;" target="_self"     />
<area id="ɢ" alt="ɢ" title="ɢ" href="#" shape="rect" coords="370,0,393,22" style="outline:none;" target="_self"     />
<area id="ʔ" alt="ʔ" title="ʔ" href="#" shape="rect" coords="434,0,458,20" style="outline:none;" target="_self"     />
<area id="ɱ" alt="ɱ" title="ɱ" href="#" shape="rect" coords="64,20,88,40" style="outline:none;" target="_self"     />
<area id="ɳ" alt="ɳ" title="ɳ" href="#" shape="rect" coords="237,22,262,40" style="outline:none;" target="_self"     />
<area id="ɲ" alt="ɲ" title="ɲ" href="#" shape="rect" coords="283,21,305,41" style="outline:none;" target="_self"     />
<area id="ŋ" alt="ŋ" title="ŋ" href="#" shape="rect" coords="326,21,348,40" style="outline:none;" target="_self"     />
<area id="ɴ" alt="ɴ" title="ɴ" href="#" shape="rect" coords="369,20,392,40" style="outline:none;" target="_self"     />
<area id="ʙ" alt="ʙ" title="ʙ" href="#" shape="rect" coords="22,40,45,60" style="outline:none;" target="_self"     />
<area id="β" alt="β" title="β" href="#" shape="rect" coords="23,78,44,99" style="outline:none;" target="_self"     />
<area id="ʀ" alt="ʀ" title="ʀ" href="#" shape="rect" coords="367,40,391,60" style="outline:none;" target="_self"     />
<area id="ⱱ" alt="ⱱ" title="ⱱ" href="#" shape="rect" coords="63,59,88,80" style="outline:none;" target="_self"     />
<area id="ɾ" alt="ɾ" title="ɾ" href="#" shape="rect" coords="152,61,175,79" style="outline:none;" target="_self"     />
<area id="ɽ" alt="ɽ" title="ɽ" href="#" shape="rect" coords="237,60,262,80" style="outline:none;" target="_self"     />
<area id="ɸ" alt="ɸ" title="ɸ" href="#" shape="rect" coords="0,79,22,102" style="outline:none;" target="_self"     />
<area id="θ" alt="θ" title="θ" href="#" shape="rect" coords="87,79,109,100" style="outline:none;" target="_self"     />
<area id="ð" alt="ð" title="ð" href="#" shape="rect" coords="108,78,132,101" style="outline:none;" target="_self"     />
<area id="ʃ" alt="ʃ" title="ʃ" href="#" shape="rect" coords="174,78,196,100" style="outline:none;" target="_self"     />
<area id="ʒ" alt="ʒ" title="ʒ" href="#" shape="rect" coords="197,80,218,101" style="outline:none;" target="_self"     />
<area id="ʂ" alt="ʂ" title="ʂ" href="#" shape="rect" coords="218,79,239,100" style="outline:none;" target="_self"     />
<area id="ʐ" alt="ʐ" title="ʐ" href="#" shape="rect" coords="239,80,261,100" style="outline:none;" target="_self"     />
<area id="ç" alt="ç" title="ç" href="#" shape="rect" coords="260,80,283,100" style="outline:none;" target="_self"     />
<area id="ʝ" alt="ʝ" title="ʝ" href="#" shape="rect" coords="284,80,304,100" style="outline:none;" target="_self"     />
<area id="ɣ" alt="ɣ" title="ɣ" href="#" shape="rect" coords="326,79,347,100" style="outline:none;" target="_self"     />
<area id="χ" alt="χ" title="χ" href="#" shape="rect" coords="348,80,371,100" style="outline:none;" target="_self"     />
<area id="ʁ" alt="ʁ" title="ʁ" href="#" shape="rect" coords="371,79,392,100" style="outline:none;" target="_self"     />
<area id="ħ" alt="ħ" title="ħ" href="#" shape="rect" coords="392,80,413,100" style="outline:none;" target="_self"     />
<area id="ʕ" alt="ʕ" title="ʕ" href="#" shape="rect" coords="414,80,436,100" style="outline:none;" target="_self"     />
<area id="ɦ" alt="ɦ" title="ɦ" href="#" shape="rect" coords="456,78,478,100" style="outline:none;" target="_self"     />
<area id="ɬ" alt="ɬ" title="ɬ" href="#" shape="rect" coords="130,100,152,121" style="outline:none;" target="_self"     />
<area id="ɮ" alt="ɮ" title="ɮ" href="#" shape="rect" coords="153,99,175,120" style="outline:none;" target="_self"     />
<area id="ʋ" alt="ʋ" title="ʋ" href="#" shape="rect" coords="66,119,89,140" style="outline:none;" target="_self"     />
<area id="ɹ" alt="ɹ" title="ɹ" href="#" shape="rect" coords="152,120,175,140" style="outline:none;" target="_self"     />
<area id="ɻ" alt="ɻ" title="ɻ" href="#" shape="rect" coords="236,118,262,140" style="outline:none;" target="_self"     />
<area id="j" alt="j" title="j" href="#" shape="rect" coords="282,120,305,140" style="outline:none;" target="_self"     />
<area id="ɰ" alt="ɰ" title="ɰ" href="#" shape="rect" coords="324,120,348,139" style="outline:none;" target="_self"     />
<area id="ɭ" alt="ɭ" title="ɭ" href="#" shape="rect" coords="236,139,261,159" style="outline:none;" target="_self"     />
<area id="ʎ" alt="ʎ" title="ʎ" href="#" shape="rect" coords="283,141,304,159" style="outline:none;" target="_self"     />
<area id="ʟ" alt="ʟ" title="ʟ" href="#" shape="rect" coords="324,140,348,159" style="outline:none;" target="_self"     />
<area shape="rect" coords="476,157,478,159" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_56754" />
</map>

	        </div>
	        <div class="tab-pane active" id="vowels">
	        	<h1></h1>
	            <img id="Image-Maps-Com-image-maps-2015-07-29-101631" src="img/vowels.png" border="0" width="264" height="187" orgWidth="264" orgHeight="187" usemap="#image-maps-2015-07-29-101631" alt="" />
<map name="image-maps-2015-07-29-101631" id="ImageMapsCom-image-maps-2015-07-29-101631">
<area id="i" alt="i" title="i" href="#" shape="rect" coords="0,0,16,21" style="outline:none;" target="_self" onclick="doThis()"    />
<area id="y" alt="y" title="y" href="#" shape="rect" coords="22,0,45,25" style="outline:none;" target="_self"     />
<area id="u" alt="u" title="u" href="#" shape="rect" coords="246,0,264,22" style="outline:none;" target="_self"     />
<area id="o" alt="o" title="o" href="#" shape="rect" coords="245,57,264,78" style="outline:none;" target="_self"     />
<area id="e" alt="e" title="e" href="#" shape="rect" coords="30,54,54,78" style="outline:none;" target="_self"     />
<area id="a" alt="a" title="a" href="#" shape="rect" coords="111,168,130,187" style="outline:none;" target="_self"     />
<area id="ɨ" alt="ɨ" title="ɨ" href="#" shape="rect" coords="104,0,129,23" style="outline:none;" target="_self"     />
<area id="ʉ" alt="ʉ" title="ʉ" href="#" shape="rect" coords="134,0,158,23" style="outline:none;" target="_self"     />
<area id="ɯ" alt="ɯ" title="ɯ" href="#" shape="rect" coords="215,0,244,23" style="outline:none;" target="_self"     />
<area id="ɪ" alt="ɪ" title="ɪ" href="#" shape="rect" coords="46,28,68,50" style="outline:none;" target="_self"     />
<area id="ʏ" alt="ʏ" title="ʏ" href="#" shape="rect" coords="73,26,98,52" style="outline:none;" target="_self"     />
<area id="ʊ" alt="ʊ" title="ʊ" href="#" shape="rect" coords="194,26,220,50" style="outline:none;" target="_self"     />
<area id="ø" alt="ø" title="ø" href="#" shape="rect" coords="60,55,82,80" style="outline:none;" target="_self"     />
<area id="ɘ" alt="ɘ" title="ɘ" href="#" shape="rect" coords="124,54,148,80" style="outline:none;" target="_self"     />
<area id="ɵ" alt="ɵ" title="ɵ" href="#" shape="rect" coords="152,56,176,79" style="outline:none;" target="_self"     />
<area id="ɤ" alt="ɤ" title="ɤ" href="#" shape="rect" coords="214,55,242,79" style="outline:none;" target="_self"     />
<area id="ɛ" alt="ɛ" title="ɛ" href="#" shape="rect" coords="68,111,94,136" style="outline:none;" target="_self"     />
<area id="œ" alt="œ" title="œ" href="#" shape="rect" coords="98,110,122,135" style="outline:none;" target="_self"     />
<area id="ɜ" alt="ɜ" title="ɜ" href="#" shape="rect" coords="143,110,168,137" style="outline:none;" target="_self"     />
<area id="ɞ" alt="ɞ" title="ɞ" href="#" shape="rect" coords="170,112,195,135" style="outline:none;" target="_self"     />
<area id="ʌ" alt="ʌ" title="ʌ" href="#" shape="rect" coords="216,111,241,136" style="outline:none;" target="_self"     />
<area id="ɔ" alt="ɔ" title="ɔ" href="#" shape="rect" coords="246,111,264,136" style="outline:none;" target="_self"     />
<area id="æ" alt="æ" title="æ" href="#" shape="rect" coords="89,138,113,164" style="outline:none;" target="_self"     />
<area id="ɐ" alt="ɐ" title="ɐ" href="#" shape="rect" coords="163,140,189,164" style="outline:none;" target="_self"     />
<area id="ɶ" alt="ɶ" title="ɶ" href="#" shape="rect" coords="138,171,159,187" style="outline:none;" target="_self"     />
<area id="ɑ" alt="ɑ" title="ɑ" href="#" shape="rect" coords="215,169,242,187" style="outline:none;" target="_self"     />
<area id="ɒ" alt="ɒ" title="ɒ" href="#" shape="rect" coords="244,170,264,187" style="outline:none;" target="_self"     />
<area id="ə" alt="ə" title="ə" href="#" shape="rect" coords="146,84,171,108" style="outline:none;" target="_self"     />
<area shape="rect" coords="262,185,264,187" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_56754" />
</map>

	        </div>
	        <div class="tab-pane" id="other">
	        	<h1></h1>
	  			<input class="pure-button" type="button" value="stress" id="btnStress" />
	  			<input class="pure-button" type="button" value="aspiration" id="btnAspiration" />
	        </div>
	    </div>
		</div>
    </div>
<?php include('footer.php'); ?>
