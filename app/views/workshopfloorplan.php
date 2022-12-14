<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta-tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MBO Utrecht</title>
        <!-- stylesheet links -->
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>

        <!-- Navigation bar -->
        <?php $this->view("partials/navbar"); ?>

        <!-- Content -->
        <section>
            <div>
                <div class="floorplan__info">
                    <h2 id="workshopTitle">Workshop titel</h2>
                    <p id="workshopInfo">Workshop informatie.</p>
                    <button>
                        <a href="">Inschrijven voor workshop</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
                <div class="floorplan__img">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                    viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
                        <g>
                            <path style="fill:#C2C2C2;" d="M873.73,489.48c0,68.91,0,137.33,0,206.21c-3.77,0.24-7,0.44-10.08,0.64
                                c-1.22,2.51,0.15,5.51-2.74,7.28c-27.43,0-55.17,0-83.36,0c-0.33-2.53-0.63-4.75-0.96-7.27c-3.34-0.25-6.57-0.48-10.17-0.75
                                c0-104.82,0-209.18,0-314.07c22.34,0,44.37,0,67.21,0c0,5.57,0,11.11,0,17.06c6.68,0,12.57,0,18.55,0
                                c14.85-48.55,45.68-82.63,96.51-89.86c71.05-10.11,119.98,20.81,144.07,89.85c0-12.8,0-25.61,0-38.98c14.64,0,28.46,0,42.95,0
                                c0,7.26,0,14.33,0,22.24c14.17,0,27.71,0,41.76,0c0,105.03,0,209.22,0,313.9c-3.17,0.17-6.42,0.34-9.95,0.52
                                c-0.35,2.36-0.68,4.58-1.07,7.26c-28.23,0-56.26,0-84.78,0c-0.35-2.26-0.7-4.48-1.13-7.23c-3.15-0.16-6.4-0.33-10.25-0.52
                                c0-68.66,0-137.23,0-206.28C1004.68,489.48,939.67,489.48,873.73,489.48z M944.39,383.31c-11.24-19.13-21.92-37.29-32.87-55.92
                                c-21.54,14.18-38.83,30.74-47.54,55.1c17.82,7.23,35.05,14.23,52.29,21.23c-0.36,0.88-0.72,1.77-1.08,2.65
                                c-17.59-7.05-35.18-14.1-53.15-21.31c-2.16,6.8-4.05,12.73-6.08,19.13c-8.03,0-15.77,0-23.6,0c0,7.87,0,15.1,0,21.98
                                c2.12,1.79,5.15-0.52,7.1,3.59c-8.45,0-16.32,0-24.01,0c0,32.1,0,62.99,0,94.49c4.68,0,8.92,0,13.74,0c0,27.51,0,54.41,0,81.39
                                c3.84,0,7.07,0,12.01,0c0-28.08,0-55.79,0-83.51c0.47,0.03,0.93,0.06,1.4,0.09c0-10.92,0-21.84,0-33.36c-6.3,0-12.21,0-18.24,0
                                c0-16.51,0-32.4,0-48.09c4.75,0,9.11,0,13.47,0c0.02,0.55,0.05,1.11,0.07,1.66c-3.54,0.35-7.07,0.7-10.46,1.04
                                c0,8.04,0,15.61,0,23.12c5.68,0,10.91,0,16.74,0c0-8.98,0-17.55,0-26.71c81.5,0,162.39,0,243.5,0c0-12.51,0-24.41,0-37.49
                                c-22,5.12-43.44,10.11-64.95,15.11c0.43,4.06,0.85,8.03,1.28,12.11c-14.75,0-28.65,0-43.14,0c0-13.95,0-27.52,0-41.26
                                c-6.17,0-11.74,0-17.9,0c0,13.9,0,27.47,0,41.34c-14.84,0-29.08,0-44.1,0C921.37,410.61,928.23,394.46,944.39,383.31z
                                M1172.52,454.13c0-22.8,0-44.81,0-67.09c-13.46,0-26.45,0-39.53,0c-0.72-1.44-1.35-2.69-1.82-3.65c-5.16,0-9.91,0-14.8,0
                                c0,12.28,0,24.18,0,36.68c5.25,0,10.16,0,15.32,0c0,31.51,0,62.4,0,94.08c-4.65,0-9.02,0-13.24,0c0,17.36,0,33.92,0,50.43
                                c18.34,0,36.24,0,54.16,0c0-26.65,0-52.88,0-79.72c-11.62,0-22.86,0-34.25,0c0-10.51,0-20.4,0-30.73
                                C1149.81,454.13,1160.92,454.13,1172.52,454.13z M828.68,386.47c-19.33,0-38.34,0-57.25,0c0,46.02,0,91.57,0,137.13
                                c13.66,0,26.89,0,40.71,0c0-32.29,0-64.18,0-96.68c5.83,0,11.07,0,16.54,0C828.68,413.08,828.68,399.85,828.68,386.47z
                                M1085.92,399.6c-9.64-42.81-51.91-82.56-89.54-84.71c-4.08,21.13-8.16,42.26-12.22,63.33c24.83,10.54,24.83,10.54,38.11,36.36
                                C1043.35,409.61,1064.5,404.64,1085.92,399.6z M1075.22,690.64c3.76,0.31,6.97,0.57,10.23,0.84c0.42,2.8,0.75,5.02,1.07,7.13
                                c25.3,0,50.18,0,75.12,0c0.29-2.3,0.54-4.22,0.81-6.35c3.52-0.19,6.77-0.36,10.25-0.54c0-13.63,0-26.85,0-40.29
                                c-32.64,0-64.96,0-97.47,0C1075.22,664.63,1075.22,677.4,1075.22,690.64z M782.34,697.64c25.4,0,50.29,0,75.24,0
                                c0.35-2.56,0.66-4.79,1-7.31c3.65-0.23,6.86-0.44,10.01-0.64c0-13.13,0-25.68,0-38.34c-32.61,0-64.82,0-97.28,0
                                c0,13.24,0,26.12,0,39.32c3.65,0.24,7.03,0.46,10.37,0.68C781.93,693.68,782.12,695.48,782.34,697.64z M914.4,326.47
                                c9.05,15.22,18.14,30.5,27.78,46.71c13.02-8.55,27.29-7.29,41.34-7.18c3.43-17.89,6.74-35.19,10.06-52.53
                                C965.9,311.3,938.73,309.45,914.4,326.47z M1071.72,443.41c-25.83,0-51.02,0-76.36,0c0,13.62,0,26.83,0,40.13
                                c25.68,0,50.99,0,76.36,0C1071.72,469.98,1071.72,456.88,1071.72,443.41z M825.67,624.78c0-19.08,0-37.63,0-56.32
                                c-18.33,0-36.33,0-54.25,0c0,19.01,0,37.56,0,56.32C789.6,624.78,807.36,624.78,825.67,624.78z M1172.63,624.76
                                c0-19.14,0-37.69,0-56.43c-18.25,0-36.14,0-54.17,0c0,19,0,37.66,0,56.43C1136.69,624.76,1154.45,624.76,1172.63,624.76z
                                M1128.53,511.12c0-29.79,0-58.8,0-87.75c-7.3-0.75-8.18-0.67-10.39,0.47c0,21.17,0,41.9,0,63.26c-5.79,0-11.69,0-17.86,0
                                c0,12.38,0,24.14,0,35.99c1.23,0.67,2.46,1.34,4.05,2.2c0,26.81,0,53.55,0,80.32c3.74,0,6.97,0,10.79,0c0-31.61,0-62.84,0-94.49
                                C1119.82,511.12,1123.93,511.12,1128.53,511.12z M771.32,527.23c0,12.7,0,24.92,0,37.32c18.32,0,36.31,0,54.28,0
                                c0-12.67,0-24.88,0-37.32C807.43,527.23,789.67,527.23,771.32,527.23z M814.27,647.52c18.41,0,36.41,0,54.28,0
                                c0-13.04,0-25.6,0-38.11c-13.34,0-26.23,0-39.72,0c0,6.31,0,12.21,0,18.7c-5.16,0-9.74,0-14.56,0
                                C814.27,634.83,814.27,640.94,814.27,647.52z M1128.74,627.94c-4.68,0-8.92,0-13.92,0c0-6.61,0-12.64,0-18.49
                                c-13.68,0-26.56,0-39.4,0c0,13.01,0,25.56,0,38.15c17.97,0,35.52,0,53.32,0C1128.74,641.1,1128.74,635,1128.74,627.94z
                                M953.41,443.31c0,13.81,0,27.03,0,40.32c12.96,0,25.51,0,38.27,0c0-13.58,0-26.79,0-40.32
                                C978.81,443.31,966.26,443.31,953.41,443.31z M949.53,483.75c0-13.77,0-27.1,0-40.32c-12.69,0-24.91,0-37.14,0
                                c0,13.65,0,26.86,0,40.32C924.86,483.75,936.96,483.75,949.53,483.75z M908.76,443.38c-12.15,0-23.7,0-35.43,0
                                c0,13.59,0,26.8,0,40.16c12,0,23.67,0,35.43,0C908.76,469.97,908.76,456.88,908.76,443.38z M1100.15,440.3c0,9.03,0,17.59,0,26.34
                                c5.53,0,10.42,0,15.52,0c0-7.59,0-14.82,0-22.2c-3.39-0.36-6.47-0.69-9.55-1.01c-0.01-0.59-0.02-1.17-0.03-1.76
                                c3.19-0.4,6.37-0.8,9.51-1.19c0-3.57,0-6.8,0-10.22c-3.65-0.19-6.91-0.36-10.42-0.54c-0.03-6.35,5.47-2.03,7.36-4.7
                                c0-6.67,0-13.68,0-20.57c-7.38,0-14.27,0-21.12,0c0,12.01,0,23.58,0,35.29C1094.26,439.92,1096.72,440.08,1100.15,440.3z
                                M843.41,567.31c0,13.16,0,25.71,0,38.32c8.63,0,16.85,0,25.26,0c0-12.92,0-25.46,0-38.32
                                C860.13,567.31,851.92,567.31,843.41,567.31z M1075.47,568.25c0,12.76,0,25.09,0,37.32c8.7,0,16.91,0,25.15,0
                                c0-12.65,0-24.86,0-37.32C1092.14,568.25,1084.04,568.25,1075.47,568.25z M843.47,527.26c0,12.42,0,24.42,0,36.32
                                c8.69,0,16.91,0,25.15,0c0-12.31,0-24.19,0-36.32C860.14,527.26,852.05,527.26,843.47,527.26z M1132.31,628.23
                                c0,6.69,0,12.91,0,19.33c13.64,0,26.97,0,40.28,0c0-6.66,0-12.88,0-19.33C1159.11,628.23,1146.02,628.23,1132.31,628.23z
                                M1141.27,481.51c10.48,0,20.92,0,31.32,0c0-8.31,0-16.2,0-24.15c-10.63,0-20.84,0-31.32,0
                                C1141.27,465.33,1141.27,472.93,1141.27,481.51z M810.68,628.44c-13.32,0-26.31,0-39.27,0c0,6.67,0,12.89,0,19.2
                                c13.29,0,26.16,0,39.27,0C810.68,641.07,810.68,634.85,810.68,628.44z M1021.11,426.66c-1.54-6.47-2.97-12.48-4.33-18.22
                                c-11.28,0-21.84,0-32.36,0c0,6.34,0,12.24,0,18.22C996.74,426.66,1008.65,426.66,1021.11,426.66z M1096.53,473.74
                                c0-10.42,0-20.42,0-30.32c-7.03,0-13.58,0-20.16,0c0,10.31,0,20.19,0,30.32C1083.19,473.74,1089.62,473.74,1096.53,473.74z
                                M1075.25,564.53c8.76,0,17.09,0,25.32,0c0-8.03,0-15.58,0-23.15c-8.65,0-16.86,0-25.32,0
                                C1075.25,549.19,1075.25,556.62,1075.25,564.53z M1130.77,364.35c-11.13,0-21.67,0-32.46,0c0,5.24,0,10.12,0,15.21
                                c10.98,0,21.64,0,32.46,0C1130.77,374.35,1130.77,369.58,1130.77,364.35z M980.36,384.76c0.81-5.35,1.55-10.29,2.33-15.46
                                c-13.54-0.77-26.65-1.32-38.82,6.39c1.16,2.19,2.2,4.18,3.29,6.24c5.19-1.52,9.32-5.16,15.29-4.45c0.33,2.41,0.65,4.75,1,7.28
                                C969.18,384.76,974.61,384.76,980.36,384.76z M1096.66,504.79c0-6.11,0-11.66,0-17.32c-7.35,0-14.35,0-21.23,0
                                c0,6.03,0,11.58,0,17.32C1082.62,504.79,1089.38,504.79,1096.66,504.79z M846.44,507.3c0,5.88,0,11.1,0,16.3
                                c7.66,0,14.87,0,22.21,0c0-5.61,0-10.83,0-16.3C861.08,507.3,853.87,507.3,846.44,507.3z M869.6,458.74c0-5.5,0-10.39,0-15.39
                                c-7.61,0-14.82,0-22.12,0c0,5.36,0,10.36,0,15.39C855.07,458.74,862.16,458.74,869.6,458.74z M941.34,408.21
                                c0,6.45,0,12.33,0,18.31c6.35,0,12.35,0,18.23,0c0-6.36,0-12.24,0-18.31C953.38,408.21,947.61,408.21,941.34,408.21z
                                M1096.62,523.76c0-5.48,0-10.36,0-15.43c-7.26,0-14.13,0-21.16,0c0,5.34,0,10.34,0,15.43
                                C1082.69,523.76,1089.45,523.76,1096.62,523.76z M868.65,503.78c0-5.12,0-9.67,0-14.3c-7.69,0-15.02,0-22.21,0
                                c0,5.04,0,9.59,0,14.3C853.97,503.78,861.07,503.78,868.65,503.78z M869.66,474.79c0-4.44,0-8.33,0-12.33c-7.68,0-15.01,0-22.23,0
                                c0,4.36,0,8.25,0,12.33C854.95,474.79,862.05,474.79,869.66,474.79z M1114.76,477.3c-13,0-25.53,0-38.25,0c0,2.31,0,4.31,0,6.31
                                c12.98,0,25.51,0,38.25,0C1114.76,481.45,1114.76,479.67,1114.76,477.3z M1098.48,383.27c0,5.82,0,11.6,0,17.32
                                c4.98,0,9.53,0,14.15,0c0-5.97,0-11.51,0-17.32C1108,383.27,1103.73,383.27,1098.48,383.27z M1100.69,536.74c0-3.33,0-6.21,0-9.31
                                c-8.64,0-16.97,0-25.29,0c0,3.32,0,6.2,0,9.31C1083.89,536.74,1091.97,536.74,1100.69,536.74z M869.65,478.28
                                c-14.21,0-28.09,0-42.2,0c0,1.96,0,3.64,0,5.35c14.31,0,28.19,0,42.2,0C869.65,481.7,869.65,480.13,869.65,478.28z M937.69,409.26
                                c-3.54,0-6.78,0-10.28,0c-2.35,5.55-4.5,11.09-4.1,17.37c5.08,0,9.63,0,14.38,0C937.69,420.7,937.69,415.14,937.69,409.26z
                                M998.78,392.35c-5.12,0-9.67,0-14.3,0c0,4.36,0,8.36,0,12.22c5.04,0,9.59,0,14.3,0C998.78,400.36,998.78,396.59,998.78,392.35z
                                M959.75,393.47c-5.1,0-9.77,0-14.32,0c0,4.03,0,7.58,0,11.15c4.98,0,9.53,0,14.32,0C959.75,400.81,959.75,397.37,959.75,393.47z
                                M1002.41,404.51c3.98,0,8.07,0,12.55,0c-2.27-6.53-6.68-10.31-12.55-14.31C1002.41,395.42,1002.41,399.48,1002.41,404.51z
                                M941.52,404.69c0-5.22,0-9.75,0-15.3c-5.66,4.64-9.19,9.54-12.21,15.3C933.77,404.69,937.54,404.69,941.52,404.69z M959.66,389.73
                                c0-3.15,0-5.72,0-8.86c-6.12,1.17-10.6,3.96-15.35,8.86C950.18,389.73,954.72,389.73,959.66,389.73z M827.42,470.17
                                c0,1.64,0,2.98,0,4.51c5.55,0,10.77,0,16.47,0c-0.12-1.69-0.22-3.03-0.33-4.51C838.11,470.17,833.15,470.17,827.42,470.17z
                                M984.36,381.54c0,2.89,0,4.9,0,6.97c4.94,0,9.55,0,16.62,0C994.12,385.63,989.55,383.71,984.36,381.54z M1117.49,470.33
                                c-7.54,0-12.76,0-17.97,0c-1.2,4.43,1.92,3.86,3.94,3.58C1107.59,473.34,1112.66,475.96,1117.49,470.33z"/>
                            <path style="fill:#2C2C2C;" d="M1165.1,588.91"/>
                        </g>
                        <text id="3.23" class="Workshop__Btn" transform="matrix(1 0 0 1 1133.7871 407.4041)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.23</text>
                        <text id="3.26" class="Workshop__Btn" transform="matrix(1 0 0 1 1138.8936 540.681)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.26</text>
                        <text id="3.27" class="Workshop__Btn" transform="matrix(1 0 0 1 1136.8513 596.3406)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.27</text>
                        <text id="3.28" class="Workshop__Btn" transform="matrix(1 0 0 1 1108.7661 677.0217)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.28</text>
                        <text id="3.03" class="Workshop__Btn" transform="matrix(1 0 0 1 790.1274 415.5745)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.03</text>
                        <text id="3.04" class="Workshop__Btn" transform="matrix(1 0 0 1 781.9575 508.5108)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.04</text>
                        <text id="3.05" class="Workshop__Btn" transform="matrix(1 0 0 1 786.5533 550.8936)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.05</text>
                        <text id="3.06" class="Workshop__Btn" transform="matrix(1 0 0 1 785.0213 602.4677)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.06</text>
                        <text id="3.08" class="Workshop__Btn" transform="matrix(1 0 0 1 809.532 675.4892)" style="font-family:'MyriadPro-Regular'; font-size:12px;">3.08</text>
                    </svg>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php $this->view("partials/footer"); ?>

        
        <!-- Javascripts -->
        <script src="../public/js/script.js"></script>
        <!-- Icon Javascripts -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>