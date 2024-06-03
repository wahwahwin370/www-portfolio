if(isset($_POST['pgsubmitted'])) {
                                        $yourname= $_POST['yourname'];
                                        $email = $_POST['email'];
                                        $phone = $_POST['phone'];
                                        $com_name= $_POST['com_name'];
                                        $message = $_POST['message'];	
                                        $date = date("j F, Y, g:i a");
                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        if( $yourname==NULL or $email==NULL or $phone ==NULL or $com_name == NULL  or $message == NULL){
                                            echo '<div class="alert alert-danger">One or more required fields were left blank. Please fill them in and try again.</div>';
                                            form($yourname,$email,$phone,$com_name,$message);
                                        }else{
                                            $headers[] =  'MIME-Version: 1.0' ;
                                            $headers[]= 'Content-type: text/html; charset=iso-8859-1';
                                            $headers[] ='From: wahw291@gmail.com';
            
                                            $body = 'Hello, <br><br>
                                            You have received the message at Your Portfolio Website           
                                            . <br><br>
                                            
                                            Name: '.$yourname.'<br/><br/>
                                            Email: '.$email.'<br><br>
                                            Phone: '.$phone.'<br><br>
                                            Company Name: '.$com_name.'<br><br>
                                            Message: '.$message;
                                            
                                            mail("wahw291@gmail.com,wahw370@gmail.com,wahwahwin.web@gmail.com", "Your Portfolio Message ", $body,implode("\r\n", $headers));
                                                                    
                                            echo '<div class="alert alert-success"><strong>Thank you very much for contacting me.</strong></div>';
                                        }
                                    }