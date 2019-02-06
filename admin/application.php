<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/22/2018
 * Time: 10:49 AM
 */
require_once './restricted.php';
session_regenerate_id();
if (isset($_GET['id'])) {
    require_once '../Database/Database.php';
    require_once '../Database/ZakRepository.php';
    require_once '../Database/CasyRepository.php';
    $db = new Database();
    $zr = new ZakRepository($db);
    $cr = new CasyRepository($db);
    $zak = $zr->getZak($_GET['id']);
    $jmeno = $zak['jmeno'];
    $prijmeni = $zak['prijmeni'];
    $pohlavi=$zak['pohlavi'];
    $spadovazs=$zak['spadovazs'];
    $roknow = date("Y");
    $datumnar = new DateTime($zak['datumnar']);
    $datumnar=$datumnar->format ('d.m.Y');
    $obec = $zak['obec'];
    $ulice = $zak['ulice'];
    $psc = $zak['psc'];
    $jmenoz = $zak['jmenoz'];
    $prijmeniz = $zak['prijmeniz'];
    $obecz = $zak['obecz'];
    $ulicez = $zak['ulicez'];
    $pscz = $zak['pscz'];
    $obeczdor=$zak['obeczdor'];
    $ulicezdor=$zak['ulicezdor'];
    $psczdor=$zak['psczdor'];
    $jmenoz2=$zak['jmenoz2'];
    $prijmeniz2=$zak['prijmeniz2'];
    $obecz2=$zak['obecz2'];
    $ulicez2 = $zak['ulicez2'];
    $pscz2 = $zak['pscz2'];
    $obecz2dor=$zak['obecz2dor'];
    $ulicez2dor=$zak['ulicez2dor'];
    $pscz2dor=$zak['pscz2dor'];
    $telefon=$zak['telefon'];
    $email=$zak['email'];
    $telefonz2=$zak['telefonz2'];
    $emailz2=$zak['emailz2'];
    $typz=$zak['typz'];
    $typz2=$zak['typz2'];
    $datetime =new DateTime($cr->getCasyById ($zak['idCas'])['Datum']);
    $cas =  $datetime->format ("d.m.Y H:i");
    
    
    header ("Content-type: application/vnd.ms-word;charset=utf-8");
    header ("Content-Disposition: attachment;Filename=prihlaska_k_zapisu_do_prvni_tridy_" . $jmeno . "_" . $prijmeni . ".doc");
    
    echo"<html xmlns:v=\"urn:schemas-microsoft-com:vml\"
xmlns:o=\"urn:schemas-microsoft-com:office:office\"
xmlns:w=\"urn:schemas-microsoft-com:office:word\"
xmlns:m=\"http://schemas.microsoft.com/office/2004/12/omml\"
xmlns=\"http://www.w3.org/TR/REC-html40\">

<head>
<meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">
<meta name=ProgId content=Word.Document>
<meta name=Generator content=\"Microsoft Word 15\">
<meta name=Originator content=\"Microsoft Word 15\">
<link rel=File-List
href=\"PŘIHLÁŠKA%20K%20ZÁPISU%20DO%201.%20TŘÍDY%20(2)_soubory/filelist.xml\">
<title>PŘIHLÁŠKA</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Vlastník</o:Author>
  <o:LastAuthor>xstor</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>367</o:TotalTime>
  <o:LastPrinted>2015-09-18T11:56:00Z</o:LastPrinted>
  <o:Created>2019-02-03T10:49:00Z</o:Created>
  <o:LastSaved>2019-02-03T10:49:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>370</o:Words>
  <o:Characters>2112</o:Characters>
  <o:Lines>17</o:Lines>
  <o:Paragraphs>4</o:Paragraphs>
  <o:CharactersWithSpaces>2478</o:CharactersWithSpaces>
  <o:Version>16.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:TargetScreenSize>800x600</o:TargetScreenSize>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData
href=\"PŘIHLÁŠKA%20K%20ZÁPISU%20DO%201.%20TŘÍDY%20(2)_soubory/themedata.thmx\">
<link rel=colorSchemeMapping
href=\"PŘIHLÁŠKA%20K%20ZÁPISU%20DO%201.%20TŘÍDY%20(2)_soubory/colorschememapping.xml\">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:HyphenationZone>21</w:HyphenationZone>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:UseWord2010TableStyleRules/>
   <w:DontGrowAutofit/>
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val=\"Cambria Math\"/>
   <m:brkBin m:val=\"before\"/>
   <m:brkBinSub m:val=\"&#45;-\"/>
   <m:smallFrac m:val=\"off\"/>
   <m:dispDef/>
   <m:lMargin m:val=\"0\"/>
   <m:rMargin m:val=\"0\"/>
   <m:defJc m:val=\"centerGroup\"/>
   <m:wrapIndent m:val=\"1440\"/>
   <m:intLim m:val=\"subSup\"/>
   <m:naryLim m:val=\"undOvr\"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"false\"
  DefSemiHidden=\"false\" DefQFormat=\"false\" LatentStyleCount=\"375\">
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Normal\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"heading 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 6\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 7\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 8\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"heading 9\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   QFormat=\"true\" Name=\"caption\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Title\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Subtitle\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Strong\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Emphasis\"/>
  <w:LsdException Locked=\"false\" Priority=\"99\" SemiHidden=\"true\"
   Name=\"Placeholder Text\"/>
  <w:LsdException Locked=\"false\" Priority=\"1\" QFormat=\"true\" Name=\"No Spacing\"/>
  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading\"/>
  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List\"/>
  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid\"/>
  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List\"/>
  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading\"/>
  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List\"/>
  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid\"/>
  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"99\" SemiHidden=\"true\" Name=\"Revision\"/>
  <w:LsdException Locked=\"false\" Priority=\"34\" QFormat=\"true\"
   Name=\"List Paragraph\"/>
  <w:LsdException Locked=\"false\" Priority=\"29\" QFormat=\"true\" Name=\"Quote\"/>
  <w:LsdException Locked=\"false\" Priority=\"30\" QFormat=\"true\"
   Name=\"Intense Quote\"/>
  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"19\" QFormat=\"true\"
   Name=\"Subtle Emphasis\"/>
  <w:LsdException Locked=\"false\" Priority=\"21\" QFormat=\"true\"
   Name=\"Intense Emphasis\"/>
  <w:LsdException Locked=\"false\" Priority=\"31\" QFormat=\"true\"
   Name=\"Subtle Reference\"/>
  <w:LsdException Locked=\"false\" Priority=\"32\" QFormat=\"true\"
   Name=\"Intense Reference\"/>
  <w:LsdException Locked=\"false\" Priority=\"33\" QFormat=\"true\" Name=\"Book Title\"/>
  <w:LsdException Locked=\"false\" Priority=\"37\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"Bibliography\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"TOC Heading\"/>
  <w:LsdException Locked=\"false\" Priority=\"41\" Name=\"Plain Table 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"42\" Name=\"Plain Table 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"43\" Name=\"Plain Table 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"44\" Name=\"Plain Table 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"45\" Name=\"Plain Table 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"40\" Name=\"Grid Table Light\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"Grid Table 1 Light\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"Grid Table 6 Colorful\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"Grid Table 7 Colorful\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"Grid Table 1 Light Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"Grid Table 6 Colorful Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"Grid Table 7 Colorful Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"Grid Table 1 Light Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"Grid Table 6 Colorful Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"Grid Table 7 Colorful Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"Grid Table 1 Light Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"Grid Table 6 Colorful Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"Grid Table 7 Colorful Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"Grid Table 1 Light Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"Grid Table 6 Colorful Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"Grid Table 7 Colorful Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"Grid Table 1 Light Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"Grid Table 6 Colorful Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"Grid Table 7 Colorful Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"Grid Table 1 Light Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"Grid Table 6 Colorful Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"Grid Table 7 Colorful Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"List Table 1 Light\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"List Table 6 Colorful\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"List Table 7 Colorful\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"List Table 1 Light Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"List Table 6 Colorful Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"List Table 7 Colorful Accent 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"List Table 1 Light Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"List Table 6 Colorful Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"List Table 7 Colorful Accent 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"List Table 1 Light Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"List Table 6 Colorful Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"List Table 7 Colorful Accent 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"List Table 1 Light Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"List Table 6 Colorful Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"List Table 7 Colorful Accent 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"List Table 1 Light Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"List Table 6 Colorful Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"List Table 7 Colorful Accent 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"46\"
   Name=\"List Table 1 Light Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"51\"
   Name=\"List Table 6 Colorful Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"52\"
   Name=\"List Table 7 Colorful Accent 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"99\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"Mention\"/>
  <w:LsdException Locked=\"false\" Priority=\"99\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"Smart Hyperlink\"/>
  <w:LsdException Locked=\"false\" Priority=\"99\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"Hashtag\"/>
  <w:LsdException Locked=\"false\" Priority=\"99\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"Unresolved Mention\"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:\"Cambria Math\";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:\"\";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:\"Times New Roman\",serif;
	mso-fareast-font-family:\"Times New Roman\";
	mso-ansi-language:CS;
	mso-fareast-language:CS;}
