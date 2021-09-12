<?php
  include_once 'header.php';

 ?>

 <button class="btn btn-primary"  type="button" disabled>
   <span class="spinner-border spinner-border-lg" id="loadbutton" role="status" aria-hidden="true"></span>

 </button>

      <button id="loginb" onclick='document.getElementById("loginb").classList.add("spinner-grow"); document.getElementById("loginb").innerHTML = "";' class="w-10 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>


       <script type="text/javascript">
           function onLogin(){
             document.getElementById("loginb").innerText = ' <button class="btn btn-primary"  type="button" disabled>
                <span class="spinner-border spinner-border-lg" id="loadbutton" role="status" aria-hidden="true"></span>

              </button>';
           }
       </script>
