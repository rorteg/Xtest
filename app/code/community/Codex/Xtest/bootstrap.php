<?php
$mageFile = dirname( getcwd() ) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Mage.php';
if( file_exists( $mageFile ) ) {

    $_SERVER['SCRIPT_FILENAME'] = NULL;
    require_once $mageFile;
   // require_once __DIR__.DS.'Xtest.php';

    Mage::app('admin', 'store', array( 'config_model' => 'Mage_Core_Model_Config' ));

    //define('XTEST_BOOTSTRAPPED', true);

} else {
    throw new Exception("Mage.php not found.");
}
