<?php 
    // built in function
    
    // date/time
        
        /* date() 
            l: hari s
            d:tanggal 
            M:bulan 
            m: bulan(dalam angka) 
        */
            // echo date("l, d-M-Y");

        // time()
            // UNIX Timestamp / EPOCH time
            // detik yang sudah berlalu sejak 1 januari 1970 sammpai saat 
            // makannya hasilnya 16000 an 
            // echo time();

        // hitung hari kedepan
            // echo date("d-M-Y", time()+(60*60*24)*20);

        // mktime()
            // membuat sendiri detik
            // mktime (0,0,0,0,0,0)
            // jam,menit,detik,bulan,tanggal,tahun
            // buat detik tanggal
                // ex tanggal lahir 
                // mktime(23,30,10,12,13,2000)
            // fungsi buat hari lahir 
                // echo date("l",mktime(23,30,10,12,13,2000));
        // strtotime()
            // bikin detiknya
                echo time();
                echo ("<br />");
                echo strtotime(16.00);
                // echo strtotime("13 dec 2000");
            // bikin tanggalnya 
            // echo date("l, d-M-Y",strtotime("13 dec 2000"));
        
?>