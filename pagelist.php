<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Css/reset.css">
        <link rel="stylesheet" href="./Plugins/bootstrap-4.6.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./Plugins/bootstrap-4.6.2-dist/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./Css/site.css">
        <script src="./Plugins/jquery-3.2.1.min.js"></script>
        <script src="./Plugins/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body{
                min-width: 375px;
                overflow-y: auto;
            }
            .border-line {
                height: 1px;
                width: 100%;
                background: #dee2e6;
            }

            .list-group {
                border-radius: 0;
            }

            .list-group-hover {
                /* height: 300px;
                overflow-y: auto;
                border: 1px solid rgba(0,0,0,.125); */
            }

            .list-group-hover .list-group-item:hover{
                background-color: #61E1A2;
            }

            .list-group-hover .list-group-item:hover >  a, 
            .list-group-hover .list-group-item:hover >  i {
                cursor: pointer;
                color: #fff;
            }

            .list-group-hover .list-group-item {
                position: relative;
                height: 50px;
            }
            .list-group-hover .list-group-item a {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: block;
                z-index: 99;
                text-decoration: none;
                color: #000;
                font-size: 20px;
                line-height: 45px;
                box-sizing: border-box;
                padding-left: 20px;
            }

            .list-group-hover .list-group-item i {
                position: absolute;
                top: 13px;
                right: 13px;
                z-index: 98;
            }
        
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
                border-top: 1px solid #dee2e6!important;
                background: #fff;
                z-index: 120;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="container container-sm header">
            <img src="./Res/img-sinyi-logo-green.svg" alt="信義房屋" class="header-logo">
        </div>

        <div class="border-line"></div>

        <div class="container content">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mt-4">【代書無紙化專案】<br/>RWD頁面清單</h2>
                    <ul class="list-group list-group-hover mt-4">
                        <?php 
                            $dir = new DirectoryIterator(getcwd().'/Pages');
                            $DirNames = array();

                            foreach ($dir as $fileinfo) {
                                if ($fileinfo->getExtension() == 'html') {
                                    
                                    $DirNames[] = $fileinfo->getFilename();
                                    
                                }
                            }

                            sort($DirNames);

                            foreach($DirNames as $name) {

                                echo '<li class="list-group-item">
                                
                                <a href="./Pages/'.$name.'" target="_blank">'.$name.'</a>
                                
                                <i class="bi bi-link-45deg"></i>
                                
                                </li>';

                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer">
            <p class="footer-text">&copy; 信義房屋股份有限公司</p>
        </div>
    </body>
</html>