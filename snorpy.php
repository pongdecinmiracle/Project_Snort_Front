<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='./background.css' type='text/css'></link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<!-- Form -->
<form method="post" action="./snorpy_rule.php"> 
            
        <div class="col-sm-12"><!-- R -->
        
            <div class="fonttext">
                snort
            </div>
            
            <div class="shape"><!-- Add Rule -->
                    <select name="action" >
                            <option value="">Action</option>
                            <option value="alert">alert</option>
                            <option value="log">log</option>
                            <option value="pass">pass</option>
                            <option value="activate">activate</option>
                            <option value="dynamic">dynamic</option>
                            <option value="drop">drop</option>
                            <option value="reject">reject</option>
                            <option value="sdrop">sdrop</option>
                        </select>
                        <select name="protocol">
                            <option value="">Protocol</option>
                            <option value="tcp">tcp</option>
                            <option value="icmp">icmp</option>
                            <option value="udp">udp</option>
                            <option value="ip">ip</option>
                        </select>
                        <input id="text" name="sourceip" placeholder="source ip"></input>
                        <input id="text"  name="srcport" placeholder="source port"></input>
                        <input id="text"  name="dstip"  placeholder="dest ip"></input>
                        <input id="text"  name="dstport"  placeholder="dest port"></input>
                        <input id="text"  name="sid"  placeholder="sid"></input>
                        <input id="text"  name="rev" placeholder="rev num"></input>
                    </br>
                        <input id=headermessage  name="headermessage" placeholder="Rule Message ( \ Escape special characters)"></input>
                        <input id="text"    name="classtype" placeholder="Class-Type"></input>
                        <select name="priority">
                            <option value="">Priority</option>
                            <option value="priority:1">1</option>
                            <option value="priority:2">2</option>
                            <option value="priority:3">3</option>
                            <option value="priority:4">4</option>
                            <option value="priority:5">5</option>
                        </select>
                        <input id="text"    name="gid" placeholder="gid">
            </div>
            <div class="col-sm-6"><!-- IP -->
                    <div class="ip">
                        <h4>IP</h4>
                            <select name="ttlevaluator" >
                                    <option value="&gt;">&gt;</option>
                                    <option value="&lt;">&lt;</option>
                                    <option value="=">=</option>
                                    <option selected="selected" value="">TTL</option>
                                </select>
            
                                <input name="ttl" type="text" />
                                </br></br>
                                <select name="ipprotoevaluator" size="1">
                                    <option value="&gt;">&gt;</option>
                                    <option value="&lt;">&lt;</option>
                                    <option value="=">=</option>
                                    <option selected="selected" value="">IP PROTOCOL</option>
                                </select>
                                <input name="ipprotofield" type="text" />
                    
                    </div>
                </div>
                
            <div class="col-sm-6"><!-- TCP -->
                    <div class="tcp">
                            <h4>TCP</h4>
                    <select class="tcpinputs" id="httpmethodForm" >
                        <option value='content:"GET"; http_method;'>GET</option>
                        <option value='content:"POST"; http_method;'>POST</option>
                        <option value='content:"HEAD"; http_method;'>HEAD</option>
                        <option value='content:"TRACE"; http_method;'>TRACE</option>
                        <option value='content:"PUT"; http_method;'>PUT</option>
                        <option value='content:"DELETE"; http_method;'>DELETE</option>
                        <option value='content:"CONNECT"; http_method;'>CONNECT</option>
                        <option selected="selected" value="">HTTP REQUEST METHOD</option>
                    </select>
                &nbsp<select  class="tcpinputs" style="border-radius:5px; background-color:#f2f2f2; padding:3px;" id="httpstatuscode">
                    <option value="100">100</option>
                    <option value="101">101</option>
                    <option value="200">200</option>
                    <option value="201">201</option>
                    <option value="202">202</option>
                    <option value="203">203</option>
                    <option value="204">204</option>
                    <option value="205">205</option>
                    <option value="206">206</option>
                    <option value="300">300</option>
                    <option value="301">301</option>
                    <option value="302">302</option>
                    <option value="303">303</option>
                    <option value="304">304</option>
                    <option value="305">305</option>
                    <option value="306">306</option>
                    <option value="307">307</option>
                    <option value="400">400</option>
                    <option value="401">401</option>
                    <option value="402">402</option>
                    <option value="403">403</option>
                    <option value="404">404</option>
                    <option value="405">405</option>
                    <option value="406">406</option>
                    <option value="407">407</option>
                    <option value="408">408</option>
                    <option value="409">409</option>
                    <option value="410">410</option>
                    <option value="411">411</option>
                    <option value="412">412</option>
                    <option value="413">413</option>
                    <option value="415">415</option>
                    <option value="416">416</option>
                    <option value="417">417</option>
                    <option value="500">500</option>
                    <option value="501">501</option>
                    <option value="502">502</option>
                    <option value="503">503</option>
                    <option value="504">504</option>
                    <option value="505">505</option>
                    <option selected="selected" value="">HTTP RESPONSE CODE</option>
                    </select></br>
                    </br>
                    ACK
                    <input style="border-radius:5px; background-color:#f2f2f2; padding:3px;" id="ACK" class="pin" type="checkbox" value="A" />
                        &nbsp;SYN<input id="SYN"  class="pin" type="checkbox" value="S" />
                        &nbsp;PSH<input id="PSH"  class="pin" type="checkbox" value="P" />
                        &nbsp;RST<input id="RST"  class="pin" type="checkbox" value="R" />
                        &nbsp;FIN<input id="FIN"  class="pin" type="checkbox" value="F" />
                        &nbsp;URG<input id="URG"  class="pin" type="checkbox" value="U" />
                        &nbsp;+<input id="flagplus" class="pin" type="checkbox" value="+" />
                        &nbsp;*<input id="wildcard" class="pin" type="checkbox" value="*" />
                    </br></br>
                    <select class="tcpinputs" id="tcpdirectionForm">
                        <option value="FROM_SERVER">FROM_SERVER</option>
                        <option value="TO_SERVER">TO_SERVER</option>
                        <option value="TO_CLIENT">TO_CLIENT</option>
                        <option value="FROM_CLIENT">FROM_CLIENT</option>
                        <option selected="selected" value="">DIRECTION</option>
                    </select>
                    &nbsp
                    <select  class="tcpinputs" id="tcpstateForm">
                        <option value="established">established</option>
                        <option value="stateless">stateless</option>
                        <option value="not_established">not_established</option>
                        <option selected="selected" value="">TCP STATE</option>
                    </select>
                    </div>
                </div>
                
            <div class="col-sm-6"><!-- ICMP -->
                        <div class="icmp">
                                <h4>ICMP</h4>
                                    <select  class="tcpinputs" id="icmptypeevaluator">
                                    <option value="&gt;">&gt;</option>
                                    <option value="&lt;">&lt;</option>
                                    <option value="=">=</option>
                                    <option selected="selected" value="">ICMP TYPE</option>
                                    </select>
                                        <input  class="tcpinputs" id="icmptype" type="text" />
                                        </br></br>
                                    <select  class="tcpinputs" id="icmpcodeevaluator">
                                        <option value="&gt;">&gt;</option>
                                        <option value="&lt;">&lt;</option>
                                        <option value="=">=</option>
                                        <option selected="selected" value="">ICMP CODE</option>
                                    </select>
                                    <input  class="tcpinputs" id="icmpcode" type="text" />
                        </div>
                    </div>
                
            <div class="col-sm-6"><!-- UDP -->
                        <div class="udp">
                         <h4>UDP</h4>
                            </br>
                            <select style="width: 90%;" id="udpdirectionForm">
                                <option value="FROM_SERVER">FROM_SERVER</option>
                                <option value="TO_SERVER">TO_SERVER</option>
                                <option value="TO_CLIENT">TO_CLIENT</option>
                                <option value="FROM_CLIENT">FROM_CLIENT</option>
                                <option selected="selected" value="">DIRECTION</option>
                            </select>
                        </div>
                    </div>
                
                    <input class="submit" type="submit" name="submit" value="Submit">
                
        </div><!-- end R -->
        

</form><!-- End Form -->

       
</body>
</html>