a:link, span.MsoHyperlink
	{mso-style-unhide:no;
	mso-style-parent:\"\";
	color:#0563C1;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-unhide:no;
	color:#954F72;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-unhide:no;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:\"Tahoma\",sans-serif;
	mso-fareast-font-family:\"Times New Roman\";
	mso-ansi-language:CS;
	mso-fareast-language:CS;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:35.4pt;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:\"Times New Roman\",serif;
	mso-fareast-font-family:\"Times New Roman\";
	mso-ansi-language:CS;
	mso-fareast-language:CS;}
span.SpellE
	{mso-style-name:\"\";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:\"\";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:28.35pt 42.55pt 28.35pt 42.55pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:88888726;
	mso-list-type:hybrid;
	mso-list-template-ids:1258187596 67436559 67436545 67436571 67436559 67436569 67436571 67436559 67436569 67436571;}
@list l0:level1
	{mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l0:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l1
	{mso-list-id:1187868857;
	mso-list-type:hybrid;
	mso-list-template-ids:1411660004 67436545 67436547 67436549 67436545 67436547 67436549 67436545 67436547 67436549;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2
	{mso-list-id:1652178517;
	mso-list-type:hybrid;
	mso-list-template-ids:1867649138 -1511514082 67436569 67436571 67436559 67436569 67436571 67436559 67436569 67436571;}
@list l2:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:88.8pt;
	text-indent:-.25in;}
@list l2:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:124.8pt;
	text-indent:-.25in;}
