<?php

class UploadPortfolio {

    private $_targetDir,
            $_targetFile,
            $_upload,
            $_imageFileType,
            $_fileExtension,
            $_message;

    private $_filenameField, $_portfolioField;

    public static function Create() {
        return new UploadPortfolio();
    }

    private function __construct() {
        $this->setTargetDir('uploads/'); 
        $this->setTargetFile($this->getTargetDir().strtolower($this->files('fileToUpload', 'name')));
        $this->setUpload(1);
        $this->setImageFileType(pathinfo($this->getTargetFile(), PATHINFO_EXTENSION));
    }

    private function checkFileSize($fileSize) {
        if ($this->files('fileToUpload', 'size') > $fileSize) {          
            $this->setUpload(0)->getUpload();
            return $this->displayMessage('Sorry, your file is too large.<br>');
        } return null;
    }

    private function checkImageFileType($imageFileType) {
        if(!$this->isValidFileExtension($imageFileType)) {          
            $this->setUpload(0)->getUpload();
            /*return $this->displayMessage('Sorry, only JPG, JPEG, PNG, GIF, TXT, PDF, DOC, DOCX, XLSX, XLS, PPTX, & PPT files are allowed.<br>');*/
        } return null;
    }

    private function isValidFileExtension($fileExtension) {
        switch ($fileExtension) {
            case 'jpg': break;
            case 'jpeg': break;
            case 'png': break;
            case 'gif': break;
            case 'txt': break;
            case 'pdf': break;
            case 'doc': break;
            case 'docx': break;
            case 'xlsx': break;
            case 'xls': break;
            case 'pptx': break;
            case 'ppt': break;
            default: return false; break;
        } return true;
    }

    private function checkUpload() {
        if($this->getUpload() == 0) {
            return $this->displayMessage('Sorry, your file was not uploaded.<br>');  
        } else {
            for($i = 0; $i <= 11; $i++) {
                if($this->getImageFileType() === $this->fileExtensionArr($i))
                    $fileExtension = ($i == 2) ? $this->setFileExtension('.jpg')->getFileExtension() : $this->setFileExtension('.'.$this->fileExtensionArr($i))->getFileExtension();     
            }
            return $this->checkImageUpload(@$fileExtension);
        } 
    } 

    private function checkImageUpload($fileExtension) {

        $filenameField = $this->getFilenameField();
        $portfolioField = $this->getPortfolioField();
        $upload_file =  $this->fileDirectory($filenameField, $fileExtension);

        if (move_uploaded_file($this->files('fileToUpload', 'tmp_name'), $upload_file)) {             
            //$original_filename = $this->fileBaseName($this->files('fileToUpload', 'name'));
            $uploaded = $upload_file; 
            $uploaded_filename = explode('/', $uploaded);
            $extension_filename = $fileExtension;
            
            if($extension_filename === '.jpeg') $extension_filename = '.jpg';

            UploadController::Create()->add(array('', $filenameField, $uploaded_filename[1], $extension_filename, $portfolioField, 10054));
            return $this->displayMessage('<span class="msg-success">Filename: '.Sanitize::Escape($filenameField).' has been uploaded.</span>'); 
        }
        return $this->displayMessage('Sorry, there was an error uploading your file.<br>'); 
    }

    private function fileDirectory($filename, $fileExtension) {
        $f = preg_replace('/\s+/', '_', $filename);
        return $this->getTargetDir().$f.'_'.$this->getGenerateRandomString().$fileExtension;
    }

    public function uploadFile($submit) {
        if(Input::IssetPost($submit)) {

            $filename = Input::Post('filename');
            $portfolio = Input::Post('portfolio');
            $filenameRequired = Required::SetRequired($filename, true);
            
            if($filenameRequired->isPassed()) {
                $this->setFilenameField($filename); 
                $this->setPortfolioField($portfolio);          
                return $this->checkFileSize(8388608).$this->checkImageFileType($this->getImageFileType()).$this->checkUpload();
            } return 'Please fill the field.';
        }    
    }

    //generate a random string 
    private function getGenerateRandomString($length = 9999) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return md5($randomString);
    }

    //files
    private function files($file, $name) {
        return @$_FILES[$file][$name];
    }

    //file basename
    private function fileBaseName($files) {
        return basename($files);
    }

    //display msg
    private function displayMessage($message) {
        return $this->setMessage($message)->getMessage();
    }

    //file extension array
    private function fileExtensionArr($fileExtension) {
        $fileExtensionArr = array('jpg', 'png', 'jpeg', 'gif', 'txt', 'pdf', 'doc', 'docx', 'xlsx', 'xls', 'pptx', 'ppt');
        return $fileExtensionArr[$fileExtension];
    }

    /* FIELDS */
    //Filename Field - getter & setter
    private function getFilenameField() {
        return $this->_filenameField;
    }
        
    private function setFilenameField($field) {
        $this->_filenameField = $field;
    }

    //Portfolio Field - getter & setter
    private function getPortfolioField() {
        return $this->_portfolioField;
    }
        
    private function setPortfolioField($field) {
        $this->_portfolioField = $field;
    }

    //Target directory - getter & setter
    private function getTargetDir() {
        return $this->_targetDir;
    }

    private function setTargetDir($targetDir) {
        $this->_targetDir = $targetDir;
    }

    //Target File - getter & setter
    private function getTargetFile() {
        return $this->_targetFile;
    }

    private function setTargetFile($targetFile) {
        $this->_targetFile = $targetFile;
    }

    //Upload - getter & setter
    private function getUpload() {
        return $this->_upload;
    }

    private function setUpload($upload) {
        $this->_upload = $upload;
        return $this;
    }

    //ImageFileType - getter & setter
    private function getImageFileType() {
        return $this->_imageFileType;
    }

    private function setImageFileType($imageFileType) {
        $this->_imageFileType = $imageFileType;
    }

    //File extension
    private function getFileExtension() {
        return $this->_fileExtension;
    }

    private function setFileExtension($fileExtension) {
        $this->_fileExtension = $fileExtension;
        return $this;
    }

    //Message - getter & setter
    private function getMessage() {
        return $this->_message;
    }

    private function setMessage($message) {
        $this->_message = $message;
        return $this;
    }
}
