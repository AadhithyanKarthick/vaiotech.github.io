<?php
include 'db_conn.php';

//Trigger Active class in sidebar
if ($_GET['page']='dash') {
    $bread="Dashboard";
}elseif($_GET['page']='sale'){
    $bread="Sales";
}elseif ($_GET['page']='purchase') {
    $bread="Purchase";
}elseif ($_GET['page']='stock') {
    $bread="Stock";
}elseif ($_GET['page']='invoice') {
    $bread="Invoice";
}elseif ($_GET['ledger']='ledger') {
    $bread="Ledgers";
}elseif ($_GET['page']='bill') {
    $bread="Generate Bill";
}elseif ($_GET['page']='user') {
    $bread="User";
}
else{
    echo "Navbar status failed";
}

?>
<style type="text/css">
#searchbr{
border-radius: 1px;
border:none;
height: 30px;
margin-top: 9px;
position: relative;
}
#searchbr:hover{
    border-bottom: 1px solid red;
}
</style>
<!-- <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #7fb42c;"> -->
<nav class="navbar navbar-default navbar-fixed-top" style="height: 30px;margin-bottom: -90px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="logo">
                        <a href="#" class="simple-text">
                        <img src="assets/img/logo.png" width="50px" height="50px">
                             <b>VA Tech<b>
                        </a>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <!-- <a class="navbar-brand" href="#" style="color:white;"><center>
                <img src="assets/img/icon.png" class="img-responsive" style="height: 60px;width: 60px;"></center></a> -->
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <input type="search" name="search" placeholder="search" id="searchbr" style="margin-left: 100px;"><i class="fa fa-search"></i>
                        </li>
                        <li>
                            <a href="#" style="color: black;font-size: 12px;margin-left: 100px;position: relative;">
                              My Company Name
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="" style="color:black;">
                               <p><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>AV T</p>
                            </a>
                        </li>

                        
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>