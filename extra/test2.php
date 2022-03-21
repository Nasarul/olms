<!DOCTYPE html>
<html lang="en">

<head>
    <a href="https://dribbble.com/YancyMin" class="dr-url" target="_blank"><img class="dr" src="https://cdn.dribbble.com/assets/logo-footer-hd-a05db77841b4b27c0bf23ec1378e97c988190dfe7d26e32e1faea7269f9e001b.png" alt=""></a>
    <script src="https://kit.fontawesome.com/210c136c9c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    html {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
   -webkit-box-pack: center;
       -ms-flex-pack: center;
           justify-content: center;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
 }
 
 body {
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: justify;
       -ms-flex-pack: justify;
           justify-content: space-between;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
   min-height: 100vh;
   background-color: #F7F9FC;
   font-family: system, -apple-system, BlinkMacSystemFont, sans-serif;
   font-size: 20px;
   color: #5d6494;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
 }
 
 .container {
   width: 220px;
   height: 220px;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: center;
       -ms-flex-pack: center;
           justify-content: center;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
 }
 
 .box {
   position: absolute;
   width: 220px;
   height: 220px;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: center;
       -ms-flex-pack: center;
           justify-content: center;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
       -ms-flex-direction: column;
           flex-direction: column;
   border-radius: 3px;
   overflow: hidden;
   -webkit-transition: -webkit-box-shadow ease 1s;
   transition: -webkit-box-shadow ease 1s;
   transition: box-shadow ease 1s;
   transition: box-shadow ease 1s, -webkit-box-shadow ease 1s;
 }
 
 .icon {
   position: relative;
   margin-top: 8px;
   -webkit-transition: all 0.6s ease;
   transition: all 0.6s ease;
   -webkit-transition-delay: 0.32s;
           transition-delay: 0.32s;
   will-change: transform;
 }
 
 .icon_bg {
   width: 80px;
   height: 80px;
   border-radius: 100%;
   border: 1px solid rgba(225, 227, 232, 0.18);
   -webkit-box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
           box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
   background-color: #fff;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: center;
       -ms-flex-pack: center;
           justify-content: center;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
   -webkit-transition: all 0.6s ease;
   transition: all 0.6s ease;
   -webkit-transition-delay: 0.32s;
           transition-delay: 0.32s;
   will-change: transform;
 }
 
 .title {
   position: relative;
 }
 
 .super-box:hover .box {
 /*   border: 1px solid rgba(225, 227, 232, 0.18); */
   -webkit-box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
           box-shadow: 0 3px 4px 0 rgba(44, 71, 146, 0.25);
   -webkit-transition-delay: 0.32s;
           transition-delay: 0.32s;
 }
 
 .super-box:hover .icon_bg {
   -webkit-transform: translateY(-32px) scale(6);
           transform: translateY(-32px) scale(6);
 }
 
 .super-box:hover .icon {
   -webkit-transform: translateY(-48px) scale(1.4);
           transform: translateY(-48px) scale(1.4);
 }
 
 .super-box {
     width: 220px;
   height: 220px;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: center;
       -ms-flex-pack: center;
           justify-content: center;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
       -ms-flex-direction: column;
           flex-direction: column;
 }
 
 .text {
   position: relative;
   top: -32px;
   width: 200px;
   text-align: center;
   -webkit-transition: all 0.4s ease;
   transition: all 0.4s ease;
   -webkit-transition-delay: 0.32s;
           transition-delay: 0.32s;
 }
 
 .super-box:hover .text {
   opacity: 0;
   -webkit-transform: translateY(-4px) scale(.8);
           transform: translateY(-4px) scale(.8);
   
 }
 
 .box::after {
   content: "CLick here to enter Admin portal";
   position: absolute;
   width: 170px;
   top: 111px;
   opacity: 0;
   font-size: 13px;
   text-align: center;
   color: #5d6494;
   line-height: 20px;
   -webkit-transition: all 0.3s ease;
   transition: all 0.3s ease;
   -webkit-transition-delay: 0.32s;
           transition-delay: 0.32s;
 }
 
 .super-box:hover .box::after {
   opacity: 1;
 }

.dr {
position: absolute;
  bottom: 16px; 
  right: 16px;
  width:100px;
}

