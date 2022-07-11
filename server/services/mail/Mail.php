<?php

    namespace app\services\mail;

    // use app\config\MysqlDBH;
    // use app\user\User;

    class Mail{
        //inject db, user model class
        private $userModel = null;

        function __construct()
        {
            // $this->userModel = new User(new MysqlDBH());
        }
        
        // get user by id
        public function sendMailByUserID(string $id){

        } 

        public function sendMailNow(){

            $message = '<html lang="en">
            <body style="margin:0; padding:0; background: #bbb;">
            
                <main style=" min-height:300px; border-radius: 6px; padding:10px 15px; margin:8vh auto 10px auto; max-width:100%; width:400px; background:#FCEED9;">
                    <h2 style="color:#333; font-size: 1.4rem; text-align: center;">Welcome to Crown nation</h2>
                    <p style="color:#333; font-size: 1rem;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex necessitatibus quos aliquam quam obcaecati nobis esse delectus facere dolore mollitia, quibusdam voluptate sapiente quod nesciunt id excepturi, placeat a. Suscipit?</p>
                </main>
                <footer style="text-align:center; font-size: 1.1rem;">
                    Powered by <a href="https//www.crownnation.org">Crownnation.org</a>
                </footer>
            
            </body>
            </html>';

            $to = "opcode3@gmail.com";
            $subject = "Just testing my mail service";

            if($this->sendMail($to, $subject, $message)){
                echo "Mail was sent successfully";
            }else{
                echo "An error occured while trying to send mail!";
            }



        }

        //mail function

        public function sendMail(string $to, string $subject, string $message){

            $headers = "From: Crownnation marketplace <josephemmanuelemeka@gmail.com>\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";

            return (mail($to, $subject, $message, $headers)) ? true : false;

        }
    }

?>