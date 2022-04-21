
 <?php
    
    
    if(isset($_POST['submit'])){
           

        //$id = $_POST['id'];
        // $pesan = $_POST['pesan'];
       //$chat_id = -480202956;
		// $message = "Pesanan dari " " mengirim pesan "$pesan"";
		//$token = '1738294890:AAF2KuJID3efe1wTwnKl_Fk5Wf_VkgN518Q';
		//$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=-$chat_id&parse_mode=HTML&text=$message";
        //$url="https://api.telegram.org/bot1289764461:AAHo000F3engrdpKUqXUZXUf2zComWLvOoo/sendMessage?chat_id=-480202956&parse_mode=HTML&text=$message";
        $url="https://api.telegram.org/bot1738294890:AAF2KuJID3efe1wTwnKl_Fk5Wf_VkgN518Q/sendMessage?chat_id=-323635813&parse_mode=HTML&text=aa";
            
        $curl = curl_init($url);

			curl_exec($curl);

            curl_close($curl);
            
            echo "Pesan telah sended";
       

    }
?> 
