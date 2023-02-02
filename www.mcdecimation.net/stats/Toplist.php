<!DOCTYPE html>
<html>
<head>
	<title>Decimation | Stats</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="phpcss/jquery.fileupload-ui.css">
<link rel="stylesheet" type="text/css" href="phpcss/pvpwebstats2.css">
<script type="text/javascript" src="jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jqueryfileupload/jquery.ui.widget.js"></script>
<script type="text/javascript" src="jqueryfileupload/jqueryfileupload.min.js"></script>
<script type="text/javascript">
var EW_LANGUAGE_ID = "en";
var EW_DATE_SEPARATOR = "/" || "/"; // Default date separator
var EW_DECIMAL_POINT = ".";
var EW_THOUSANDS_SEP = "";
var EW_MAX_FILE_SIZE = 2000000; // Upload max file size
var EW_UPLOAD_ALLOWED_FILE_EXT = "gif,jpg,jpeg,bmp,png,doc,xls,pdf,zip"; // Allowed upload file extension

// Ajax settings
var EW_LOOKUP_FILE_NAME = "ewlookup10.php"; // Lookup file name
var EW_AUTO_SUGGEST_MAX_ENTRIES = 10; // Auto-Suggest max entries

// Common JavaScript messages
var EW_DISABLE_BUTTON_ON_SUBMIT = true;
var EW_IMAGE_FOLDER = "phpimages/"; // Image folder
var EW_UPLOAD_URL = "ewupload10.php"; // Upload url
var EW_UPLOAD_THUMBNAIL_WIDTH = 200; // Upload thumbnail width
var EW_UPLOAD_THUMBNAIL_HEIGHT = 200; // Upload thumbnail height
var EW_USE_JAVASCRIPT_MESSAGE = false;
var EW_IS_MOBILE = false;
</script>
<script type="text/javascript" src="phpjs/jsrender.min.js"></script>
<script type="text/javascript" src="phpjs/ewp10.js"></script>
<script type="text/javascript" src="phpjs/userfn10.js"></script>
<script type="text/javascript">
var ewLanguage = new ew_Language({"deleteconfirmmsg":"Do you want to delete this record?","deletemulticonfirmmsg":"Do you want to delete the selected records?","enternewpassword":"Please enter new password","enteroldpassword":"Please enter old password","enterpassword":"Please enter password","enterpwd":"Please enter password","enterrequiredfield":"Please enter required field","enterusername":"Please enter username","entervalidatecode":"Please enter the validation code shown","entersenderemail":"Please enter sender email","enterpropersenderemail":"Exceed maximum sender email count or email address incorrect","enterrecipientemail":"Please enter recipient email","enterproperrecipientemail":"Exceed maximum recipient email count or email address incorrect","enterproperccemail":"Exceed maximum cc email count or email address incorrect","enterproperbccemail":"Exceed maximum bcc email count or email address incorrect","entersubject":"Please enter subject","enteruid":"Please enter user ID","entervalidemail":"Please enter valid Email Address!","exporttoemail":"Email","exporttoemailtext":"Email","hidehighlight":"Hide highlight","incorrectemail":"Incorrect email","incorrectfield":"Incorrect field","incorrectfloat":"Incorrect floating point number","incorrectguid":"Incorrect GUID","incorrectinteger":"Incorrect integer","incorrectphone":"Incorrect phone number","incorrectregexp":"Regular expression not matched","incorrectrange":"Number must be between %1 and %2","incorrectssn":"Incorrect social security number","incorrecttime":"Incorrect time (hh:mm:ss)","incorrectzip":"Incorrect ZIP code","insertfailed":"Insert failed","invalidrecord":"Invalid Record! Key is null","loading":"Loading...","maxfilesize":"Max. file size (%s bytes) exceeded.","messageok":"OK","mismatchpassword":"Mismatch Password","noaddrecord":"No records to be added","nofieldselected":"No field selected for update","norecordselected":"No records selected","pleasewait":"Please wait...","sendemailsuccess":"Email sent successfully","showhighlight":"Show highlight","uploading":"Uploading...","uploadstart":"Start","uploadcancel":"Cancel","uploaddelete":"Delete","uploadoverwrite":"Overwrite old file?","uploaderrmsgmaxnumberoffiles":"Maximum number of files exceeded","uploaderrmsgmaxfilelength":"Total length of file names exceeds field length","userleveladministratorname":"User level name for user level -1 must be 'Administrator'","userlevelidinteger":"User Level ID must be integer","userleveldefaultname":"User level name for user level 0 must be 'Default'","userlevelidincorrect":"User defined User Level ID must be larger than 0","userlevelnameincorrect":"User defined User Level name cannot be 'Administrator' or 'Default'","wrongfiletype":"File type is not allowed."});</script>
<script type="text/javascript">

