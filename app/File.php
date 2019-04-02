<?php


/*
|--------------------------------------------------------------------------
|Class File
|--------------------------------------------------------------------------
|
| @Author  : Dominique DAMBA (sensei01)
| @Licence : Creative Common
|
|
*/

namespace App;


class File {



   	function __construct(){

   	}

    /**
     * return the filename in stored Directory.
     * @param string path
     * @param  string filename
     * @return string
     */
     public function filename($path,$filename){
      return $path.basename($_FILES[$filename]['name']);
     }


       /**
        * return the stored name in new Directory.
        * @param string generatingStin
        * @param  string filename
        * @return string
        */
        public function storeFilename($generatingSting,$filename){
          return  $generatingSting.basename($_FILES[$filename]['name']);
        }


         /**
         * return the extension.
         * @param  string filename
         * @return string
         */
          public  function extension($filename){

         	return strtolower( strrchr($_FILES[$filename]['name'], '.'));

         }

          public  function sizeKiloOctet($filename){
          	return round($_FILES[$filename]['size'] / 1024 * 100) / 100;
          }


          public function sizeGigaOctet($filename){
          	return round($_FILES[$filename]['size'] / 1073741824 * 100) / 100;
          }

          public function sizeMegaOctet($filename){
          	return round($_FILES[$filename]['size'] / 1048576 * 100) / 100;
          }

          public  function store($path,$filename){
              move_uploaded_file($_FILES[$filename]['tmp_name'], $this->filename($path, $filename));
          }

          /**
           * return the mime type
           * @param  string filename
           * @return string
           */
          public  function type($filename){
            return mime_content_type ($filename );
          }

          public  function delete($filename)
          {
              unlink($filename);
          }

            public function duplicate($init_name,$last_name)
            {
                copy($init_name,$last_name);
            }
}
