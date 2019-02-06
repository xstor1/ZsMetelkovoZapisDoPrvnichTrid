<?php
    /**
     * Created by PhpStorm.
     * User: xstor
     * Date: 7/30/2018
     * Time: 2:50 PM
     */
    require_once './restricted.php';
    session_regenerate_id();
    if (isset($_POST['id'])) {
        require_once '../Database/Database.php';
        require_once '../Database/ZakRepository.php';
        $db = new Database();
        $zr = new ZakRepository($db);
        $zak = $zr->getZak ($_POST['id']);
        $roknext = ((int)date ("Y")) + 1;
        $jmeno = $zak['jmeno'];
        $prijmeni = $zak['prijmeni'];
        $roknow = date ("Y");;
        $rodne = getCasNarFromRodneCislo ($zak['rodne_cislo']);
        $obec = $zak['obec'];
        $ulice = $zak['ulice'];
        $psc = $zak['psc'];
        $obcanstvi = $zak['statni_obcanstvi'];
        $kvalifikator = $zak['kvalifikator_statni_obcanstvi'];
        $jmenoz = $zak['jmenoz'];
        $prijmeniz = $zak['prijmeniz'];
        $obecz = $zak['obecz'];
        $ulicez = $zak['ulicez'];
        $pscz = $zak['pscz'];
        $telefon = $zak['telefon'];
        $uid = $_POST['uid'];
        $documentnumber = $_POST['documentnumber'];
        $datumdnes = date ("d.m.Y");
        $datumpravnimoci = date ("d.m.Y", strtotime ($_POST['datumpravnimoci']));
        header ("Content-type: application/vnd.ms-word;charset=utf-8");
        header ("Content-Disposition: attachment;Filename=potvrzení_o_převzetí_" . $jmeno . "_" . $prijmeni . ".doc");
        
        
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
href=\"Převzetí%20rozhodnutí%20vzdání%20se%20práva%20na%20odvolání%20Dědeček_soubory/filelist.xml\">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Miloš Matějka</o:Author>
  <o:LastAuthor>xstor</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>37</o:TotalTime>
  <o:LastPrinted>2018-04-20T07:59:00Z</o:LastPrinted>
  <o:Created>2018-07-30T12:59:00Z</o:Created>
  <o:LastSaved>2018-07-30T12:59:00Z</o:LastSaved>
  <o:Pages>2</o:Pages>
  <o:Words>308</o:Words>
  <o:Characters>1757</o:Characters>
  <o:Lines>14</o:Lines>
  <o:Paragraphs>4</o:Paragraphs>
  <o:CharactersWithSpaces>2061</o:CharactersWithSpaces>
  <o:Version>16.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
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
  <w:LidThemeOther>CS</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
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
  DefSemiHidden=\"false\" DefQFormat=\"false\" DefPriority=\"99\"
  LatentStyleCount=\"375\">
  <w:LsdException Locked=\"false\" Priority=\"0\" QFormat=\"true\" Name=\"Normal\"/>
  <w:LsdException Locked=\"false\" QFormat=\"true\" Name=\"heading 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 7\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 8\"/>
  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 9\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 6\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 7\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 8\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index 9\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 1\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 2\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 3\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 4\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 6\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 7\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 8\"/>
  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"toc 9\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Normal Indent\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"footnote text\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"annotation text\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"header\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"footer\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"index heading\"/>
  <w:LsdException Locked=\"false\" Priority=\"35\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"caption\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"table of figures\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"envelope address\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"envelope return\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"footnote reference\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"annotation reference\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"line number\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"page number\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"endnote reference\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"endnote text\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"table of authorities\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"macro\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"toa heading\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Bullet\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Number\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Bullet 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Bullet 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Bullet 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Bullet 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Number 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Number 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Number 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Number 5\"/>
  <w:LsdException Locked=\"false\" Priority=\"10\" QFormat=\"true\" Name=\"Title\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Closing\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Signature\"/>
  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"true\"
   UnhideWhenUsed=\"true\" Name=\"Default Paragraph Font\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text Indent\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Continue\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Continue 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Continue 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Continue 4\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"List Continue 5\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Message Header\"/>
  <w:LsdException Locked=\"false\" Priority=\"11\" QFormat=\"true\" Name=\"Subtitle\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Salutation\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Date\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text First Indent\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text First Indent 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Note Heading\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text Indent 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Body Text Indent 3\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Block Text\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Hyperlink\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"FollowedHyperlink\"/>
  <w:LsdException Locked=\"false\" Priority=\"22\" QFormat=\"true\" Name=\"Strong\"/>
  <w:LsdException Locked=\"false\" Priority=\"20\" QFormat=\"true\" Name=\"Emphasis\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Document Map\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Plain Text\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"E-mail Signature\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Top of Form\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Bottom of Form\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Normal (Web)\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Acronym\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Address\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Cite\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Code\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Definition\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Keyboard\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Preformatted\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Sample\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Typewriter\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"HTML Variable\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"annotation subject\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"No List\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Outline List 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Outline List 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Outline List 3\"/>
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
   Name=\"Table Web 1\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Web 2\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Balloon Text\"/>
  <w:LsdException Locked=\"false\" Priority=\"59\" Name=\"Table Grid\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Table Theme\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Placeholder Text\"/>
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
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Revision\"/>
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
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Mention\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Smart Hyperlink\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Hashtag\"/>
  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"
   Name=\"Unresolved Mention\"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:\"Cambria Math\";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
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
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:\"Calibri\",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:\"Times New Roman\";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:CS;}
h1
	{mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:\"Nadpis 1 Char\";
	mso-style-next:Normální;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-outline-level:1;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:\"Times New Roman\",serif;
	mso-font-kerning:0pt;
	mso-ansi-language:CS;
	font-weight:normal;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:\"Text bubliny Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:9.0pt;
	font-family:\"Segoe UI\",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-ansi-language:CS;}
p.Default, li.Default, div.Default
	{mso-style-name:Default;
	mso-style-unhide:no;
	mso-style-parent:\"\";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:\"Calibri\",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	color:black;
	mso-ansi-language:CS;}
span.Nadpis1Char
	{mso-style-name:\"Nadpis 1 Char\";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:\"Nadpis 1\";
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:\"Times New Roman\",serif;
	mso-ascii-font-family:\"Times New Roman\";
	mso-hansi-font-family:\"Times New Roman\";
	mso-bidi-font-family:\"Times New Roman\";}
span.TextbublinyChar
	{mso-style-name:\"Text bubliny Char\";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:\"Text bubliny\";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:\"Segoe UI\",sans-serif;
	mso-ascii-font-family:\"Segoe UI\";
	mso-hansi-font-family:\"Segoe UI\";
	mso-bidi-font-family:\"Segoe UI\";}
span.SpellE
	{mso-style-name:\"\";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:\"Times New Roman\";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:CS;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:70.85pt 70.85pt 70.85pt 70.85pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
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
	mso-style-priority:99;
	mso-style-parent:\"\";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin-top:0cm;
	mso-para-margin-right:0cm;
	mso-para-margin-bottom:10.0pt;
	mso-para-margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:\"Calibri\",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:\"Times New Roman\";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:CS;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext=\"edit\" spidmax=\"1026\"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext=\"edit\">
  <o:idmap v:ext=\"edit\" data=\"1\"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:35.4pt'>

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;mso-hyphenate:none;mso-layout-grid-align:
none;text-autospace:none'><b><span lang=CS style='font-size:14.0pt;font-family:
\"Times New Roman\",serif'>Základní škola J. E. Purkyně a Základní umělecká škola
Libochovice - příspěvková organizace<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:21.6pt;margin-bottom:.0001pt;text-align:center;
text-indent:-21.6pt;line-height:normal;page-break-after:avoid;mso-outline-level:
1;mso-hyphenate:none;tab-stops:21.6pt;mso-layout-grid-align:none;text-autospace:
none'><b><span lang=CS style='font-size:14.0pt;font-family:\"Times New Roman\",serif'><span
style='mso-tab-count:1'>      </span></span></b><span lang=CS style='font-size:
12.0pt;font-family:\"Times New Roman\",serif'>Vrchlického 284, 411 17 Libochovice
<o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:21.6pt;margin-bottom:.0001pt;text-indent:-21.6pt;line-height:normal;
mso-layout-grid-align:none;text-autospace:none'><span lang=CS style='font-size:
12.0pt;font-family:\"Times New Roman\",serif'><span style='mso-tab-count:1'>       </span>tel.
774786890, e-mail: <u><span style='color:blue'><a
href=\"mailto:zs.libochovice@telecom.cz\"><span style='color:blue'>zs.libochovice@telecom.cz</span></a></span></u>,
<u><span style='color:blue'><a
href=\"../../Škola/Dropbox/Škola/Ředitelna/Správní%20řízení%20rozhodnutí/Rozhodnutí%20o%20podmíněném%20vyloučení/www.skolylibochovice.cz\"><span
style='color:blue'>www.skolylibochovice.cz</span></a></span></u><o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
normal'><span lang=CS style='font-size:20.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
normal'><span lang=CS style='font-size:20.0pt;line-height:115%'>Potvrzení o převzetí<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS>Potvrzuji, že jsem dne <span
class=SpellE>$datumdnes</span> převzal/a rozhodnutí základní školy, jejíž
činnost vykonává Základní škola J. E. Purkyně a Základní umělecká škola
Libochovice, Vrchlického 284 č. j. ZS/<span class=SpellE>$uid</span>/<span
class=SpellE>$roknow</span>/<span class=SpellE>$documentnumber</span> ze dne <span
class=SpellE>$datumdnes</span> <b style='mso-bidi-font-weight:normal'>o odkladu
povinné školní docházky pro</b></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><i><span lang=CS
style='font-size:11.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></i></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><i><span lang=CS
style='font-size:11.0pt;line-height:115%'>Příjmení, jméno</span></i><span
lang=CS style='font-size:11.0pt;line-height:115%'>: <span class=SpellE>$jmeno</span>
<span class=SpellE>$prijmeni</span><o:p></o:p></span></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><span lang=CS>Adresa: $ulice,
$obec <span class=SpellE>$psc</span></span><span lang=CS style='font-size:11.0pt;
line-height:115%'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=CS>1. Zákonný
zástupce:<o:p></o:p></span></b></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><span lang=CS>Příjmení,
jméno: </span><span lang=CS style='font-size:11.0pt;line-height:115%'><span
class=SpellE>$jmenoz</span> <span class=SpellE>$prijmeniz</span></span></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><span lang=CS>Adresa: $ulicez,
$obecz <span class=SpellE>$pscz</span></span><span lang=CS style='font-size:11.0pt;
line-height:115%'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=CS>Podpis: …………………………………………….</span></p>

<span lang=CS style='font-size:11.0pt;line-height:115%;font-family:\"Calibri\",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\"Times New Roman\";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:CS;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
page-break-before:always'>
</span>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;mso-hyphenate:none;mso-layout-grid-align:
none;text-autospace:none'><b><span lang=CS style='font-size:14.0pt;font-family:
\"Times New Roman\",serif'>Základní škola J. E. Purkyně a Základní umělecká škola
Libochovice - příspěvková organizace<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:21.6pt;margin-bottom:.0001pt;text-align:center;
text-indent:-21.6pt;line-height:normal;page-break-after:avoid;mso-outline-level:
1;mso-hyphenate:none;tab-stops:21.6pt;mso-layout-grid-align:none;text-autospace:
none'><b><span lang=CS style='font-size:14.0pt;font-family:\"Times New Roman\",serif'><span
style='mso-tab-count:1'>      </span></span></b><span lang=CS style='font-size:
12.0pt;font-family:\"Times New Roman\",serif'>Vrchlického 284, 411 17 Libochovice
<o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:21.6pt;margin-bottom:.0001pt;text-indent:-21.6pt;line-height:normal;
mso-layout-grid-align:none;text-autospace:none'><span lang=CS style='font-size:
12.0pt;font-family:\"Times New Roman\",serif'><span style='mso-tab-count:1'>       </span>tel.
774786890, e-mail: <u><span style='color:blue'><a
href=\"mailto:zs.libochovice@telecom.cz\"><span style='color:blue'>zs.libochovice@telecom.cz</span></a></span></u>,
<u><span style='color:blue'><a
href=\"../../Škola/Dropbox/Škola/Ředitelna/Správní%20řízení%20rozhodnutí/Rozhodnutí%20o%20podmíněném%20vyloučení/www.skolylibochovice.cz\"><span
style='color:blue'>www.skolylibochovice.cz</span></a></span></u><o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
normal'><span lang=CS style='font-size:20.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
normal'><span lang=CS style='font-size:20.0pt;line-height:115%'>Vzdání se práva
na odvolání<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS>Já,</span></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><span lang=CS>Příjmení,
jméno: </span><span lang=CS style='font-size:11.0pt;line-height:115%'><span
class=SpellE>$jmenoz</span> <span class=SpellE>$prijmeniz</span></span></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><span lang=CS>Adresa: $ulicez,
$obecz <span class=SpellE>$pscz</span></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS>prohlašuji, že jsem </span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS>dne <span class=SpellE>$datumdnes</span>
převzala rozhodnutí základní školy, jejíž činnost vykonává Základní škola J. E.
Purkyně a Základní umělecká škola Libochovice, Vrchlického 284 č. j. ZS/<span
class=SpellE>$uid</span>/<span class=SpellE>$roknow</span>/<span class=SpellE>$documentnumber</span>
ze dne <span class=SpellE>$datumdnes</span> o odkladu povinné školní docházky
pro</span></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><i><span lang=CS
style='font-size:11.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></i></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><i><span lang=CS
style='font-size:11.0pt;line-height:115%'>Příjmení, jméno</span></i><span
lang=CS style='font-size:11.0pt;line-height:115%'>: <span class=SpellE>$jmeno</span>
<span class=SpellE>$prijmeni</span><o:p></o:p></span></p>

<p class=Default style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;line-height:115%'><span lang=CS>Adresa: $ulice,
$obec <span class=SpellE>$psc</span></span><span lang=CS style='font-size:11.0pt;
line-height:115%'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS>Po seznámení se s jeho
obsahem se tímto ve smyslu § 81 odst. 2 zák. č. 500/2004 Sb., správní řád, vzdávám
práva podat odvolání proti uvedenému rozhodnutí.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS>V Libochovicích dne <span
style='mso-spacerun:yes'> </span>$datumdnes</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS><span
style='mso-spacerun:yes'>                                     </span></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS>……………………………………………………………………………………..</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><span lang=CS><span
style='mso-spacerun:yes'>                </span><span
style='mso-spacerun:yes'>             </span>jméno, podpis</span></p>

<p class=MsoNormal><span lang=CS><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
";
    }
    die();