// Write your client script here, no need to add script tags.
</script>
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="http://www.mcdecimation.net/stats/favicon.ico"><link rel="icon" type="image/vnd.microsoft.icon" href="http://www.mcdecimation.net/stats/favicon.ico">
<meta name="generator" content="PHPMaker v10.0.1">
</head>
<body>
<div class="ewLayout">
	<!-- header (begin) --><!-- *** Note: Only licensed users are allowed to change the logo *** -->
  <div id="ewHeaderRow" class="ewHeaderRow"><img src="phpimages/pvpstats.png" alt="" style="border: 0;">	</div>
	<!-- header (end) -->
	<!-- content (begin) -->
	<table id="ewContentTable" cellspacing="0" class="ewContentTable">
		<tr><td id="ewMenuColumn" class="ewMenuColumn">
			<!-- left column (begin) -->
<!-- Begin Main Menu -->
<div class="ewMenu">
<ul id="RootMenu" class="dropdown-menu">
<li class="disabled"><a href="Toplist.php?cmd=resetall">Top Rank</a></li>
<li><a href="Top_Killslist.php">Top Kills</a></li>
</ul>
</div>
<!-- End Main Menu -->
			<!-- left column (end) -->
		</td>
		<td id="ewContentColumn" class="ewContentColumn">
			<!-- right column (begin) -->
				<p class="ewSiteTitle">Decimation - Player Statistics</p>
<script type="text/javascript">

// Page object
var Top_list = new ew_Page("Top_list");
Top_list.PageID = "list"; // Page ID
var EW_PAGE_ID = Top_list.PageID; // For backward compatibility

// Form object
var fToplist = new ew_Form("fToplist");
fToplist.FormKeyCountName = 'key_count';

// Form_CustomValidate event
fToplist.Form_CustomValidate = 
 function(fobj) { // DO NOT CHANGE THIS LINE!

 	// Your custom validation code here, return false if invalid. 
 	return true;
 }

// Use JavaScript validation or not
fToplist.ValidateRequired = true;

// Dynamic selection lists
// Form object for search

</script>
<script type="text/javascript">

// Write your client script here, no need to add script tags.
</script>
<table class="ewStdTable"><tr><td><ul class="breadcrumb"><li><a href="index.php">Home</a><span class="divider">/</span></li><li class="active"><span id="ewPageCaption">Top Rank</span></li></ul></td></tr></table><table class="ewStdTable"><tr><td><div class="ewMessageDialog"></div></td></tr></table><table cellspacing="0" class="ewGrid"><tr><td class="ewGridContent">
<div class="ewGridUpperPanel">
<form name="ewPagerForm" class="ewForm form-horizontal" action="Toplist.php">
<table class="ewPager">
<tr><td>
<table cellspacing="0" class="ewStdTable"><tbody><tr><td>
<div class="pagination"><ul>
					<li class=" active"><a href="#">1</a></li>
			<li><a href="Toplist.php?start=22">2</a></li>
			<li><a href="Toplist.php?start=43">3</a></li>
			<li><a href="Toplist.php?start=64">4</a></li>
			<li><a href="Toplist.php?start=85">5</a></li>
			<li><a href="Toplist.php?start=106">6</a></li>
			<li><a href="Toplist.php?start=127">7</a></li>
			<li><a href="Toplist.php?start=148">8</a></li>
			<li><a href="Toplist.php?start=169">9</a></li>
			<li><a href="Toplist.php?start=190">10</a></li>
			<li><a href="Toplist.php?start=211">11-20</a></li>
			<li><a href="Toplist.php?start=22">Next</a></li>
			<li><a href="Toplist.php?start=10249">Last</a></li>
	</ul></div>
</td>
<td>
	&nbsp;&nbsp;&nbsp;&nbsp;	Records&nbsp;1&nbsp;to&nbsp;21&nbsp;of&nbsp;10267</td>
</tr></tbody></table>
</td>
</tr></table>
</form>
<div class="ewListOtherOptions">
</div>
</div>
<form name="fToplist" id="fToplist" class="ewForm form-horizontal" action="Toplist.php" method="post">
<input type="hidden" name="t" value="Top">
<div id="gmp_Top" class="ewGridMiddlePanel">
<table class="ewMultiColumnTable">
<tr>
	<td valign="top" data-rowindex="1" id="r1_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/epic.png" title="Epic Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
859</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/WarHead1_1/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #FFFFFF; background-color: #4B088A">
WarHead1_1</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
1055</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
196</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
334</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el1_Top_sequence" class="Top_sequence">1.</span></span></div>
	</td>
	<td valign="top" data-rowindex="2" id="r2_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/master.png" title="Master Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
