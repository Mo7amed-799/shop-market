<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stayle.css">
    <title>Document</title>
</head>
<body>
    
    <div id="container"> 
        <center>
        <img src="Tiqmo.jpg" alt="ecommerce" width="450px" >
        <form action="insert.php" method="post" enctype="multipart/form-data">
            
            <input type="text" id="pro_name" name="pro_name">
            <label for="pro_name" style="color: white;font-weight: 800;">اسم المنتج</label><br>
            <input type="text" id="pro_price" name="pro_price">
            <label for="pro_price" style="color: white;font-weight: 800;">سعرالمنتج</label><br>
            <label for="file" class="Documents-btn">
                <span class="folderContainer">
    <svg
      class="fileBack"
      width="146"
      height="113"
      viewBox="0 0 146 113"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M0 4C0 1.79086 1.79086 0 4 0H50.3802C51.8285 0 53.2056 0.627965 54.1553 1.72142L64.3303 13.4371C65.2799 14.5306 66.657 15.1585 68.1053 15.1585H141.509C143.718 15.1585 145.509 16.9494 145.509 19.1585V109C145.509 111.209 143.718 113 141.509 113H3.99999C1.79085 113 0 111.209 0 109V4Z"
        fill="url(#paint0_linear_117_4)"
      ></path>
      <defs>
        <linearGradient
          id="paint0_linear_117_4"
          x1="0"
          y1="0"
          x2="72.93"
          y2="95.4804"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#8F88C2"></stop>
          <stop offset="1" stop-color="#5C52A2"></stop>
        </linearGradient>
      </defs>
    </svg>
    <svg
      class="filePage"
      width="88"
      height="99"
      viewBox="0 0 88 99"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <rect width="88" height="99" fill="url(#paint0_linear_117_6)"></rect>
      <defs>
        <linearGradient
          id="paint0_linear_117_6"
          x1="0"
          y1="0"
          x2="81"
          y2="160.5"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="white"></stop>
          <stop offset="1" stop-color="#686868"></stop>
        </linearGradient>
      </defs>
    </svg>

    <svg
      class="fileFront"
      width="160"
      height="79"
      viewBox="0 0 160 79"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M0.29306 12.2478C0.133905 9.38186 2.41499 6.97059 5.28537 6.97059H30.419H58.1902C59.5751 6.97059 60.9288 6.55982 62.0802 5.79025L68.977 1.18034C70.1283 0.410771 71.482 0 72.8669 0H77H155.462C157.87 0 159.733 2.1129 159.43 4.50232L150.443 75.5023C150.19 77.5013 148.489 79 146.474 79H7.78403C5.66106 79 3.9079 77.3415 3.79019 75.2218L0.29306 12.2478Z"
        fill="url(#paint0_linear_117_5)"
      ></path>
      <defs>
        <linearGradient
          id="paint0_linear_117_5"
          x1="38.7619"
          y1="8.71323"
          x2="66.9106"
          y2="82.8317"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#C3BBFF"></stop>
          <stop offset="1" stop-color="#51469A"></stop>
        </linearGradient>
      </defs>
    </svg>
  </span>
  <p class="text">رفع صوره</p></label>
            <input type="file" name="image" id="file" style="display: none;">
          
<button  type="submit" name="upload">
  <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="24"
        height="24"
      >
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path
          fill="currentColor"
          d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
        ></path>
      </svg>
    </div>
  </div>
  <span> رفع المنتج </span>
</button>

        </form>
       <a href="products.php">عرض جميع المنتجات</a>
    </center></div>
    
   <script src="icon.js"></script>
   <script>
  feather.replace();
</script>
</body>
</html>
