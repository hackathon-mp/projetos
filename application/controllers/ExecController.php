<?php

class ExecController extends Zend_Controller_Action {

    public function init() {
        
    }

    public function indexAction() {
//        $teste = shell_exec('/ssh -P2222 leandro@acesso.nbcgib.uesc.br "sbatch /home_nfs/nbcgib/leandro/job4T4096.srm"');
//        echo $teste;
//                die();

//        if (!function_exists("ssh2_connect"))
//            die("function ssh2_connect doesn't exist");
//// log in at server1.example.com on port 22
//        if (!($con = ssh2_connect("server1.example.com", 22))) {
//            echo "fail: unable to establish connection\n";
//                        die();
//        } else {
//            // try to authenticate with username root, password secretpassword
//            if (!ssh2_auth_password($con, "root", "secretpassword")) {
//                echo "fail: unable to authenticate\n";die();
//            } else {
//                // allright, we're in!
//                echo "okay: logged in...\n";die();
//
//                // execute a command
//                if (!($stream = ssh2_exec($con, "ls -al"))) {
//                    echo "fail: unable to execute command\n";die();
//                } else {
//                    // collect returning data from command
//                    stream_set_blocking($stream, true);
//                    $data = "";
//                    while ($buf = fread($stream, 4096)) {
//                        $data .= $buf;
//                    }
//                    fclose($stream);
//                }
//            }
//        }
    }

}
