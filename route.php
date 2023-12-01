<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {

		 //opsi routing halaman
         case 'home':
            include "home.php";
            break;

            case 'form-magang':
				include "formulir-magang.php";
				break;

			case 'form-informasi':
					include "formulir-datainformasi.php";
					break;

		    case 'lapor':
				include "laporsekarang.php";
				break;

         //opsi route default
			default:
				include "home.php";
				break;
		}
}else{
        //opsi jika route tidak ditemukan
		include "home.php";
}

?>