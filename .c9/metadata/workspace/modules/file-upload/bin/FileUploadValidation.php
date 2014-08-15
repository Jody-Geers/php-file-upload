{"filter":false,"title":"FileUploadValidation.php","tooltip":"/modules/file-upload/bin/FileUploadValidation.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":102,"column":0},"end":{"row":102,"column":2}},"text":"?>"},{"action":"removeLines","range":{"start":{"row":0,"column":0},"end":{"row":102,"column":0}},"nl":"\r\n","lines":["<?php","","class FileUploadValidation {","\t","\tconst MAX_FILE_SIZE_BYTES = 1000000;","\t","\tprivate $_allowedExtsArr = null;","\tprivate $_extension = null;","\tprivate $_allowedTypeArr = null;","\t","\tprivate $_incomingFileType = null;","\tprivate $_incomingFileSize = null;","\t","\t/**","\t * Validation functionality for file upload.","\t * @return {Object} fileUploadValidation","\t * @access public","\t */","\tpublic function FileUploadValidation( $argsArr ) {","","\t\t$this->_allowedExtsArr = array( 'gif', 'jpeg', 'jpg', 'png' );","\t\t$temp = explode( '.', $argsArr['fileName'] );","\t\t$this->_extension = end( $temp );","\t\t","\t\t$this->_allowedTypeArr = array( 'image/gif', 'image/jpeg', 'image/jpg', 'image/pjpeg', 'image/x-png', 'image/png' );","\t\t","\t\t$this->_incomingFileType = $argsArr['fileType'];","\t\t$this->_incomingFileSize = $argsArr['fileSizeByes'];","\t\t","\t}","","\t/**","\t * Invalid upload file name.","\t * @access private","\t * @return {bool} - false if validation fail","\t */","\tprivate function _isValidFileName() {","\t\t","\t\tif ( !in_array( $this->_extension, $this->_allowedExtsArr ) ) {","\t\t","\t\t\techo 'Invalid file name' . '<br/>';","\t\t","\t\t\treturn false;","\t\t","\t\t}","\t\t","\t\treturn true;","\t\t","\t}","","\t/**","\t * Invalid upload file type.","\t * @access private","\t * @return {bool} - false if validation fail","\t */","\tprivate function _isValidFileType() {","\t\t","\t\tif ( !in_array( $this->_incomingFileType, $this->_allowedTypeArr ) ) {","\t\t","\t\t\techo 'Invalid file type' . '<br/>';","\t\t","\t\t\treturn false;","\t\t","\t\t}","\t\t","\t\treturn true;","\t\t","\t}","","\t/**","\t * Invalid upload file size.","\t * @access private","\t * @return {bool} - false if validation fail","\t */","\tprivate function _isValidFileSize() {","\t","\t\tif ( $this->_incomingFileSize > FileUploadValidation::MAX_FILE_SIZE_BYTES ) {","\t\t\t","\t\t\techo 'Invalid file size' . '<br/>';","\t\t","\t\t\treturn false;","\t\t","\t\t}","\t\t","\t\treturn true;","\t","\t}","\t","\t/**","\t * Runs through full file upload validation process.","\t * @access public","\t * @return {bool} - false if validation fail","\t */","\tpublic function isFileUploadValidationPass() {","\t\t","\t\treturn ( $this->_isValidFileName() && $this->_isValidFileType() && $this->_isValidFileSize() )? true : false;","\t\t","\t}","","\t","}",""]},{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\r\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":100,"column":0}},"lines":["","class FileUploadValidation {","\t","\tconst MAX_FILE_SIZE_BYTES = 1000000;","\t","\tprivate $_allowedExtsArr = null;","\tprivate $_extension = null;","\tprivate $_allowedTypeArr = null;","\t","\tprivate $_file = null;","\t","\t/**","\t * Validation functionality for file upload.","\t * @return {Object} fileUploadValidation","\t * @access public","\t */","\tpublic function FileUploadValidation( $argsObj ) {","\t\t","\t\t$this->_file = $argsObj;","","\t\t$this->_allowedExtsArr = array( 'gif', 'jpeg', 'jpg', 'png' );","\t\t$temp = explode( '.', $this->_file->fileName );","\t\t$this->_extension = end( $temp );","\t\t","\t\t$this->_allowedTypeArr = array( 'image/gif', 'image/jpeg', 'image/jpg', 'image/pjpeg', 'image/x-png', 'image/png' );","\t\t","\t}","","\t/**","\t * Invalid upload file name.","\t * @access private","\t * @return {bool} - false if validation fail","\t */","\tprivate function _isValidFileName() {","\t\t","\t\tif ( !in_array( $this->_extension, $this->_allowedExtsArr ) ) {","\t\t","\t\t\techo 'Invalid file name' . '<br/>';","\t\t","\t\t\treturn false;","\t\t","\t\t}","\t\t","\t\treturn true;","\t\t","\t}","","\t/**","\t * Invalid upload file type.","\t * @access private","\t * @return {bool} - false if validation fail","\t */","\tprivate function _isValidFileType() {","\t\t","\t\tif ( !in_array( $this->_file->fileType, $this->_allowedTypeArr ) ) {","\t\t","\t\t\techo 'Invalid file type' . '<br/>';","\t\t","\t\t\treturn false;","\t\t","\t\t}","\t\t","\t\treturn true;","\t\t","\t}","","\t/**","\t * Invalid upload file size.","\t * @access private","\t * @return {bool} - false if validation fail","\t */","\tprivate function _isValidFileSize() {","\t","\t\tif ( $this->_file->fileSizeBytes > FileUploadValidation::MAX_FILE_SIZE_BYTES ) {","\t\t\t","\t\t\techo 'Invalid file size' . '<br/>';","\t\t","\t\t\treturn false;","\t\t","\t\t}","\t\t","\t\treturn true;","\t","\t}","\t","\t/**","\t * Runs through full file upload validation process.","\t * @access public","\t * @return {bool} - false if validation fail","\t */","\tpublic function isFileUploadValidationPass() {","\t\t","\t\treturn ( $this->_isValidFileName() && $this->_isValidFileType() && $this->_isValidFileSize() )? true : false;","\t\t","\t}","","\t","}",""]},{"action":"insertText","range":{"start":{"row":100,"column":0},"end":{"row":100,"column":2}},"text":"?>"}]}]]},"ace":{"folds":[],"scrolltop":240,"scrollleft":0,"selection":{"start":{"row":100,"column":2},"end":{"row":100,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1408096355397,"hash":"2bee8b00c729df10ba671b1df2172039ef73282e"}