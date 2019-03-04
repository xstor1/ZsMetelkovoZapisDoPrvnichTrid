<?php
require_once './Database/Database.php';
require_once './Database/ZakRepository.php';
require_once './Database/CasyRepository.php';
$db = new Database();
$zr = new ZakRepository($db);
$cr = new CasyRepository($db);
if (isset($_POST['jmeno']) && isset($_POST['prijmeni']) && isset($_POST['pohlavi']) && isset($_POST['datumnar'])
    && isset($_POST['ulice']) && isset($_POST['obec']) && isset($_POST['psc']) &&
    isset($_POST['jmenoz']) && isset($_POST['prijmeniz']) && isset($_POST['ulicez']) && isset($_POST['obecz']) && isset($_POST['pscz']) &&
    isset($_POST['telefon'])) {
    // defaults
    $idCas = " ";
    $roknow = " ";
    $roknext = " ";
    $prijmeni = " ";
    $jmeno = " ";
    $datumnar = " ";
    $obec = " ";
    $ulice = " ";
    $psc = " ";
    $spadovazs = " ";
    $pohlavi = " ";
    $jmenoz = " ";
    $prijmeniz = " ";
    $obecz = " ";
    $ulicez = " ";
    $pscz = " ";
    $telefon = " ";
    $email = " ";
    $obeczdor = " ";
    $ulicezdor = " ";
    $psczdor = " ";
    $jmenoz2 = " ";
    $prijmeniz2 = " ";
    $obecz2 = " ";
    $ulicez2 = " ";
    $pscz2 = " ";
    $telefonz2 = " ";
    $emailz2 = " ";
    $obecz2dor = " ";
    $ulicez2dor = " ";
    $pscz2dor = " ";
    $typz = " ";
    $typz2 = " ";
    $jmenosourozence=" ";
    $prijmenisourozence=" ";
    $tridasourozence=" ";


    $idCas = $_POST['idCas'];
    $roknow = date("Y");
    $roknext = ((int)date("Y")) + 1;
    $prijmeni = $_POST['prijmeni'];
    $jmeno = $_POST['jmeno'];
    $datumnar = new DateTime($_POST['datumnar']);
    $datumnar = $datumnar->format('d.m.Y');
    $obec = $_POST['obec'];
    $ulice = $_POST['ulice'];
    $psc = $_POST['psc'];
    $spadovazs = $_POST['spadovazs'];
    $pohlavi = $_POST['pohlavi'];
    $jmenoz = $_POST['jmenoz'];
    $prijmeniz = $_POST['prijmeniz'];
    $obecz = $_POST['obecz'];
    $ulicez = $_POST['ulicez'];
    $pscz = $_POST['pscz'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $obeczdor = $_POST['obeczdor'];
    $ulicezdor = $_POST['ulicezdor'];
    $psczdor = $_POST['psczdor'];
    $jmenoz2 = $_POST['jmenoz2'];
    $prijmeniz2 = $_POST['prijmeniz2'];
    $obecz2 = $_POST['obecz2'];
    $ulicez2 = $_POST['ulicez2'];
    $pscz2 = $_POST['pscz2'];
    $typz = $_POST['typz'];
    $typz2 = $_POST['typz2'];
    $telefonz2 = $_POST['telefonz2'];
    $emailz2 = $_POST['emailz2'];
    $obecz2dor = $_POST['obecz2dor'];
    $ulicez2dor = $_POST['ulicez2dor'];
    $pscz2dor = $_POST['pscz2dor'];
    $datetime = new DateTime($cr->getCasyById($idCas)['Datum']);
    $cas = $datetime->format("d.m.Y H:i");
    $jmenosourozence=$_POST['jmenosourozence'];
    $prijmenisourozence= $_POST['prijmenisourozence'];
    $tridasourozence=$_POST['tridasourozence'];

    $tmppocet = $cr->getCasyById($idCas)['Pocet'];
    $tmplidi = $zr->getCountOfZakyByIdCas($idCas)['count'];
    $vysledek = (int)$tmppocet - (int)$tmplidi;
    if ($vysledek < 1) {
        header('Location: error.php');
    } else {
        $zr->addZak($idCas, $jmeno, $prijmeni, $pohlavi, $datumnar, $ulice, $obec, $psc, $spadovazs, $typz, $jmenoz, $prijmeniz, $ulicez, $obecz, $pscz, $telefon, $email, $obeczdor, $ulicezdor, $psczdor, $typz2, $jmenoz2, $prijmeniz2, $ulicez2, $obecz2, $pscz2, $telefonz2, $emailz2, $obecz2dor, $ulicez2dor, $pscz2dor,$jmenosourozence,$prijmenisourozence,$tridasourozence);
        header("Content-type: application/vnd.ms-word;charset=utf-8");
        header("Content-Disposition: attachment;Filename=Zádost_o_prijeti_ditete_a_prihlaska_do_prvni_tridy_" . $jmeno . "_" . $prijmeni . ".doc");


        echo "<html xmlns:v=\"urn:schemas-microsoft-com:vml\"
xmlns:o=\"urn:schemas-microsoft-com:office:office\"
xmlns:w=\"urn:schemas-microsoft-com:office:word\"
xmlns:m=\"http://schemas.microsoft.com/office/2004/12/omml\"
xmlns=\"http://www.w3.org/TR/REC-html40\">

<head>
<meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">
<meta name=ProgId content=Word.Document>
<meta name=Generator content=\"Microsoft Word 15\">
<meta name=Originator content=\"Microsoft Word 15\">
<link rel=File-List href=\"ŽÁDOST%20O%20PŘIJETÍ%20(1)_soubory/filelist.xml\">
<title>Základní škola s rozšířeným vyučováním cizích jazyků, Teplice,</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Vlastník</o:Author>
  <o:LastAuthor>xstor</o:LastAuthor>
  <o:Revision>3</o:Revision>
  <o:TotalTime>124</o:TotalTime>
  <o:LastPrinted>2019-01-25T12:16:00Z</o:LastPrinted>
  <o:Created>2019-02-03T10:09:00Z</o:Created>
  <o:LastSaved>2019-02-03T11:22:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>566</o:Words>
  <o:Characters>3232</o:Characters>
  <o:Lines>26</o:Lines>
  <o:Paragraphs>7</o:Paragraphs>
  <o:CharactersWithSpaces>3791</o:CharactersWithSpaces>
  <o:Version>16.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:TargetScreenSize>800x600</o:TargetScreenSize>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=dataStoreItem href=\"ŽÁDOST%20O%20PŘIJETÍ%20(1)_soubory/item0006.xml\"
target=\"ŽÁDOST%20O%20PŘIJETÍ%20(1)_soubory/props007.xml\">
<link rel=themeData href=\"ŽÁDOST%20O%20PŘIJETÍ%20(1)_soubory/themedata.thmx\">
<link rel=colorSchemeMapping
href=\"ŽÁDOST%20O%20PŘIJETÍ%20(1)_soubory/colorschememapping.xml\">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:DontDisplayPageBoundaries/>
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
   <w:DontGrow Autofit/>
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
   <w:SplitPgBreakAndParaMark/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
  </w:Compatibility>
  <w:Brow serLevel>MicrosoftInternetExplorer4</w:Brow serLevel>
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
  <w:LsdException Locked=\"false\" Priority=\"1\" Name=\"Default Paragraph Font\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Subtitle\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Strong\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"Emphasis\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Normal Table\"/>
  <w:LsdException Locked=\"false\" Priority=\"99\" Name=\"No List\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Simple 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Simple 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Simple 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Classic 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Classic 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Classic 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Classic 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Colorful 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Colorful 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Colorful 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Columns 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Columns 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Columns 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Columns 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Columns 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 6\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 7\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Grid 8\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 6\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 7\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table List 8\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table 3D effects 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table 3D effects 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table 3D effects 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Contemporary\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Elegant\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Professional\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Subtle 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Subtle 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Web 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Web 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Web 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Theme\"/>
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
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
@font-face
	{font-family:\"Segoe UI\";
	panose-1:2 11 5 2 4 2 4 2 2 3;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073683329 9 0 511 0;}
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
	color:blue;
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
	mso-style-link:\"Text bubliny Char\";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:\"Tahoma\",sans-serif;
	mso-fareast-font-family:\"Times New Roman\";
	mso-ansi-language:CS;
	mso-fareast-language:CS;}
p.msonormal0, li.msonormal0, div.msonormal0
	{mso-style-name:msonormal;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:\"Times New Roman\",serif;
	mso-fareast-font-family:\"Times New Roman\";
	mso-fareast-theme-font:minor-fareast;}
span.TextbublinyChar
	{mso-style-name:\"Text bubliny Char\";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:\"Text bubliny\";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:\"Segoe UI\",sans-serif;
	mso-ascii-font-family:\"Segoe UI\";
	mso-hansi-font-family:\"Segoe UI\";
	mso-bidi-font-family:\"Segoe UI\";
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
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:42.55pt 42.55pt 42.55pt 42.55pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:2128307972;
	mso-list-type:hybrid;
	mso-list-template-ids:-2015974700 67436545 67436547 67436549 67436545 67436547 67436549 67436545 67436547 67436549;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:\"Courier New\";}
@list l0:level9
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
	mso-tstyle-row band-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:\"\";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:\"Times New Roman\",serif;}
table.MsoTableGrid
	{mso-style-name:\"Mřížka tabulky\";
	mso-tstyle-row band-size:0;
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

<body lang=EN-US link=blue vlink=\"#954F72\" style='tab-interval:35.4pt'>

<div class=WordSection1>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'>ŽÁDOST O PŘIJETÍ DÍTĚTE K&nbsp;ZÁKLADNÍMU VZDĚLÁVÁNÍ <o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><u><span lang=CS
style='font-size:10.0pt'>Zákonný zástupce dítěte – $typz<o:p></o:p></span></u></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><u><span lang=CS
style='font-size:10.0pt'><o:p><span style='text-decoration:none'>&nbsp;</span></o:p></span></u></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow :0;mso-yfti-firstrow :yes'>
  <td width=225 valign=top style='width:168.45pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS>Jméno a příjmení:</span></p>
  <p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=390 valign=top style='width:292.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:13.0pt'><span
  class=SpellE>$jmenoz</span> <span class=SpellE>$prijmeniz</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow :1'>
  <td width=225 valign=top style='width:168.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS>Místo trvalého pobytu:</span></p>
  <p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=390 valign=top style='width:292.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:13.0pt'><span
  class=SpellE>$obecz</span> <span class=SpellE>$ulicez</span> <span
  class=SpellE>$pscz</span><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow :2;mso-yfti-lastrow :yes'>
  <td width=225 valign=top style='width:168.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS>Adresa pro doručování </span></p>
  <p class=MsoNormal><span lang=CS style='font-size:8.0pt'>(pokud není shodná
  s&nbsp;místem trvalého pobytu):</span></p>
  <p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=390 valign=top style='width:292.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:13.0pt'><span
  class=SpellE>$obeczdor</span> <span class=SpellE>$ulicezdor</span> <span
  class=SpellE>$psczdor</span><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=CS style='font-size:13.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><u><span lang=CS
style='font-size:10.0pt'>Zákonný zástupce dítěte - $typz2<o:p></o:p></span></u></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow :0;mso-yfti-firstrow :yes'>
  <td width=225 valign=top style='width:168.45pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS>Jméno a příjmení:</span></p>
  <p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=390 valign=top style='width:292.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:13.0pt'>$jmenoz2
  $prijmeniz2<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow :1'>
  <td width=225 valign=top style='width:168.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS>Místo trvalého pobytu:</span></p>
  <p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=390 valign=top style='width:292.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:13.0pt'>$obecz2 $ulicez2
  $pscz2<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow :2;mso-yfti-lastrow :yes'>
  <td width=225 valign=top style='width:168.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS>Adresa pro doručování </span></p>
  <p class=MsoNormal><span lang=CS style='font-size:8.0pt'>(pokud není shodná
  s&nbsp;místem trvalého pobytu):</span></p>
  <p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=390 valign=top style='width:292.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:13.0pt'>$obecz2dor
  $ulicez2dor $pscz2dor<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
13.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'>Žádáme o přijetí dítěte: <span class=SpellE>$jmeno</span>
<span class=SpellE>$prijmeni</span><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'>narozeného dne: <span class=SpellE>$datumnar</span><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'>trvale pobytem: $obec $ulice <span class=SpellE>$psc</span><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'>k&nbsp;povinné školní docházce od 1. 9. <span
class=SpellE>$roknow</span> do Základní školy s&nbsp;rozšířeným vyučováním
cizích jazyků, Teplice, Metelkovo náměstí 968. <o:p></o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><span style='mso-tab-count:1'>                </span>Souhlasíme
se zpracováním a evidencí osobních údajů ve smyslu všech ustanovení zákona č.
101/2000 Sb., <o:p></o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'>o ochraně osobních údajů, v&nbsp;platném znění.<o:p></o:p></span></p>

<p class=MsoNormal style='text-indent:35.4pt;line-height:200%'><span lang=CS
style='font-size:10.0pt;line-height:200%'>Stvrzujeme svými podpisy, že zákonný
zástupce dítěte, který bude dítě zastupovat v&nbsp;úkonech spojených se
správním řízením ve věci přijetí k&nbsp;základnímu vzdělávání, bude vždy jednat
v&nbsp;souladu s&nbsp;vůlí druhého zákonného zástupce a bude ho o průběhu a
výsledcích správního řízení plně informovat. <o:p></o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'>Datum: ____________________<o:p></o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'>Podpisy obou zákonných zástupců:
_________________________________________________________________________<o:p></o:p></span></p>


<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'>PŘIHLÁŠKA<span style='mso-spacerun:yes'>  </span><o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
style='font-size:13.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='text-indent:35.4pt'><span lang=CS style='font-size:
11.0pt'>Přihlašuji svého syna (svoji dceru) k zápisu do 1. <span class=GramE>třídy<span
style='mso-spacerun:yes'>  </span>na</span> <span class=SpellE>ZŠsRVCJ</span>
Metelkovo nám. 968, Teplice.<o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow :0;mso-yfti-firstrow :yes;height:25.75pt'>
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
 <tr style='mso-yfti-irow :1;height:25.75pt'>
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
 <tr style='mso-yfti-irow :2;height:19.75pt'>
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
 <tr style='mso-yfti-irow :3;height:25.75pt'>
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
 <tr style='mso-yfti-irow :4;height:25.75pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.75pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Adresa trvalého
  bydliště:<o:p></o:p></span></p>
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
 <tr style='mso-yfti-irow :5;mso-yfti-lastrow :yes;height:25.75pt'>
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
 <tr style='mso-yfti-irow :0;mso-yfti-firstrow :yes;height:25.25pt'>
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
 <tr style='mso-yfti-irow :1;height:25.25pt'>
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
 <tr style='mso-yfti-irow :2;height:25.25pt'>
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
 <tr style='mso-yfti-irow :3;height:25.25pt'>
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
 <tr style='mso-yfti-irow :4;height:25.25pt'>
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
 <tr style='mso-yfti-irow :5;height:24.45pt'>
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
 <tr style='mso-yfti-irow :6;height:25.25pt'>
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
 <tr style='mso-yfti-irow :7;height:25.25pt'>
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
 <tr style='mso-yfti-irow :8;height:26.1pt'>
  <td width=204 valign=top style='width:153.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.1pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>Adresa trvalého
  bydliště:<o:p></o:p></span></p>
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
 <tr style='mso-yfti-irow :9;mso-yfti-lastrow :yes;height:26.1pt'>
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
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'>$obecz2dor
  $ulicez2dor $pscz2dor<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow :0;mso-yfti-firstrow :yes;mso-yfti-lastrow :yes'>
  <td width=690 valign=top style='width:517.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS
  style='font-size:11.0pt'>Vámi zvolený <span class=GramE>termín:<span
  style='mso-spacerun:yes'>   </span></span><span class=SpellE>$cas</span><o:p></o:p></span></b></p>
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
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
<p class=MsoNormal><span lang=CS style='font-size:11.0pt'><o:p>&nbsp;</o:p></span></p>
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
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span lang=CS
     style='font-size:11.0pt'>K&nbsp;zápisu se dostavte ve vámi zvoleném
     termínu, <span class=GramE>20 – 30</span> minut před uvedeným časem, tak
     aby mohl být učiněn administrativní zápis.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span lang=CS
     style='font-size:11.0pt'>S&nbsp;sebou přineste doklady, bez kterých nemůže
     být zápis uskutečněn:<o:p></o:p></span></li>
 <ul style='margin-top:0in' type=circle>
  <li class=MsoNormal style='mso-list:l0 level2 lfo1'><span lang=CS
      style='font-size:11.0pt'>rodný list dítěte<o:p></o:p></span></li>
  <li class=MsoNormal style='mso-list:l0 level2 lfo1'><span lang=CS
      style='font-size:11.0pt'>občanský průkaz zákonného zástupce (u cizích
      státních příslušníků pas)<o:p></o:p></span></li>
  <li class=MsoNormal style='mso-list:l0 level2 lfo1'><span lang=CS
      style='font-size:11.0pt'>rozhodnutí o odkladu povinné školní docházky
      z&nbsp;předchozího roku (pokud bylo uděleno)<o:p></o:p></span></li>
  <li class=MsoNormal style='mso-list:l0 level2 lfo1'><span lang=CS
      style='font-size:11.0pt'>žádost o přijetí k&nbsp;základnímu vzdělávání,
      která byla vygenerována s&nbsp;touto přihláškou<o:p></o:p></span></li>
 </ul>
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span lang=CS
     style='font-size:11.0pt'>Má-li dítě dva zákonné zástupce, musí žádost
     obsahovat podpisy obou rodičů.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span lang=CS
     style='font-size:11.0pt'>Zjistíte-li po přihlášení k&nbsp;zápisu, že vám
     stanovený termín nevyhovuje nebo se rozhodnete přihlásit dítě na jiné škole,
     informujte nás prosím neprodleně prostřednictvím mailové adresy <a
     href=\"mailto:sarka.lastovkova@zsmetelkovo.cz\">sarka.lastovkova@zsmetelkovo.cz</a>
     nebo na telefonním čísle 417&nbsp;539&nbsp;040.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span lang=CS
     style='font-size:11.0pt'>Pokud se dítě nebude moci ze zdravotních důvodů
     zápisu zúčastnit, je nutné nás neprodleně informovat, aby mohl být zvolen
     případný náhradní termín (tel. 417&nbsp;539&nbsp;040).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span lang=CS
     style='font-size:11.0pt'>Informace o zápisu a Směrnici o přijímání
     k&nbsp;základnímu vzdělávání jsou k&nbsp;dispozici na <a
     href=\"http://www.zsmetelkovo.cz\">www.zsmetelkovo.cz</a>.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span class=GramE><span
     lang=CS style='font-size:11.0pt'>Podmínkou<span style='mso-spacerun:yes'> 
     </span>pro</span></span><span lang=CS style='font-size:11.0pt'> přijetí
     není v&nbsp;žádném případě předchozí cizojazyčná příprava dítěte, práce
     s&nbsp;PC nebo absolvování přípravných kurzů. <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l0 level1 lfo1'><span lang=CS
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

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:200%'><span lang=CS style='font-size:
10.0pt;line-height:200%'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
";


    }
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/checkbox.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Příhláška</title>
    <style>
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: white; /* Set a background color */
            border: 1px solid grey;
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            border-radius: 5px;
            padding: 10px; /* Some padding */
            font-size: 18px; /* Increase font size */
        }

        #myBtn:hover {
            background-color:#BDBDBD; /* Add a dark-grey background on hover */
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12"
             style="color: white; border-top: 4px solid #E65100; border-bottom: 4px solid #E65100; background-color: #E65100">
            <h1 class="mt-4 mb-4" style="text-align: center">Přihláška k zápisu do první třídy</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div style="font-size:12px " class="alert alert-danger" role="alert">
                <strong>UPOZORNĚNÍ!</strong> K vyplňování formuláře používejte moderní a aktualizovaný webový prohlížeč
                –
                například
                Mozilla Firefox,
                Google Chrome, Microsoft Edge, Opera, nebo Safari. <strong>Zásadně nepoužívejte Internet
                    Explorer!</strong>
                Internet Explorer nepodporuje některé funkce aplikace a způsobuje problémy s odesláním formuláře.
            </div>
        </div>
    </div>

    <form method="POST">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2"
                     style="border-top: 4px solid #E65100; border-bottom: 4px solid #E65100; background-color: #FFF3E0">
                    <div class="form-group">
                        <div class="row  offset-lg-1">
                            <div class="col-md-5 col-lg-3 m-2 mt-4">
                                <h3 class="h3"> Žák</h3>
                            </div>
                        </div>
                        <div class="row  offset-lg-1">

                            <div class="col-md-5 col-lg-5 m-2  ">
                                <label for="jmeno"><strong>Jméno</strong></label>
                                <input class="form-control" type="text" name="jmeno" id="jmeno"
                                       placeholder="Např.: František"
                                       required>
                            </div>
                            <div class="col-md-5 col-lg-5  m-2">
                                <label for="prijmeni"><strong>Přijmení</strong></label>
                                <input class="form-control" type="text" name="prijmeni" id="prijmeni"
                                       placeholder="Např.: Novák"
                                       required>
                            </div>

                        </div>
                    </div>

                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="datumnar"><strong>Datum narození</strong></label>
                            <input class="form-control" type="date" name="datumnar" id="datumnar"
                                   required>
                        </div>
                        <div class="col-md-6 col-lg-5  m-2">
                            <label><strong>Pohlaví</strong></label>
                            <div class="row ">
                                <div class="col-md-4 col-lg-5 col-xl-3 m-2">
                                    <label class="container">Dívka
                                        <input style="background-colorcolor: white" type="radio" name="pohlavi"
                                               value="Dívka"
                                               required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-1 col-lg-5 col-xl-3 m-2">
                                    <label class="container">Chlapec
                                        <input style="background-color: white" type="radio" name="pohlavi"
                                               value="Chlapec"
                                               required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="spadovazs"><strong>Spádová ZŠ dle místa trvalého bydliště</strong></label>
                            <select required class="form-control" name="spadovazs" id="spadovazs">
                                <option value="ZŠ Bílá cesta, Verdunská">ZŠ Bílá cesta, Verdunská</option>
                                <option value="ZŠ Plynárenská  (Prosetice)">ZŠ Plynárenská (Prosetice)</option>
                                <option value="ZŠ U Nových lázní">ZŠ U Nových lázní</option>
                                <option value="ZŠ Koperníkova">ZŠ Koperníkova</option>
                                <option value="ZŠ Edisonova">ZŠ Edisonova</option>
                                <option value="ZŠ Maršovská">ZŠ Maršovská</option>
                                <option value="ZŠ Na Stínadlech">ZŠ Na Stínadlech</option>
                                <option value="ZŠ Maxe Švabinského">ZŠ Maxe Švabinského</option>
                                <option value="ZŠ Buzulucká">ZŠ Buzulucká</option>
                                <option value="ZŠ Metelkovo nám.">ZŠ Metelkovo nám.</option>
                            </select>
                            <small id="spadovazs" class="form-text text-muted">(Obecně závazná vyhláška Statutárního
                                města
                                Teplice č. 1/2016)
                            </small>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10  col-lg-8  m-2">
                            <div class="form-group">
                                <label for="route"><strong>Ulice a č.p.</strong></label>
                                <input class="form-control" type="text" name="ulice" id="route"
                                       placeholder="Např.: Revoluční 452"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-5  col-lg-5   m-2">
                            <label for="locality"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obec" id="locality" required
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">
                            <label for="postal_code"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="psc" id="postal_code"
                                   placeholder="Např.: 41117"
                                   required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                    <div class="row ">
                        <div class="col-md-12 col-lg-12 col-xl-12 mb-2 mt-4"
                             style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                            <p style="text-align: center">Pokud má dítě v rodném listě uvedeny dva (v současné době
                                žijící) zákonné zástupce a nebylo-li soudně rozhodnuto jinak, musí být uvedeni oba.</p>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-6 col-xl-8 ml-2 mt-4">
                            <div class="h5"> První zákonný zástupce je:</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-4 col-xl-4 m-2">
                            <select required class="form-control" name="typz" id="typz">
                                <option disabled selected value>-- Vyberte --</option>
                                <option value="Matka">Matka</option>
                                <option value="Otec">Otec</option>
                                <option value="Jiný">Jiný</option>
                            </select>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2 ">
                            <label for="jmenoz"><strong>Jméno</strong></label>
                            <input class="form-control" type="text" name="jmenoz" id="jmenoz"
                                   placeholder="Např.: Františka"
                                   required>
                        </div>
                        <div class="col-md-5 col-lg-5 m-2 ">

                            <label for="prijmeniz"><strong>Příjmení</strong></label>
                            <input class="form-control" type="text" name="prijmeniz" id="prijmeniz"
                                   placeholder="Např.: Nováková"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez"><strong>Ulice a č.p.</strong></label>
                            <input class="form-control" type="text" name="ulicez" id="ulicez"
                                   placeholder="Např.: Revoluční 452"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="obecz"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obecz" id="obecz"
                                   placeholder="Např.: Libochovice"
                                   required>
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">

                            <label for="pscz"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz" id="pscz" placeholder="Např.: 41117"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-4 col-lg-5  m-2">
                            <label for="telefon"><strong>Telefon</strong></label>

                            <input class="form-control" type="text" name="telefon" id="telefon"
                                   placeholder="Např.: +420 702 197 480"
                                   required>
                        </div>
                        <div class="col-md-6 col-lg-6 m-2">

                            <label for="email"><strong>Email</strong></label>
                            <input class="form-control" type="email" name="email" id="email"
                                   placeholder="Např.: vojtech.stor@larvasystems.cz">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-10 m-2 mt-4">
                            <div class="h5">Doručovací adresa (Vyplňte, pokud se liší od adresy trvalého bydliště)</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicezdor"><strong>Ulice a č.p.</strong> </label>
                            <input class="form-control" type="text" name="ulicezdor" id="ulicezdor"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="obeczdor"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obeczdor" id="obeczdor"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">
                            <label for="psczdor"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="psczdor" id="psczdor"
                                   placeholder="Např.: 41117">
                        </div>
                    </div>

                </div>
            </div>
        </div>
         <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-sm-12 col-lg-8  offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-6 col-xl-8 ml-2 mt-4">
                            <div class="h5"> Druhý zákonný zástupce je:</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">

                        <div class="col-md-5 col-lg-4  col-xl-4 m-2">
                            <select class="form-control" name="typz2" id="typz2">
                                <option selected value>-- Vyberte --</option>
                                <option value="Matka">Matka</option>
                                <option value="Otec">Otec</option>
                                <option value="Jiný">Jiný</option>
                            </select>
                        </div>
                    </div>

                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2 ">
                            <label for="jmenoz2"><strong>Jméno</strong> </label>
                            <input class="form-control" type="text" name="jmenoz2" id="jmenoz2"
                                   placeholder="Např.: František">
                        </div>
                        <div class="col-md-5 col-lg-5  m-2 ">

                            <label for="prijmeniz2"><strong>Příjmení</strong> </label>
                            <input class="form-control" type="text" name="prijmeniz2" id="prijmeniz2"
                                   placeholder="Např.: Novák">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez2"><strong>Ulice a č.p.</strong> </label>
                            <input class="form-control" type="text" name="ulicez2" id="ulicez2"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5 m-2">
                            <label for="obecz2"><strong>Obec</strong> </label>
                            <input class="form-control" type="text" name="obecz2" id="obecz2"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">

                            <label for="pscz2"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz2" id="pscz2" placeholder="Např.: 41117">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="telefonz2"><strong>Telefon</strong> </label>
                            <input class="form-control" type="text" name="telefonz2" id="telefonz2"
                                   placeholder="Např.: +420 702 197 480">
                        </div>
                        <div class="col-md-6 col-lg-6  m-2">

                            <label for="emailz2"><strong>Email</strong></label>
                            <input class="form-control" type="text" name="emailz2" id="emailz2"
                                   placeholder="Např.: vojtech.stor@larvasystems.cz">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-10 m-2 mt-4">
                            <div class="h5">Doručovací adresa (Vyplňte, pokud se liší od adresy trvalého bydliště)</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez2dor"><strong>Ulice a č.p.</strong> </label>
                            <input class="form-control" type="text" name="ulicez2dor" id="ulicez2dor"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-6 col-lg-5 col-lg-3 m-2">
                            <label for="obecz2dor"><strong>Obec</strong> </label>
                            <input class="form-control" type="text" name="obecz2dor" id="obecz2dor"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3 m-2">

                            <label for="pscz2dor"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz2dor" id="pscz2dor"
                                   placeholder="Např.: 41117">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-md-8 col-sm-12 col-lg-8  offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                    <div class="row   offset-lg-1">
                        <div class="col-md-5 col-lg-6 col-xl-8 ml-2 mt-4">
                            <div class="h5"> Sourozenec dítěte je:</div>
                        </div>
                    </div>
                    <div class="row  mb-4 offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2 ">
                            <label for="jmenozsourozence"><strong>Jméno</strong> </label>
                            <input class="form-control" type="text" name="jmenozsourozence" id="jmenozsourozence"
                                   placeholder="Např.: František">
                        </div>
                        <div class="col-md-5 col-lg-5  m-2 ">

                            <label for="prijmenisourozence"><strong>Příjmení</strong> </label>
                            <input class="form-control" type="text" name="prijmenisourozence" id="prijmenisourozence"
                                   placeholder="Např.: Novák">
                        </div>
                        <div class="col-md-3 col-lg-4 mb-2 m-2">
                            <label for="tridasourozence"><strong>Třída</strong> </label>
                            <input class="form-control" type="text" name="tridasourozence" id="tridasourozence"
                                   placeholder="Např.: 2.A">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-sm-12 col-lg-8  offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                    <div class="row  offset-lg-1">
                        <div class="col-md-8 col-lg-8 ml-2 col-xl-6 mb-4 mt-4">
                            <h3 class="h3"><strong>Výběr termínu a času</strong></h3>
                            <label for="idCas">Vyberte termín a čas, kdy chcete přijít k zápisu</label>
                            <select id="idCas" name="idCas" required class="form-control">
                                <?php
                                $casy = $cr->getCasy();
                                foreach ($casy as $key => $value) {
                                    $count = $zr->getCountOfZakyByIdCas($value['Id']);
                                    $volno = (int)$value['Pocet'] - (int)$count['count'];
                                    $datetime = new DateTime($value['Datum']);
                                    if ($volno == 0) {

                                    } else {
                                        echo "<option value=\"" . $value['Id'] . "\">" . $datetime->format("d.m.Y H:i") . " volných míst: " . $volno . "</option>";
                                    }
                                }
                                ?>

                            </select>
                        </div>
                    </div>a

                    <span id="zprava"></span>
                    <div class="row  offset-lg-1">
                        <div class="col-md-11 col-lg-10 m-2">
                            <p>
                                Stisknutím tlačítka „Odeslat a vygenerovat dokumenty“ se přihláška odešle a zároveň vám
                                bude okamžitě vygenerována žádost s informacemi.
                                Žádost je třeba vytisknout, podepsat zákonnými zástupci a odevzdat při zápisu.

                            </p>
                        </div>
                    </div>

                    <div class="row  offset-lg-1">

                        <div class="col-md-10 col-lg-8 col-xl-6 m-2">
                            <button style="background-color: #FF6D00" onclick="CheckTime();" name="type" id="btn1"
                                    value="prijeti"
                                    class=" mb-4 btn btn-primary form-control">
                                Odeslat a vygenerovat dokumenty
                            </button>
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-5 m-2">
                            <h1 id="invis" style="visibility: hidden; color: green">Vše proběhlo úspěšně</h1>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8 ml-2 mb-4">
                            <small class="form-text text-muted">Ve formuláři uvedené údaje poskytuje subjekt údajů škole
                                pro účely plnění právní povinnosti dle
                                zákona 561/2004
                                Sb. školský zákon a souvisejících právních předpisů a pro plnění úkolů ve veřejném zájmu
                                ve
                                smyslu
                                článku 6
                                odstavce 1. písmene e) nařízení EP a Rady EU 2016/679 Obecné nařízení o ochraně osobních
                                údajů.
                                Poskytnuté údaje
                                může škola použít pouze pro vedení školní dokumentace, organizaci školních či
                                mimoškolních akcí
                                a
                                pro jiné účely
                                související s běžným provozem školy.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i  style="color: grey" class="fa fa-arrow-up"></i></button>
<div class="container-fluid">
    <div class="row  ">
        <div class="col-sm-12 col-md-12 col-lg-12"
             style="border-top: 4px solid #E65100; border-bottom: 4px solid #E65100; background-color:  #E65100">
            <div class="m-2" style="color: white; text-align: center">Powered by <a style="color: wheat;" href="https://www.larvasystems.cz/">LarvaSystems</a>
            </div>
            <small style="color:white; text-align: center" class="form-text  mb-2">
                Všechna práva vyhrazena © 2019
            </small>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/submitform.js"></script>

<script src="js/Validate.js" type="text/javascript"></script>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
   
    
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

</body>
</html>
