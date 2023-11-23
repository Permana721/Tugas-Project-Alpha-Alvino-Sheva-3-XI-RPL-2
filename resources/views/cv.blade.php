<!DOCTYPE Html>
<Html>
    <head>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           
         <title>CV IJOEL</title>    
    </head>
    <body>
        <div class="container">

        <table border "0" style="width: 100%">
            <tr>
                <h1>Curriculum Vitae</h1>
            </tr>
            <tr>
                <td><center><img src="/foto1.jpg"/></center></td>
            </tr>    
            <tr>
                <td><p><i class="fa fa-home fa-fw large"></i>Nis                        : 
                @foreach ($data as $item)
                    {{$item['nis']}}
                @endforeach
            </p></td>
            </tr>
            <tr>
                <td><p><i class="fa fa-briefcase fa-fw large"></i>Nama                         : 
                @foreach ($data as $item)
                    {{$item['nama']}}
                @endforeach
            </p></td>
            </tr>
            <tr>
                <td><p><i class="fa fa-briefcase fa-fw large"></i>Kelas                     : 
                @foreach ($data as $item)
                    {{$item['kelas']}}
                @endforeach
            </p></td>
            </tr>
            <tr>
                <td><p><i class="fa fa-briefcase fa-fw large"></i>Jenis Kelamin            : 
                @foreach ($data as $item)
                    {{$item['jenis-kelamin']}}
                @endforeach
                </p></td>
            </tr>
            <tr>
                <td><p><i class="fa fa-briefcase fa-fw large"></i>Deskripsi diri            : Saya Seorang Web Developer Yang Berusia 16 Tahun</p></td>  
            </tr> 
            <tr>
            <tr>
                <td><p><i class="fa fa-briefcase fa-fw large"></i>Latar Belakang Pendidikan : SMKN 2 Bandung</p></td>  
            </tr> 
            <tr>
                <td><p><i class="fa fa-briefcase fa-fw large"></i>Pengalaman Bekerja        : Saya Pernah PKL Di Tikomdik</p></td>
            </tr>
            <tr>
                <td><p><i class="fa fa-phone fa-fw large"></i>No Telp                       : 081221978905</p></td>  
            </tr> 
            <tr>
                <td><p><i class="fa fa-calendar fa-fw large"></i>Tanggal Lahir              : 31-07-2006</p></td>  
            </tr> 
            <tr>
                <td><p><i class="fa fa-linux fa-fw large"></i>Skil                          : HTML CSS</p></td>
            </tr>
            <tr>
                <td><i class="fa fa-globe fa-fw large"></i>Social Media                     :  <a href="https://www.facebook.com/Ihsan"><i class="fa fa-facebook fa-fw large"></i></a>
                                                                                               <a href="https://www.instagram.com/ihsan_juliansah/?hl=id"><i class="fa fa-instagram fa-fw large"></i></a> </td></br>
            </tr>

        </table>    
        </div>  
    </body>

</html>        