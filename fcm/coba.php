 <?php
 include "koneksi.php";
 	$querykelas = mysqli_query ($konek, "SELECT reg_id FROM tbl_siswa ");
						if($querykelas == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($kelas = mysqli_fetch_array ($querykelas)){
							
						
					
        // Enabling error reporting
        error_reporting(-1);
        ini_set('display_errors', 'On');

        require_once __DIR__ . '/firebase.php';
        require_once __DIR__ . '/push.php';

        $firebase = new Firebase();
        $push = new Push();

        // optional payload
        $payload = array();
        $payload['team'] = 'Indonesia';
        $payload['score'] = '5.6';

        // notification title
        $title = $_GET["judul"];
        
        // notification message
        $message = $_GET["isi"];
        
        // push type - single user / topic
        $push_type = 'individual';
        
        // whether to include to image or not
       // $include_image = isset($_GET['include_image']) ? TRUE : FALSE;


        $push->setTitle($title);
        $push->setMessage($message);
      
            $push->setImage('');
        
        $push->setIsBackground(FALSE);
        $push->setPayload($payload);


        $json = '';
        $response = '';
        $regId=$kelas['reg_id'];

        if ($push_type == 'topic') {
            $json = $push->getPush();
            $response = $firebase->sendToTopic('global', $json);
        } else if ($push_type == 'individual') {
            $json = $push->getPush();
          
          
            $response = $firebase->send($regId, $json);
            //ubah menjadi alamat server agan saat calback kembali ke pengumuman
            	header("Location: http://androidcodelist.com/siakad/index.php/pengumuman");
//	exit();
        }
						}
        ?>