@list l2:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:160.8pt;
	text-indent:-9.0pt;}
@list l2:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:196.8pt;
	text-indent:-.25in;}
@list l2:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:232.8pt;
	text-indent:-.25in;}
@list l2:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:268.8pt;
	text-indent:-9.0pt;}
@list l2:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:304.8pt;
	text-indent:-.25in;}
@list l2:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:340.8pt;
	text-indent:-.25in;}
@list l2:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:376.8pt;
	text-indent:-9.0pt;}
@list l3
	{mso-list-id:1675844035;
	mso-list-type:hybrid;
	mso-list-template-ids:-1239000588 67436545 67436547 67436549 67436545 67436547 67436549 67436545 67436547 67436549;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.0in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.5in;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.0in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level4
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.5in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.0in;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.5in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:4.0in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:4.5in;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:5.0in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4
	{mso-list-id:2128307972;
	mso-list-type:hybrid;
	mso-list-template-ids:-2015974700 67436545 67436547 67436549 67436545 67436547 67436549 67436545 67436547 67436549;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l4:level3
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level4
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l4:level6
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level7
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l4:level9
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:\"Normální tabulka\";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-parent:\"\";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:\"Times New Roman\",serif;}
table.MsoTableGrid
	{mso-style-name:\"Mřížka tabulky\";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:\"Times New Roman\",serif;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext=\"edit\" spidmax=\"1026\"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext=\"edit\">
  <o:idmap v:ext=\"edit\" data=\"1\"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US link=\"#0563C1\" vlink=\"#954F72\" style='tab-interval:35.4pt'>

<div class=WordSection1>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'>PŘIHLÁŠKA <span style='mso-spacerun:yes'> </span><o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='text-indent:35.4pt'><span lang=CS style='font-size:
11.0pt'>Přihlašuji svého syna (svoji dceru) k zápisu do 1. <span class=GramE>třídy
<span style='mso-spacerun:yes'> </span>na</span> <span class=SpellE>ZŠsRVCJ</span>
Metelkovo nám. 968, Teplice.<o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:25.75pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
  style='font-size:11.0pt'>Jméno dítěte:<o:p></o:p></span></b></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$jmeno</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:25.75pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Příjmení dítěte:<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$prijmeni</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:19.75pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Pohlaví<o:p></o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:19.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$pohlavi</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:25.75pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Datum narození:<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$datumnar</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:25.75pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Adresa trvalého bydliště:<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>$obec $ulice <span
  class=SpellE>$psc</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:25.75pt'>
  <td width=670 colspan=2 valign=top style='width:502.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Spádová ZŠ dle
  místa trvalého bydliště (Obecně závazná vyhláška Statutárního města Teplice
  č. 1/2016):<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$spadovazs</span><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:25.25pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
  style='font-size:11.0pt'>Jméno a příjmení $typz:<o:p></o:p></span></b></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$jmenoz</span> <span class=SpellE>$prijmeniz</span><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:25.25pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Telefonní kontakt:<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>$telefon<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:25.25pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>E mail:<o:p></o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>$email<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:25.25pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Adresa trvalého
  bydliště:<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$obecz</span> <span class=SpellE>$ulicez</span> <span
  class=SpellE>$pscz</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:25.25pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Adresa pro
  doručování (pokud se liší od trvalého pobytu)<o:p></o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><span
  class=SpellE>$obeczdor</span> <span class=SpellE>$ulicezdor</span> <span
  class=SpellE>$psczdor</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:24.45pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:24.45pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
  style='font-size:11.0pt'>Jméno a příjmení $typz2:<o:p></o:p></span></b></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.45pt'>
  <p class=MsoNormal style='tab-stops:198.75pt'><span lang=CS style='font-size:
  11.0pt'>$jmenoz2 $prijmeniz2<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:25.25pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Telefonní kontakt:<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal style='tab-stops:198.75pt'><span lang=CS style='font-size:
  11.0pt'>$telefonz2<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:25.25pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>E mail:<o:p></o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.25pt'>
  <p class=MsoNormal style='tab-stops:198.75pt'><span lang=CS style='font-size:
  11.0pt'>$emailz2<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:26.1pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.1pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Adresa trvalého bydliště:<o:p></o:p></span></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.1pt'>
  <p class=MsoNormal style='tab-stops:198.75pt'><span lang=CS style='font-size:
  11.0pt'>$obecz2 $ulicez2 $pscz2<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:26.1pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.1pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Adresa pro
  doručování (pokud se liší od trvalého pobytu)<o:p></o:p></span></p>
  </td>
  <td width=466 valign=top style='width:349.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:26.1pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>$obecz2dor $ulicez2dor
  $pscz2dor<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width=690 valign=top style='width:517.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
  style='font-size:11.0pt'>Vámi zvolený <span class=GramE>termín: <span
  style='mso-spacerun:yes'>  </span></span><span class=SpellE>$cas</span><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
  style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Vážení rodiče,<o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'>děkujeme, že jste si
k&nbsp;zápisu Vašeho dítěte do 1. třídy zvolili právě naši školu. Věnujte
prosím pozornost několika níže uvedeným informacím:<o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<ul style='margin-top:0in' type=disc>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span lang=CS
     style='font-size:11.0pt'>K&nbsp;zápisu se dostavte ve vámi zvoleném
     termínu, <span class=GramE>20 – 30</span> minut před uvedeným časem, tak
     aby mohl být učiněn administrativní zápis.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span lang=CS
     style='font-size:11.0pt'>S&nbsp;sebou přineste doklady, bez kterých nemůže
     být zápis uskutečněn:<o:p></o:p></span></li>
 <ul style='margin-top:0in' type=circle>
  <li class=MsoNormal style='mso-list:l4 level2 lfo5'><span lang=CS
      style='font-size:11.0pt'>rodný list dítěte<o:p></o:p></span></li>
  <li class=MsoNormal style='mso-list:l4 level2 lfo5'><span lang=CS
      style='font-size:11.0pt'>občanský průkaz zákonného zástupce (u cizích
      státních příslušníků pas)<o:p></o:p></span></li>
  <li class=MsoNormal style='mso-list:l4 level2 lfo5'><span lang=CS
      style='font-size:11.0pt'>rozhodnutí o odkladu povinné školní docházky
      z&nbsp;předchozího roku (pokud bylo uděleno)<o:p></o:p></span></li>
  <li class=MsoNormal style='mso-list:l4 level2 lfo5'><span lang=CS
      style='font-size:11.0pt'>žádost o přijetí k&nbsp;základnímu vzdělávání,
      která byla vygenerována s&nbsp;touto přihláškou<o:p></o:p></span></li>
 </ul>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span lang=CS
     style='font-size:11.0pt'>Má-li dítě dva zákonné zástupce, musí žádost
     obsahovat podpisy obou rodičů.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span lang=CS
     style='font-size:11.0pt'>Zjistíte-li po přihlášení k&nbsp;zápisu, že vám
     stanovený termín nevyhovuje nebo se rozhodnete přihlásit dítě na jiné
     škole, informujte nás prosím neprodleně prostřednictvím mailové adresy <a
     href=\"mailto:sarka.lastovkova@zsmetelkovo.cz\">sarka.lastovkova@zsmetelkovo.cz</a>
     nebo na telefonním čísle 417&nbsp;539&nbsp;040.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span lang=CS
     style='font-size:11.0pt'>Pokud se dítě nebude moci ze zdravotních důvodů
     zápisu zúčastnit, je nutné nás neprodleně informovat, aby mohl být zvolen
     případný náhradní termín (tel. 417&nbsp;539&nbsp;040).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span lang=CS
     style='font-size:11.0pt'>Informace o zápisu a Směrnici o přijímání
     k&nbsp;základnímu vzdělávání jsou k&nbsp;dispozici na <a
     href=\"http://www.zsmetelkovo.cz\">www.zsmetelkovo.cz</a>.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span class=GramE><span
     lang=CS style='font-size:11.0pt'>Podmínkou <span
     style='mso-spacerun:yes'> </span>pro</span></span><span lang=CS
     style='font-size:11.0pt'> přijetí není v&nbsp;žádném případě předchozí
     cizojazyčná příprava dítěte, práce s&nbsp;PC nebo absolvování přípravných
     kurzů. <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l4 level1 lfo5'><span lang=CS
     style='font-size:11.0pt'>Zápis probíhá v&nbsp;českém jazyce a svým obsahem
     vyplývá z&nbsp;Konkretizovaných očekávaných výstupů RVP PV.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'>S&nbsp;pozdravem <o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span class=SpellE><span lang=CS style='font-size:11.0pt'>ZŠsRVCJ</span></span><span
lang=CS style='font-size:11.0pt'> Teplice, Metelkovo nám. 968<o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
";
}die();