<!DOCTYPE html>
<?php include 'header.php'; ?>
<!-- Carousel ================================================== -->

    <div id='myCarousel' class='carousel slide'>
      <!-- Indicators -->
      <ol class='carousel-indicators'>
        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
        <li data-target='#myCarousel' data-slide-to='1'></li>
        <li data-target='#myCarousel' data-slide-to='2'></li>
      </ol>
      <br>
      <div class='carousel-inner'>
        <div class='item'>
          <img src='images/banner.png' alt=''>
          <div class='container'>
            <div class='carousel-caption'>
              <div align='center'>
		<h2>VOTE TO ADD CANNACOIN TO MINTPAL.COM EXCHANGE!</h2><a class='btn btn-sm btn-success' href='http://mintpal.com/voting' target="_new">VOTE TODAY!</a>
		<br><br>
		<a class='btn btn-sm btn-default' href='http://swisscex.com/market/CCN_BTC'>
		<?php
		echo '1 CCN = $'.sprintf('%.6f', 1*$ask*$btcprice).'<br>';
		echo '<b>Asking Price: </b>'.$ask.' BTC';
		echo '<br><b>Bid Price: </b>'.$bid.' BTC';
		echo '<br><b>Market Cap: </b>'.money_format('%n', $marketcap); 
		?>
		</a>
		<br>
		<br></div>
             </div>
          </div>
        </div>
        <div class='item active'>
          <img src='images/header2.png' alt=''>
          <div class='container'>
            <div class='carousel-caption'>
              <h1 class='animated bounceInDown'>A revolutionary currency for the Medical Marijuana Industry</h1>
              <p>Keep large sums of fiat currency physically out of the equation and make digital payments safe, secure and irreversable. A perfect transactional currency for your POS, retail or your e-commerce needs.</p>
              <!-- <p><a class='btn btn-large btn-primary' href='#'>Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class='item'>
          <img src='images/header3.png' alt=''>
          <div class='container'>
            <div class='carousel-caption'>
              <h1>Help fund Cannabis Research</h1>
              <p>While it's known that THC, CBD, CBN and other cannabinoids help fight cancer and other dieseases, it still is not being being widely researched in the US. Use Cannacoins and create crowd funded projects for Cannabis science and research...</p>
              <!-- <p><a class='btn btn-large btn-primary' href='#'>Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class='left carousel-control' href='#myCarousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
      <a class='right carousel-control' href='#myCarousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
    </div><!-- /.carousel -->
    <!-- Marketing messaging and featurettes -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class='container marketing'>
      <!-- Three columns of text below the carousel -->
      <div class='row'>
        <div class='col-lg-4'>
          <img class='img-circle' src='images/p2p-network.png'>
          <h2>Peer-To-Peer</h2>
          <p>Cannacoin uses peer-to-peer (P2P) technology to operate with no central authority or banks; managing transactions and the issuing of Cannacoins is carried out collectively by a network of peers. </p>
          <!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class='col-lg-4'>
          <img class='img-circle' src='images/cannacoin-coin.png'>
          <h2>Details</h2>
          <p><div align='left'></div>
          <b>Launched:</b> March 28, 2014<br>
	  <b>Algorithm:</b> Scrypt<br>
	  <b>Block Time:</b> 1 minutes<br>
	  <b>Block Reward:</b> 12.5 Cannacoins<br>
	  <b>Reward Halving:</b> Every 525,600 (~1 years)<br>
	  <b>Difficulty Retargeting:</b> Kimoto's Gravity Well.<br>
	  <b>Total Supply:</b> 13,140,000 Cannacoins.<br>
	  <?php
	  require_once 'network/jsonRPCClient.php';
	  require_once 'network/connect.php';
	  echo '<b>Current Block:</b> ';print_r($bitcoin->getblockcount()); echo '<br>';
	  echo '<b>Network Hashrate:</b> '; print_r($bitcoin->getnetworkhashps()); echo '<br>';
	  echo '<b>Current Difficulty:</b> ';print_r($bitcoin->getdifficulty()); echo '<br>';
	  echo '<b>Current Supply:</b> ';print_r($bitcoin->getblockcount()*12.5); echo '<br>';
	  ?>
	  </p>
          <!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class='col-lg-4'>
          <a href='https://github.com/Cannacoin-Project/Cannacoin'><img src='images/open-source-logo.png'></a>
          <h2>Open Source</h2>
          <p>Cannacoin is open-source; its design is public, nobody owns or controls Cannacoin and everyone can take part. Through many of its unique properties, Cannacoin allows exciting uses that could not be covered by any previous payment system.</p>
          <!-- <p><a class='btn btn-default' href='#'>View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    <?php include('footer.php'); ?>
    </div>
