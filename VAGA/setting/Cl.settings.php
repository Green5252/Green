<?php

/*
   ╔╦╗╦╔═╗╔═╗  ╔═╗╔═╗╔╦╗╦ ╦╔═╗
    ║ ║╠═╝╚═╗  ╚═╗║╣  ║ ║ ║╠═╝
    ╩ ╩╩  ╚═╝  ╚═╝╚═╝ ╩ ╚═╝╩
────────────────────────────────
* Use of other tools already provided by owner CLAY. If you have some problem.

* You can contact the manufacturer of the CLAY support if you need help or find some error in sender CLAY V.1.3.

* If You Want to Contact The CLAY Provider You Can Via Contact Below
  FB       : https://www.facebook.com/vidz.sianipar (Vidz)
  Whatsapp : +6282370721424
//Regards

* Use wisely. We are not responsible for the GX40 hacking. Because we provide the CLAY As Sender Email basically.

date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "72.52.238.62",
        "port"     => "587",
        "username" => "admin@989coworking.com",
        "password" => "admin1122554411000"
    ],
    [
        "host"     => "72.52.238.62",
        "port"     => "587",
        "username" => "admin@989coworking.com",
        "password" => "admin1122554411000"
    ],
    [
        "host"     => "72.52.238.62",
        "port"     => "587",
        "username" => "admin@989coworking.com",
        "password" => "admin1122554411000"
    ],

];
/* Features SETUP */

$gx_setup = [
    "priority"       => 3,
    "userandom"      => 0,
    "sleeptime"      => 8,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/hott.txt",
    "fromname"       => "Apple",
    "frommail"       => "noreplying-lockedservice##randstring##@apepleee.com",
    "subject"        => "[Alerts Recent Activity] : News Statement Update Account Submitted to Update Information [Alert] [Account Access].",
    "msgfile"        => "file/letter/ss.html",
    "filepdf"        => "",
    "scampage"       => [""],
];