714</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/SssimonnN98/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #FFFFFF; background-color: #013ADF">
SssimonnN98</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
896</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
182</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
268</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el2_Top_sequence" class="Top_sequence">2.</span></span></div>
	</td>
	<td valign="top" data-rowindex="3" id="r3_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/master.png" title="Master Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
702</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/wolfgang2d2/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #FFFFFF; background-color: #013ADF">
wolfgang2d2</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
921</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
219</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
225</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el3_Top_sequence" class="Top_sequence">3.</span></span></div>
	</td>
</tr>
<tr>
	<td valign="top" data-rowindex="4" id="r4_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/master.png" title="Master Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
680</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/RickKolumbus/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #FFFFFF; background-color: #013ADF">
RickKolumbus</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
858</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
178</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
243</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el4_Top_sequence" class="Top_sequence">4.</span></span></div>
	</td>
	<td valign="top" data-rowindex="5" id="r5_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/master.png" title="Master Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
640</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/HatzeFlatz/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #FFFFFF; background-color: #013ADF">
HatzeFlatz</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
1067</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
427</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
291</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el5_Top_sequence" class="Top_sequence">5.</span></span></div>
	</td>
	<td valign="top" data-rowindex="6" id="r6_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/master.png" title="Master Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
569</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/o0_XenoWraith_0o/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #FFFFFF; background-color: #013ADF">
o0_XenoWraith_0o</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
755</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
186</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
256</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el6_Top_sequence" class="Top_sequence">6.</span></span></div>
	</td>
</tr>
<tr>
	<td valign="top" data-rowindex="7" id="r7_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/diamond.png" title="Diamond Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
462</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/Collor/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #00FFFF">
Collor</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
558</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
96</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
243</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el7_Top_sequence" class="Top_sequence">7.</span></span></div>
	</td>
	<td valign="top" data-rowindex="8" id="r8_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/diamond.png" title="Diamond Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
457</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/Loluwotm8/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #00FFFF">
Loluwotm8</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
760</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
303</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
222</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el8_Top_sequence" class="Top_sequence">8.</span></span></div>
	</td>
	<td valign="top" data-rowindex="9" id="r9_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/diamond.png" title="Diamond Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
456</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/PlazaMexicoPride/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #00FFFF">
PlazaMexicoPride</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
877</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
421</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
272</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el9_Top_sequence" class="Top_sequence">9.</span></span></div>
	</td>
</tr>
<tr>
	<td valign="top" data-rowindex="10" id="r10_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/diamond.png" title="Diamond Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
409</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/ponywithswag/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #00FFFF">
ponywithswag</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
550</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
141</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
197</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el10_Top_sequence" class="Top_sequence">10.</span></span></div>
	</td>
	<td valign="top" data-rowindex="11" id="r11_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/diamond.png" title="Diamond Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
403</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/JustMuppie/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #00FFFF">
JustMuppie</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
507</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
104</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
139</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el11_Top_sequence" class="Top_sequence">11.</span></span></div>
	</td>
	<td valign="top" data-rowindex="12" id="r12_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/diamond.png" title="Diamond Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
376</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/Shadow_Manser/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #00FFFF">
Shadow_Manser</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
440</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
64</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
245</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el12_Top_sequence" class="Top_sequence">12.</span></span></div>
	</td>
</tr>
<tr>
	<td valign="top" data-rowindex="13" id="r13_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
336</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/Funkyshmug/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
Funkyshmug</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
429</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
93</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
152</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el13_Top_sequence" class="Top_sequence">13.</span></span></div>
	</td>
	<td valign="top" data-rowindex="14" id="r14_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
329</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/GoldenPhoenix201/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
GoldenPhoenix201</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
471</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
142</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
183</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el14_Top_sequence" class="Top_sequence">14.</span></span></div>
	</td>
	<td valign="top" data-rowindex="15" id="r15_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
312</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/LordWafflebottom/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
LordWafflebottom</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
401</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
89</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
229</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el15_Top_sequence" class="Top_sequence">15.</span></span></div>
	</td>
</tr>
<tr>
	<td valign="top" data-rowindex="16" id="r16_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
306</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/The__CrafterLP/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
The__CrafterLP</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
699</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
393</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
192</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el16_Top_sequence" class="Top_sequence">16.</span></span></div>
	</td>
	<td valign="top" data-rowindex="17" id="r17_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
303</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/Sonic_Turtla/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
Sonic_Turtla</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
474</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
171</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
142</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el17_Top_sequence" class="Top_sequence">17.</span></span></div>
	</td>
	<td valign="top" data-rowindex="18" id="r18_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
