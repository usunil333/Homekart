    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><img src="logo.jpg">HomeKart</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="../ADS/index.php">CRM</a></li>
            <li ><a href="../AS/index.php" >ASSET</a></li>
            <li class="active"><a href="index.php">ONLINE ORDERING</a></li>
              <li class="" ><a href="orders.php" >Orders</a></li>
			 <li><a href="reports.php">Reports</a></li>
             <li class="" ><a href="view_order_notif.php" >
              <img src='ico.png' width="23" height="23" title="Notifications">
              <span class="badge badge-info">
                     <?php include('query_notif.php');?>
              </span></a></li>
             <li><a href="../index.php">Back</a></li>
          </ul>