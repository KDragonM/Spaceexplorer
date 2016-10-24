<!DOCTYPE html>
<html>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <head><title>Spaceexplorer</title></head>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <script src="/js/bootstrap.min.js"></script>
        <style type="text/css">
        #ip {
            border:10px solid green;
            border-style:outset;
            text-align:center;
            margin-left:auto;
            margin-right:auto;
            width:500px;
        }
        .title {
            margin:5% 10% 5% 10%;
            padding:60px 48px 60px 48px;
        }
        .gradientBox {
            background: linear-gradient(to bottom right, #286090, #28A4C9);
            height: 400px;
            width: 75%;
            text-align: center;
            margin: auto;
            margin-top: 20ps;
            margin-bottom: 20px;
            color: #F3F3F3;
            font-size: 100px;
            font-family: "Inconsolata", monospace;
            line-height: 400px;
          /*  padding-top: 150px;*/
        }
        @keyframes stretch {
            from {
                background: linear-gradient(to bottom right, #286090, #28A4C9);
                width:75%; 
                }
            to {
                background: linear-gradient(to bottom right,#33cc33, #80cc33);
                width:90%; 
                }
        }
        .gradientBox:hover {
            background: linear-gradient(to bottom right,#33cc33, #80cc33);
            animation-name: stretch;
            animation-duration: 2s;
            width:90%
        }
    </style>

    <body>
        <script>
        var disclaim = function(){
            $.get("/Terms-of-use.txt", function(data){alert(data)});
            alert("Your usage of thie website is being tracked. IF YOU DO NOT AGREE, LEAVE NOW");
        }
            if(typeof(Storage) !== undefined){
                if(!localStorage.disclaim){
                    disclaim();
                    localStorage.setItem("disclaim","1");
                }
            }else{
                disclaim();
            }
        </script>
        
        
        
        
        
        
        <div id="nav"></div>
       <script>$("#nav").load("nav.html");</script>
       
            <div class="jumbotron title">
                <h1>Welcome to Spaceexplorer!</h1>
                <p>The testing grounds</p>
            </div>
            
            <div class="gradientBox">Welcome to Spaceexplorer!</div>
       
        <div id="ip">
            <h3>User Agent Info</h3>
            <p><? echo $_SERVER['HTTP_USER_AGENT'] ?></p>
            <h3>Your IP Adress</h3>
            <p><? echo $_SERVER['REMOTE_ADDR'] ?></p>
            
            <h3>Your port</h3>
            <p><? echo $_SERVER['REMOTE_PORT']?></p>
        </div>
        

        

        <?php
            include 'functions.php';
            logIP();       
        ?>
        <footer>
            <hr/>
            <p>Email spaceexplorers[at]altervista.org to contact the webmaster</p>
           <p>
            TERMS OF USE
By visiting the website Spaceexplorers, viewing, accessing or otherwise using any of the services or information created, collected, compiled or submitted to Spaceexplorers, you agree to be bound by the following Terms and Conditions of Service. If you do not want to be bound by our Terms your only option is not to visit, view or otherwise use the services of Spaceexplorers. You understand, agree and acknowledge that these Terms constitute a legally binding agreement between you and Spaceexplorers and that your use of Spaceexplorers shall indicate your conclusive acceptance of this agreement.

If you do not think these terms are reasonable, do not use this website.

The Terms OF USE are as follows:

A. When you submit content to Spaceexplorers you simultaneously grant Spaceexplorers an irrevocable, worldwide, royalty free license to publish, display, modify, distribute and syndicate your content worldwide. You confirm and warrant that you have the required authority to grant the above license to Spaceexplorers. By submitting content to this website, you confirm that your contribution is your own original work, is not defamatory and does not infringe any international laws or laws from the country that you use this website in.

B. You understand and agree that Spaceexplorers and any of its subsidiaries or affiliates shall in no event be liable for any direct, indirect, incidental, consequential, or exemplary damages. This shall include, but not be limited to damages for loss of profits, business interruption, business reputation or goodwill, loss of programs or information or other intangible loss arising out of the use of or the inability to use the service, or information, or any permanent or temporary cessation of such service or access to information, or the deletion or corruption of any content or information, or the failure to store any content or information. The above limitation shall apply whether or not Spaceexplorers has been advised of or should have been aware of the possibility of such damages. In jurisdictions where the exclusion or limitation of liability for consequential or incidental damages is not allowed the liability of Spaceexplorers is limited to the greatest extent permitted by law.

C. Spaceexplorers reserves the right to modify these Terms from time to time at our sole discretion and without any notice. Changes to our Terms become effective on the date they are posted and your continued use of Spaceexplorers after any changes to Terms will signify your agreement to be bound by them.

D. We do not warrant that functions available on this website will be uninterrupted or error free, that defects will be corrected, or that the server that makes it available is free of viruses or bugs. You acknowledge that it is your responsibility to implement sufficient procedures and virus checks (including anti-virus and other security checks) to satisfy your particular requirements for the accuracy of data input and output.
        </p>
        </footer>
        
        
        
        


    </body>
    
</html>