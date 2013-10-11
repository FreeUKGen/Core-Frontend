<!DOCTYPE html>

<html class="search">

<?php include("templates/header.php"); ?>


      <div class="breadcrumbs">
        <ul>
          <li><a href="index.php">Home</a> /</li>
          <li>Search</li>
        </ul>
      </div>
      <!-- /breadcrumbs -->

      <div id="content">

        <h1>Search</h1>





        <h3>Help</h3>

        <p>This is the help text for the basic search screen</p>

        <p>In the real version, this would explain how the search fields work.</p>

        <p>This will be editable via the admin UI and will not require sysadmin intervention.</p>
        
        <p><a href="search_results.php">View sample search results</a></p>

        <h3>Search Form</h3>

        <form accept-charset="UTF-8" action="/search_queries" class="formtastic search_query"
          id="new_search_query" method="post" novalidate="novalidate">
          <div style="margin:0;padding:0;display:inline">
            <input name="utf8" type="hidden" value="&#x2713;"/>
            <input name="authenticity_token" type="hidden"
              value="q+RGTzl+9VEOcAqiNrwmbtuMDiw1lv1lDSevKKvMdTA="/>
          </div>
          <fieldset class="inputs">
            <ol>
              <li class="string input optional stringish" id="search_query_last_name_input">
                <label class=" label" for="search_query_last_name">Last name</label>
                <input id="search_query_last_name" name="search_query[last_name]" size="20"
                  type="text"/>
              </li>
              <li class="boolean input optional" id="search_query_soundex">
                <input name="search_query[soundex]" type="hidden" value="0"/>
                <label class="" for="search_query_soundex">
                  <input id="search_query_soundex" name="search_query[soundex]" type="checkbox"
                    value="1"/>Check for Soundex</label>
              </li>

              <li class="string input optional stringish" id="search_query_first_name_input">
                <label class=" label" for="search_query_first_name">First name</label>
                <input id="search_query_first_name" length="10" name="search_query[first_name]"
                  size="20" type="text"/>
              </li>

              <li class="boolean input optional" id="search_query_fuzzy_input">
                <input name="search_query[fuzzy]" type="hidden" value="0"/>
                <label class="" for="search_query_fuzzy">
                  <input id="search_query_fuzzy" name="search_query[fuzzy]" type="checkbox"
                    value="1"/>Fuzzy</label>
              </li>
            </ol>
          </fieldset>
          <p>
            <strong>Year(s)</strong>
          </p>
          <fieldset class="inputs">
            <ol>
              <li class="string input optional stringish" id="search_query_start_year_input">
                <label class=" label" for="search_query_start_year">Start</label>
                <input id="search_query_start_year" length="4" name="search_query[start_year]"
                  size="4" type="text"/>
              </li>
              <li class="string input optional stringish" id="search_query_end_year_input">
                <label class=" label" for="search_query_end_year">End</label>
                <input id="search_query_end_year" length="4" name="search_query[end_year]" size="4"
                  type="text"/>
              </li>
            </ol>
            <p>
              <strong>Record Type</strong>
            </p>
            <ol class="search_record_type">
              <li>
                <label for="o1"><input id="o1" name="o1" type="checkbox"/>Baptism</label>
              </li>
              <li>
                <label for="o2"><input id="o2" name="o2" type="checkbox"/>Marriage</label>
              </li>
              <li>
                <label for="o3"><input id="o3" name="o3" type="checkbox"/>Burial</label>
              </li>
            </ol>
            <p>
              <strong>Person Type</strong>
            </p>
            <ol class="search_record_type">
              <li>
                <label for="e1"><input id="e1" name="e1" type="checkbox"/>Person</label>
              </li>
              <li>
                <label for="e2"><input id="e2" name="e2" type="checkbox"/>Relatives</label>
              </li>
              <li>
                <label for="e3"><input id="e3" name="e3" type="checkbox"/>Witnesses</label>
              </li>
            </ol>
            <p>
              <strong>County</strong>
            </p>
            <ul class="checkbox_select_county">
              <li>
                <label for="BDF"><input id="BDF" name="BDF" type="checkbox"/>Bedfordshire
                  (BDF)</label>
              </li>
              <li>
                <label for="BRK"><input id="BRK" name="BRK" type="checkbox"/>Berkshire (BRK)</label>
              </li>
              <li>
                <label for="BKM"><input id="BKM" name="BKM" type="checkbox"/>Buckinghamshire
                  (BKM)</label>
              </li>
              <li>
                <label for="CAM"><input id="CAM" name="CAM" type="checkbox"/>Cambridgeshire
                  (CAM)</label>
              </li>
              <li>
                <label for="CHS"><input id="CHS" name="CHS" type="checkbox"/>Cheshire (CHS)</label>
              </li>
              <li>
                <label for="CON"><input id="CON" name="CON" type="checkbox"/>Cornwall (CON)</label>
              </li>
              <li>
                <label for="CUL"><input id="CUL" name="CUL" type="checkbox"/>Cumberland
                  (CUL)</label>
              </li>
              <li>
                <label for="DBY"><input id="DBY" name="DBY" type="checkbox"/>Derbyshire
                  (DBY)</label>
              </li>
              <li>
                <label for="DEV"><input id="DEV" name="DEV" type="checkbox"/>Devonshire
                  (DEV)</label>
              </li>
              <li>
                <label for="DOR"><input id="DOR" name="DOR" type="checkbox"/>Dorset (DOR)</label>
              </li>
              <li>
                <label for="DUR"><input id="DUR" name="DUR" type="checkbox"/>Durham (DUR)</label>
              </li>
              <li>
                <label for="ESS"><input id="ESS" name="ESS" type="checkbox"/>Essex (ESS)</label>
              </li>
              <li>
                <label for="GLS"><input id="GLS" name="GLS" type="checkbox"/>Gloucestershire
                  (GLS)</label>
              </li>
              <li>
                <label for="HAM"><input id="HAM" name="HAM" type="checkbox"/>Hampshire (HAM)</label>
              </li>
              <li>
                <label for="HEF"><input id="HEF" name="HEF" type="checkbox"/>Herefordshire
                  (HEF)</label>
              </li>
              <li>
                <label for="HRT"><input id="HRT" name="HRT" type="checkbox"/>Hertfordshire
                  (HRT)</label>
              </li>
              <li>
                <label for="HUN"><input id="HUN" name="HUN" type="checkbox"/>Huntingdonshire
                  (HUN)</label>
              </li>
              <li>
                <label for="IOW"><input id="IOW" name="IOW" type="checkbox"/>Isle of Wight
                  (IOW)</label>
              </li>
              <li>
                <label for="KEN"><input id="KEN" name="KEN" type="checkbox"/>Kent (KEN)</label>
              </li>
              <li>
                <label for="LAN"><input id="LAN" name="LAN" type="checkbox"/>Lancashire
                  (LAN)</label>
              </li>
              <li>
                <label for="LEI"><input id="LEI" name="LEI" type="checkbox"/>Leicestershire
                  (LEI)</label>
              </li>
              <li>
                <label for="LIN"><input id="LIN" name="LIN" type="checkbox"/>Lincolnshire
                  (LIN)</label>
              </li>
              <li>
                <label for="o1"><input id="LND" name="o1" type="checkbox"/>London (LND)</label>
              </li>
              <li>
                <label for="o1"><input id="MDX" name="o1" type="checkbox"/>Middlesex (MDX)</label>
              </li>
              <li>
                <label for="o1"><input id="NFK" name="o1" type="checkbox"/>Norfolk (NFK)</label>
              </li>
              <li>
                <label for="o1"><input id="NTH" name="o1" type="checkbox"/>Northamptonshire
                  (NTH)</label>
              </li>
              <li>
                <label for="o1"><input id="NBL" name="o1" type="checkbox"/>Northumberland
                  (NBL)</label>
              </li>
              <li>
                <label for="o1"><input id="NTT" name="o1" type="checkbox"/>Nottinghamshire
                  (NTT)</label>
              </li>
              <li>
                <label for="o1"><input id="OXF" name="o1" type="checkbox"/>Oxfordshire (OXF)</label>
              </li>
              <li>
                <label for="o1"><input id="RUT" name="o1" type="checkbox"/>Rutland (RUT)</label>
              </li>
              <li>
                <label for="o1"><input id="SAL" name="o1" type="checkbox"/>Shropshire (SAL)</label>
              </li>
              <li>
                <label for="o1"><input id="SOM" name="o1" type="checkbox"/>Somerset (SOM)</label>
              </li>
              <li>
                <label for="o1"><input id="STS" name="o1" type="checkbox"/>Staffordshire
                  (STS)</label>
              </li>
              <li>
                <label for="o1"><input id="SFK" name="o1" type="checkbox"/>Suffolk (SFK)</label>
              </li>
              <li>
                <label for="o1"><input id="SRY" name="o1" type="checkbox"/>Surrey (SRY)</label>
              </li>
              <li>
                <label for="o1"><input id="SSX" name="o1" type="checkbox"/>Sussex (SSX)</label>
              </li>
              <li>
                <label for="o1"><input id="WAR" name="o1" type="checkbox"/>Warwickshire
                  (WAR)</label>
              </li>
              <li>
                <label for="o1"><input id="WES" name="o1" type="checkbox"/>Westmorland (WES)</label>
              </li>
              <li>
                <label for="o1"><input id="WIL" name="o1" type="checkbox"/>Wiltshire (WIL)</label>
              </li>
              <li>
                <label for="o1"><input id="WOR" name="o1" type="checkbox"/>Worcestershire
                  (WOR)</label>
              </li>
              <li>
                <label for="o1"><input id="YKS" name="o1" type="checkbox"/>Yorkshire (YKS)</label>
              </li>
              <li>
                <label for="o1"><input id="ERY" name="o1" type="checkbox"/>Yorkshire East Riding
                  (ERY)</label>
              </li>
              <li>
                <label for="o1"><input id="NRY" name="o1" type="checkbox"/>Yorkshire North Riding
                  (NRY)</label>
              </li>
              <li>
                <label for="o1"><input id="WRY" name="o1" type="checkbox"/>Yorkshire West Riding
                  (WRY)</label>
              </li>
              <li>
                <label for="o1"><input id="ABD" name="o1" type="checkbox"/>Aberdeenshire
                  (ABD)</label>
              </li>
              <li>
                <label for="o1"><input id="ANS" name="o1" type="checkbox"/>Angus (ANS)</label>
              </li>
              <li>
                <label for="o1"><input id="ARL" name="o1" type="checkbox"/>Argyllshire (ARL)</label>
              </li>
              <li>
                <label for="o1"><input id="AYR" name="o1" type="checkbox"/>Ayrshire (AYR)</label>
              </li>
              <li>
                <label for="o1"><input id="BAN" name="o1" type="checkbox"/>Banffshire (BAN)</label>
              </li>
              <li>
                <label for="o1"><input id="BEW" name="o1" type="checkbox"/>Berwickshire
                  (BEW)</label>
              </li>
              <li>
                <label for="o1"><input id="BUT" name="o1" type="checkbox"/>Bute (BUT)</label>
              </li>
              <li>
                <label for="o1"><input id="CAI" name="o1" type="checkbox"/>Caithness (CAI)</label>
              </li>
              <li>
                <label for="o1"><input id="CLK" name="o1" type="checkbox"/>Clackmannanshire
                  (CLK)</label>
              </li>
              <li>
                <label for="o1"><input id="DFS" name="o1" type="checkbox"/>Dumfriesshire
                  (DFS)</label>
              </li>
              <li>
                <label for="o1"><input id="DNB" name="o1" type="checkbox"/>Dunbartonshire
                  (DNB)</label>
              </li>
              <li>
                <label for="o1"><input id="ELN" name="o1" type="checkbox"/>East Lothian
                  (ELN)</label>
              </li>
              <li>
                <label for="o1"><input id="FIF" name="o1" type="checkbox"/>Fife (FIF)</label>
              </li>
              <li>
                <label for="o1"><input id="INV" name="o1" type="checkbox"/>Inverness-shire
                  (INV)</label>
              </li>
              <li>
                <label for="o1"><input id="KCD" name="o1" type="checkbox"/>Kincardineshire
                  (KCD)</label>
              </li>
              <li>
                <label for="o1"><input id="KRS" name="o1" type="checkbox"/>Kinross-shire
                  (KRS)</label>
              </li>
              <li>
                <label for="o1"><input id="KKD" name="o1" type="checkbox"/>Kirkcudbrightshire
                  (KKD)</label>
              </li>
              <li>
                <label for="o1"><input id="LKS" name="o1" type="checkbox"/>Lanarkshire (LKS)</label>
              </li>
              <li>
                <label for="o1"><input id="MLN" name="o1" type="checkbox"/>Midlothian (MLN)</label>
              </li>
              <li>
                <label for="o1"><input id="MOR" name="o1" type="checkbox"/>Moray (MOR)</label>
              </li>
              <li>
                <label for="o1"><input id="NAI" name="o1" type="checkbox"/>Nairnshire (NAI)</label>
              </li>
              <li>
                <label for="o1"><input id="OKI" name="o1" type="checkbox"/>Orkney (OKI)</label>
              </li>
              <li>
                <label for="o1"><input id="PEE" name="o1" type="checkbox"/>Peeblesshire
                  (PEE)</label>
              </li>
              <li>
                <label for="o1"><input id="PER" name="o1" type="checkbox"/>Perthshire (PER)</label>
              </li>
              <li>
                <label for="o1"><input id="RFW" name="o1" type="checkbox"/>Renfrewshire
                  (RFW)</label>
              </li>
              <li>
                <label for="o1"><input id="ROC" name="o1" type="checkbox"/>Ross and Cromarty
                  (ROC)</label>
              </li>
              <li>
                <label for="o1"><input id="ROX" name="o1" type="checkbox"/>Roxburghshire
                  (ROX)</label>
              </li>
              <li>
                <label for="o1"><input id="SEL" name="o1" type="checkbox"/>Selkirkshire
                  (SEL)</label>
              </li>
              <li>
                <label for="o1"><input id="SHI" name="o1" type="checkbox"/>Shetland (SHI)</label>
              </li>
              <li>
                <label for="o1"><input id="STI" name="o1" type="checkbox"/>Stirlingshire
                  (STI)</label>
              </li>
              <li>
                <label for="o1"><input id="SUT" name="o1" type="checkbox"/>Sutherland (SUT)</label>
              </li>
              <li>
                <label for="o1"><input id="WLN" name="o1" type="checkbox"/>West Lothian
                  (WLN)</label>
              </li>
              <li>
                <label for="o1"><input id="WIG" name="o1" type="checkbox"/>Wigtownshire
                  (WIG)</label>
              </li>
              <li>
                <label for="o1"><input id="BOR" name="o1" type="checkbox"/>Borders (BOR)</label>
              </li>
              <li>
                <label for="o1"><input id="CEN" name="o1" type="checkbox"/>Central (CEN)</label>
              </li>
              <li>
                <label for="o1"><input id="DGY" name="o1" type="checkbox"/>Dumfries and Galloway
                  (DGY)</label>
              </li>
              <li>
                <label for="o1"><input id="GMP" name="o1" type="checkbox"/>Grampian (GMP)</label>
              </li>
              <li>
                <label for="o1"><input id="HLD" name="o1" type="checkbox"/>Highland (HLD)</label>
              </li>
              <li>
                <label for="o1"><input id="LTN" name="o1" type="checkbox"/>Lothian (LTN)</label>
              </li>
              <li>
                <label for="o1"><input id="OKI" name="o1" type="checkbox"/>Orkney Isles
                  (OKI)</label>
              </li>
              <li>
                <label for="o1"><input id="SHI" name="o1" type="checkbox"/>Shetland Isles
                  (SHI)</label>
              </li>
              <li>
                <label for="o1"><input id="STD" name="o1" type="checkbox"/>Strathclyde (STD)</label>
              </li>
              <li>
                <label for="o1"><input id="TAY" name="o1" type="checkbox"/>Tayside (TAY)</label>
              </li>
              <li>
                <label for="o1"><input id="WIS" name="o1" type="checkbox"/>Western Isles
                  (WIS)</label>
              </li>
              <li>
                <label for="o1"><input id="AGY" name="o1" type="checkbox"/>Anglesey (AGY)</label>
              </li>
              <li>
                <label for="o1"><input id="BRE" name="o1" type="checkbox"/>Brecknockshire
                  (BRE)</label>
              </li>
              <li>
                <label for="o1"><input id="CAE" name="o1" type="checkbox"/>Caernarfonshire
                  (CAE)</label>
              </li>
              <li>
                <label for="o1"><input id="CGN" name="o1" type="checkbox"/>Cardiganshire
                  (CGN)</label>
              </li>
              <li>
                <label for="o1"><input id="CMN" name="o1" type="checkbox"/>Carmarthenshire
                  (CMN)</label>
              </li>
              <li>
                <label for="o1"><input id="DEN" name="o1" type="checkbox"/>Denbighshire
                  (DEN)</label>
              </li>
              <li>
                <label for="o1"><input id="FLN" name="o1" type="checkbox"/>Flintshire (FLN)</label>
              </li>
              <li>
                <label for="o1"><input id="GLA" name="o1" type="checkbox"/>Glamorgan (GLA)</label>
              </li>
              <li>
                <label for="o1"><input id="MER" name="o1" type="checkbox"/>Merionethshire
                  (MER)</label>
              </li>
              <li>
                <label for="o1"><input id="MON" name="o1" type="checkbox"/>Monmouthshire
                  (MON)</label>
              </li>
              <li>
                <label for="o1"><input id="MGY" name="o1" type="checkbox"/>Montgomeryshire
                  (MGY)</label>
              </li>
              <li>
                <label for="o1"><input id="PEM" name="o1" type="checkbox"/>Pembrokeshire
                  (PEM)</label>
              </li>
              <li>
                <label for="o1"><input id="RAD" name="o1" type="checkbox"/>Radnorshire (RAD)</label>
              </li>
              <li>
                <label for="o1"><input id="CWD" name="o1" type="checkbox"/>Clwyd (CWD)</label>
              </li>
              <li>
                <label for="o1"><input id="DFD" name="o1" type="checkbox"/>Dyfed (DFD)</label>
              </li>
              <li>
                <label for="o1"><input id="GNT" name="o1" type="checkbox"/>Gwent (GNT)</label>
              </li>
              <li>
                <label for="o1"><input id="GWN" name="o1" type="checkbox"/>Gwynedd (GWN)</label>
              </li>
              <li>
                <label for="o1"><input id="MGM" name="o1" type="checkbox"/>Mid Glamorgan
                  (MGM)</label>
              </li>
              <li>
                <label for="o1"><input id="POW" name="o1" type="checkbox"/>Powys (POW)</label>
              </li>
              <li>
                <label for="o1"><input id="SGM" name="o1" type="checkbox"/>South Glamorgan
                  (SGM)</label>
              </li>
              <li>
                <label for="o1"><input id="WGM" name="o1" type="checkbox"/>West Glamorgan
                  (WGM)</label>
              </li>
              <li>
                <label for="o1"><input id="JSY" name="o1" type="checkbox"/>Jersey (JSY)</label>
              </li>
              <li>
                <label for="o1"><input id="GSY" name="o1" type="checkbox"/>Guernsey (GSY)</label>
              </li>
              <li>
                <label for="o1"><input id="SRK" name="o1" type="checkbox"/>Sark (SRK)</label>
              </li>
              <li>
                <label for="o1"><input id="ALD" name="o1" type="checkbox"/>Alderney (ALD)</label>
              </li>
            </ul>

            <!--<li class="boolean input optional" id="search_query_inclusive_input">
                      <input name="search_query[inclusive]" type="hidden" value="0" />
                      <label class="" for="search_query_inclusive">
                        <input id="search_query_inclusive" name="search_query[inclusive]" type="checkbox" value="1" />Inclusive</label>
                  </li>-->

          </fieldset>
          <fieldset class="actions">
            <ol>
              <li class="action input_action " id="search_query_submit_action">
                <input name="commit" type="submit" value="Search"/>
              </li>
            </ol>
          </fieldset>
        </form>







      </div>
      <!-- /#content -->

      <div id="footer"> </div>


    </div>
    <!-- /#container -->

  </body>
</html>
