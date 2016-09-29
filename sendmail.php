<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			if(isset($_POST['submit'])){
				if(isset($_POST['mail'])){
					if($_POST['mail'] == 'mail'){
						mailsend();
					}elseif ($_POST['mail'] == 'mailer') {
						mailersend();
					 }
				}
			}
		}

		function mailsend(){

			echo "mail send() is working";
		}

		function mailersend(){
			echo "mailer send() is working";
		}

?>