290</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/OP_Asian/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
OP_Asian</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
416</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
126</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
140</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el18_Top_sequence" class="Top_sequence">18.</span></span></div>
	</td>
</tr>
<tr>
	<td valign="top" data-rowindex="19" id="r19_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
288</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/throrin99/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
throrin99</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
441</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
153</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
104</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el19_Top_sequence" class="Top_sequence">19.</span></span></div>
	</td>
	<td valign="top" data-rowindex="20" id="r20_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
282</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/LiKeTvZ/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
LiKeTvZ</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
448</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
166</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
108</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el20_Top_sequence" class="Top_sequence">20.</span></span></div>
	</td>
	<td valign="top" data-rowindex="21" id="r21_Top" data-rowtype="1">
	<table class="table table-bordered table-striped">
			<tr>
			<td class="ewTableHeader"><span class="Top_division">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Rank:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="division/gold.png" title="Gold Division"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_Points">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Points</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="font-weight: bold;">
276</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_skins">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;"></div>
			</span></td>
			<td style="white-space: nowrap;">
<span>
<img src="http://minotar.net/helm/TheRealSandstorm/50.png"></span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_name">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Survivor Name:</div>
			</span></td>
			<td style="white-space: nowrap;">
<span style="color: #000000; background-color: #FACC2E">
TheRealSandstorm</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_kills">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Kills</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
368</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_deaths">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Deaths</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
92</span>
</td>
		</tr>
				<tr>
			<td class="ewTableHeader"><span class="Top_streak">
				<div class="ewTableHeaderCaption" style="white-space: nowrap;">Streak</div>
			</span></td>
			<td style="white-space: nowrap;text-align: center;">
<span>
34</span>
</td>
		</tr>
		</table>
<div class="ewMultiColumnListOption">
<span class="ewListOptionBody ewListOptionSeparator" style="white-space: nowrap;" data-name="sequence"><span id="el21_Top_sequence" class="Top_sequence">21.</span></span></div>
	</td>
</tr>
</table>
<input type="hidden" name="a_list" id="a_list" value="">
</div>
</form>
<div class="ewGridLowerPanel">
<form name="ewPagerForm" class="ewForm form-horizontal" action="Toplist.php">
<table class="ewPager">
<tr><td>
<table cellspacing="0" class="ewStdTable"><tbody><tr><td>
<div class="pagination"><ul>
					<li class=" active"><a href="#">1</a></li>
			<li><a href="Toplist.php?start=22">2</a></li>
			<li><a href="Toplist.php?start=43">3</a></li>
			<li><a href="Toplist.php?start=64">4</a></li>
			<li><a href="Toplist.php?start=85">5</a></li>
			<li><a href="Toplist.php?start=106">6</a></li>
			<li><a href="Toplist.php?start=127">7</a></li>
			<li><a href="Toplist.php?start=148">8</a></li>
			<li><a href="Toplist.php?start=169">9</a></li>
			<li><a href="Toplist.php?start=190">10</a></li>
			<li><a href="Toplist.php?start=211">11-20</a></li>
			<li><a href="Toplist.php?start=22">Next</a></li>
			<li><a href="Toplist.php?start=10249">Last</a></li>
	</ul></div>
</td>
<td>
	&nbsp;&nbsp;&nbsp;&nbsp;	Records&nbsp;1&nbsp;to&nbsp;21&nbsp;of&nbsp;10267</td>
</tr></tbody></table>
</td>
</tr></table>
</form>
<div class="ewListOtherOptions">
</div>
</div>
</td></tr></table>
<script type="text/javascript">
fToplist.Init();
</script>
<script type="text/javascript">

// Write your table-specific startup script here
// document.write("page loaded");

</script>
			<!-- right column (end) -->
					</td></tr>
	</table>
	<!-- content (end) -->
	<!-- footer (begin) --><!-- *** Note: Only licensed users are allowed to remove or change the following copyright statement. *** -->
	<div id="ewFooterRow" class="ewFooterRow">	
		<div class="ewFooterText">Official Decimation - Player Statistics</div>
		<!-- Place other links, for example, disclaimer, here -->		
	</div>
	<!-- footer (end) -->	
</div>
<!-- message box -->
<div id="ewMsgBox" class="modal hide" data-backdrop="false"><div class="modal-body"></div><div class="modal-footer"><a href="#" class="btn btn-primary ewButton" data-dismiss="modal" aria-hidden="true">OK</a></div></div>
<!-- tooltip -->
<div id="ewTooltip"></div>
<script type="text/javascript">

// Write your global startup script here
// document.write("page loaded");

</script>
</body>
</html>