</style>

</head>

<body>

    <div class="super-box">
        <div class="container">
            
            <div class="box">
                <div class="icon_bg"></div>
            </div>

            <div class="icon">

                <svg width="42px" height="26px" viewBox="0 0 42 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 51 (57462) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                            <stop stop-color="#648CFF" offset="0%"></stop>
                            <stop stop-color="#4575FB" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="working" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="aaa" transform="translate(-227.000000, -3528.000000)">
                            <rect fill="#FFFFFF" x="0" y="0" width="1440" height="4857"></rect>
                            <g id="Group-19" transform="translate(180.000000, 3501.000000)">
                                <g id="1" transform="translate(25.000000, 0.000000)">
                                    <g id="Group-26" transform="translate(5.000000, 0.000000)">
                                        <g id="Group-16" transform="translate(17.000000, 27.000000)">
                                            <g id="noun_578648_cc-(1)" transform="translate(3.135583, 0.000000)" fill="url(#linearGradient-1)">
                                                <path d="M16.2931971,0 C19.0389025,0 21.5733998,0.883675937 23.6251358,2.37678356 C26.6423945,1.18839178 28.7544756,0.822732769 30.0217243,1.09697703 C31.4398359,1.40169287 32.0734602,2.2853688 31.9527698,3.59564692 C31.8924247,4.44885127 31.4096633,5.51535671 30.5346582,6.6732769 C28.1811964,9.78137848 22.5992678,14.1997582 14.69405,18.1610641 C19.7026994,17.4906892 24.409623,15.8147521 28.7846482,12.9504232 C28.6036127,19.7455865 23.0820292,25.2 16.2931971,25.2 C12.9440399,25.2 9.8966086,23.8592503 7.66383715,21.6652963 C5.00864947,22.6708585 3.13794907,22.9451028 1.99139076,22.7013301 C0.573279157,22.3966143 -0.0603451744,21.5129383 0.0301725872,20.2026602 C0.0905177616,19.3189843 0.603451744,18.2829504 1.47845677,17.0945586 C3.83191857,14.0169287 9.38367462,9.56807739 17.3190651,5.60677146 C12.6121414,6.24667473 8.17677113,7.77025393 4.04312668,10.329867 C5.09916724,4.44885127 10.1983345,0 16.2931971,0 Z M5.97417227,19.6541717 C5.46123828,18.8923821 5.03882206,18.0696493 4.67675102,17.1859734 C4.19398962,17.7039903 3.7715734,18.1915357 3.43967494,18.6181378 C2.92674096,19.3189843 2.5948425,19.8674728 2.53449732,20.2636034 C3.16812166,20.3854897 4.31467997,20.2026602 5.97417227,19.6541717 Z M25.6768717,4.26602177 C26.2803235,4.99733978 26.82343,5.75912938 27.2760188,6.61233374 C27.7889528,6.09431681 28.211369,5.60677146 28.5734401,5.1496977 C29.0863741,4.44885127 29.4182725,3.90036276 29.4786177,3.53470375 C28.7846482,3.38234583 27.5475721,3.59564692 25.6768717,4.26602177 Z" id="Shape"></path>
                                            </g>
                                            <ellipse id="Oval-16" fill="#3364ED" opacity="0.400000006" transform="translate(39.194782, 10.395000) scale(-1, -1) translate(-39.194782, -10.395000) " cx="39.1947824" cy="10.395" rx="2.82202433" ry="2.835"></ellipse>
                                            <ellipse id="Oval-16-Copy-2" fill="#3364ED" opacity="0.400000006" transform="translate(35.745642, 18.270000) scale(-1, -1) translate(-35.745642, -18.270000) " cx="35.7456415" cy="18.27" rx="1.88134955" ry="1.89"></ellipse>
                                            <ellipse id="Oval-16-Copy" fill="#3364ED" opacity="0.400000006" transform="translate(2.508466, 3.150000) scale(-1, -1) translate(-2.508466, -3.150000) " cx="2.50846607" cy="3.15" rx="2.50846607" ry="2.52"></ellipse>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

        </div>

        <div class="text">
            <p class="title">
                Admin
            </p>

        </div>


        

    </div>

</body>

</html>