<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height fontnen">
    <div class="content">
        <div class="title m-b-md" style="color: white">
            <marquee id="marq" scrollamount="10" direction="" loop="50" scrolldelay="0" behavior="Alternate"
                     onmouseover="this.stop()" onmouseout="this.start()">Task Manager</marquee>
        </div>
        <div class="links">
            <script type="text/javascript">
                <!-- Begin
                function toSpans(span) {
                    var str=span.firstChild.data;
                    var a=str.length;
                    span.removeChild(span.firstChild);
                    for(var i=0; i<a; i++) {
                        var theSpan=document.createElement("SPAN");
                        theSpan.appendChild(document.createTextNode(str.charAt(i)));
                        span.appendChild(theSpan);
                    }
                }

                function RainbowSpan(span, hue, deg, brt, spd, hspd) {
                    this.deg=(deg==null?360:Math.abs(deg));
                    this.hue=(hue==null?0:Math.abs(hue)%360);
                    this.hspd=(hspd==null?3:Math.abs(hspd)%360);
                    this.length=span.firstChild.data.length;
                    this.span=span;
                    this.speed=(spd==null?50:Math.abs(spd));
                    this.hInc=this.deg/this.length;
                    this.brt=(brt==null?255:Math.abs(brt)%256);
                    this.timer=null;
                    toSpans(span);
                    this.moveRainbow();
                }
                RainbowSpan.prototype.moveRainbow = function() {
                    if(this.hue>359) this.hue-=360;
                    var color;
                    var b=this.brt;
                    var a=this.length;
                    var h=this.hue;

                    for(var i=0; i<a; i++) {

                        if(h>359) h-=360;

                        if(h<60) { color=Math.floor(((h)/60)*b); red=b;grn=color;blu=0; }
                        else if(h<120) { color=Math.floor(((h-60)/60)*b); red=b-color;grn=b;blu=0; }
                        else if(h<180) { color=Math.floor(((h-120)/60)*b); red=0;grn=b;blu=color; }
                        else if(h<240) { color=Math.floor(((h-180)/60)*b); red=0;grn=b-color;blu=b; }
                        else if(h<300) { color=Math.floor(((h-240)/60)*b); red=color;grn=0;blu=b; }
                        else { color=Math.floor(((h-300)/60)*b); red=b;grn=0;blu=b-color; }

                        h+=this.hInc;

                        this.span.childNodes[i].style.color="rgb("+red+", "+grn+", "+blu+")";
                    }
                    this.hue+=this.hspd;
                }

            </script>
            <a href="{{ route('task_add') }}" style="color: white; font-size: 20px" id="r1">ADD NEW CUSTOMER</a>
            <script type="text/javascript">
                var r1=document.getElementById("r1"); //get span to apply rainbow
                var myRainbowSpan=new RainbowSpan(r1, 0, 360, 255, 50, 18); //apply static rainbow effect
                myRainbowSpan.timer=window.setInterval("myRainbowSpan.moveRainbow()", myRainbowSpan.speed);
            </script>

            <a href="{{ Route('task_list') }}" style="color: white; font-size: 20px" id="r2">CUSTOMER LIST</a>
            <script type="text/javascript">
                var r2=document.getElementById("r2"); //get span to apply rainbow
                var myRainbowSpan=new RainbowSpan(r2, 0, 360, 255, 50, 18); //apply static rainbow effect
                myRainbowSpan.timer=window.setInterval("myRainbowSpan.moveRainbow()", myRainbowSpan.speed);
            </script>


        </div>
    </div>
</div>
</body>
</html>