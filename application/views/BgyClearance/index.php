
// require_once('vendor/autoload.php');
// echo "<h1>yes</h1>";
// $phpWord = new \PhpOffice\PhpWord\PhpWord();

// echo base_url('assets/clearance.docx');
// $file = base_url('assets/clearance.docx');

// $phpword = new \PhpOffice\PhpWord\TemplateProcessor($file);

// $phpword->setValue('{$full name}',$name);
//  $phpword->setValue('{$origaddress}',$from);
// $phpword->setValue('{birthdate}',$bday);
// $phpword->setValue('{address}',$address);
// $phpword->setValue('{reason}',$reason);       
// $phpword->setValue('{thedatetoday}',$date);        

// $phpword->saveAs('edited.docx');
// header("Content-disposition: attachment;filename=CERTIFICADO.docx; charset=iso-8859-1");
// echo file_get_contents("edited.docx");  
<div id="cambox" >
     
<div id="webcam"></div>
 
     
<div id="tiktik">
        <span class="timer">3</span>
        <span class="click"><img alt="take photo" src="img/camera_icon.png" onclick="capturePic()" /></span>
    </div>
 
     
<div id="nocamera">
         
<div class="message">
            Video has not detected any available cameras on your system. Please connect a camera and try again.
        </div>
 
    </div>
 
     
<div id="preview">
        <img id="previewImg" alt="preview Image" height="240" width="320" src="img/preload.gif" />
        <span class="close"></span>
    </div>
 
</div>