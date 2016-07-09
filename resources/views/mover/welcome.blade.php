<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RTMOVERS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>html { box-sizing: border-box;}
         *, *:before, *:after {
             box-sizing: inherit;
         }
         body {
             margin:0;
             color:#f4f5f7;
             font: 12px/15px Arial, Helvetica, sans-serif;
             height:100%;
             min-width:230px;
             font-family: 'Raleway', sans-serif;
         }
         img {border-style:none;}
         a {
             text-decoration:none;
             color:#000;
             outline:none;
         }
         html { height:100%;}
         a:hover {text-decoration:underline;}
         a:active {background-color: transparent;}
         input,
         textarea,
         select {
             font:100% Arial, Helvetica, sans-serif;
             vertical-align:middle;
             color:#000;
             outline:none;
         }
         form, fieldset {
             margin:0;
             padding:0;
             border-style:none;
         }
         button::-moz-focus-inner {
             padding:0;
             margin:0;
         }
         header, footer, article, section, nav, figure, aside, main { display: block; }
         figure { margin:0; padding:0; }

         #wrapper{
             margin:0;
             padding: 0;
             overflow: hidden;
         }

         .header{
             margin:0;
             padding:20px 0;
             overflow: hidden;
             background:rgba(35, 53, 112, 0.7) none repeat scroll 0 0;
         }

         .container{
             margin:0 auto;
             padding:20px 0;
             max-width:800px;
         }

         #main{
             padding: 0;
             margin: 0;
             overflow: hidden;
         }
         .brand{
             color: #fff;
             font-family: Lobster,cursive;
             font-size: 50px;
             text-align: center;
             width: 100%;
         }

         content{
             margin: 0;
             padding: 0;

         }

         .content h1{
             color: #17690a;
             font-family: "Permanent Marker",cursive;
             font-size: 27px;
             margin-top: 5px;
             text-align: center;
             padding:10px 0;
         }

         .content p{
             color:#000;
             font-family: 'Raleway', sans-serif;
         }

         .content b{
             color:#64719a;
             font-size:15px;
         }

         .detail-p {
             margin: 0;
             padding:30px 30px;
             max-width: 700px;
         }

         .footer{

             margin: 0;
             padding: 0;
         }

         .follow {
             color: #000;
             font-size: 16px;
             font-weight: bold;
             float: left;
             padding:8px 0 0 30px
         }

         .social {
             list-style: none;
             margin:0;
             padding: 0 30px;
             float: left;
         }

         .social li{
             display: inline;
         }



         .social li a{
             text-decoration:none;
             padding:0 7px;
         }

         .facebook{
             background: #3b5998 none repeat scroll 0 0;
             border-radius: 32px;
             color: #fff;
             display: inline-block;
             font-size: 19px;
             height: 36px;
             padding: 8px 0;
             text-align: center;
             width: 31px;
         }


         .twitter{
             background: #1da1f2 none repeat scroll 0 0;
             border-radius: 32px;
             color: #fff;
             display: inline-block;
             font-size: 19px;
             height: 36px;
             padding: 8px 0;
             text-align: center;
             width: 31px;
         }



         .google{
             background: #d73d32 none repeat scroll 0 0;
             border-radius: 32px;
             color: #fff;
             display: inline-block;
             font-size: 19px;
             height: 36px;
             padding: 8px 0;
             text-align: center;
             width: 31px;
         }
     </style>
    <link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>

</head>
<body>
    <div id="wrapper">
        <div class="header">
                <div class="container">
                  <div class="brand">RTMovers.pk</div>
                </div>
          </div>
          <main id="main">
              <div class="content">
                   <div class="container">
              
                  
                  <div class="detail-p">
                  <p>Dear <b>Owner</b></p>
                  <p>Clint has Contact With you , He has send his Quotation Please contact with him.</p>
                  <p>His contact detail below..</p>
                      <br /> <br />
                      <p>Name :{{$quotation->f_name}}</p>
                      <p>Email:{{$quotation->email}}</p>
                      <p>Mobile :{{$quotation->mobile}}</p>
                      <p>Message :{{$quotation->text}}</p>

                  <h1>Thank You!</h1>    
                    </div>  
                    </div>
               </div>
               

          </main>
     </div>
  </body>
</html>