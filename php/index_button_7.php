<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background: #e0e5ec;
  }
  h1 {
    position: relative;
    text-align: center;
    color: #353535;
    font-size: 50px;
    font-family: "Cormorant Garamond", serif;
  }
  
  p {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    text-align: center;
    font-size: 18px;
    color: #676767;
  }
  .frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  button {
    margin: 20px;
  }
  .custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
     box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
  }
  
  .btn-7 {
    background: linear-gradient(0deg, rgba(255,151,0,1) 0%, rgba(251,75,2,1) 100%);
      line-height: 42px;
      padding: 0;
      border: none;
    }
    .btn-7 span {
      position: relative;
      display: block;
      width: 100%;
      height: 100%;
    }
    .btn-7:before,
    .btn-7:after {
      position: absolute;
      content: "";
      right: 0;
      bottom: 0;
      background: rgba(251,75,2,1);
      box-shadow:
       -7px -7px 20px 0px rgba(255,255,255,.9),
       -4px -4px 5px 0px rgba(255,255,255,.9),
       7px 7px 20px 0px rgba(0,0,0,.2),
       4px 4px 5px 0px rgba(0,0,0,.3);
      transition: all 0.3s ease;
    }
    .btn-7:before{
       height: 0%;
       width: 2px;
    }
    .btn-7:after {
      width: 0%;
      height: 2px;
    }
    .btn-7:hover{
      color: rgba(251,75,2,1);
      background: transparent;
    }
    .btn-7:hover:before {
      height: 100%;
    }
    .btn-7:hover:after {
      width: 100%;
    }
    .btn-7 span:before,
    .btn-7 span:after {
      position: absolute;
      content: "";
      left: 0;
      top: 0;
      background: rgba(251,75,2,1);
      box-shadow:
       -7px -7px 20px 0px rgba(255,255,255,.9),
       -4px -4px 5px 0px rgba(255,255,255,.9),
       7px 7px 20px 0px rgba(0,0,0,.2),
       4px 4px 5px 0px rgba(0,0,0,.3);
      transition: all 0.3s ease;
    }
    .btn-7 span:before {
      width: 2px;
      height: 0%;
    }
    .btn-7 span:after {
      height: 2px;
      width: 0%;
    }
    .btn-7 span:hover:before {
      height: 100%;
    }
    .btn-7 span:hover:after {
      width: 100%;
    }
    </style>
</head>
<body>
     
     <div class="frame">
      <button class="custom-btn btn-7"><span>Read More</span></button>
     </div>
     

</body>
</html>