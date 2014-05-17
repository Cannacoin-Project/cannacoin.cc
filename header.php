  <!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Cannacoin.cc | The future of the Cannabis industry.</title>
    <!-- Animate core CSS -->   
    <link rel="stylesheet" href="http://cannacoin.cc/css/animate.css">
    <!-- Twitter Bootstrap core CSS -->
    <link href='http://cannacoin.cc/bootstrap/css/bootstrap.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
      
    <!-- Custom styles for this template -->
    <link href='css/carousel.css' rel='stylesheet'>
    <link href='css/sticky-footer.css' rel='stylesheet'>
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
  </head>
  <!-- Navbar -->
  <body>
    <?php
		// Swisscex.com market data
		setlocale(LC_MONETARY, 'en_US');
		$supply = file_get_contents('http://cannacoin.cc:2750/chain/Cannacoin/q/totalbc');
		$blockchain = file_get_contents('https://blockchain.info/ticker');
		$json_blockchain = json_decode($blockchain);
		$btcprice = $json_blockchain->USD->last;
		$json_string = file_get_contents('ENTERSWISSCEXAPIHERE');
		$json_decode = json_decode($json_string);
		$ask = sprintf('%.8f', $json_decode->quote->askPrice);
		$bid = sprintf('%.8f', $json_decode->quote->bidPrice);
		$marketcap = $supply*$ask*$btcprice;
    ?>
  <div class='navbar-wrapper'>
      <div class='container'>
	<div class='col-sm-4 pull-right'>
	  <form class='form-inline' action='http://cannacoin.cc:2750/../search'><p>
	    <div class='input-group'><input placeholder="Enter an address, block number, hash or transaction" type='text' class='form-control' name='q' size='64' value='', escape(q), '' />
	      <span class='input-group-btn'><button class='btn btn-success' type='submit'>Search</button></span>
	    </div>
	  </form>
	</div>
      </div>
      <div class='container'>
	<div class='navbar navbar-inverse navbar-static-top'>
	    <div class='container'>
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	      </button>
	    <a class='navbar-brand' href='http://cannacoin.cc/index.php' data-toggle='collapse' data-target='navbar-toggle'>CANNACOIN</a>
	      <div class="nav-collapse collapse">
	      <ul class='nav navbar-nav'>
		<li><a href='https://bitcointalk.org/index.php?topic=482425.0'>News</a></li>
		<li><a href='http://cannacoin.cc/clients.php'>Download</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exchange <b class="caret"></b></a>
		    <ul class="dropdown-menu">
		      <li><a href="https://swisscex.com/market/CCN_BTC">Swisscex.com</a></li>
		      <li><a href="https://mintpal.com/voting">Mintpal.com (Vote to add!)</a></li>
		    </ul>
		</li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
		  <ul class="dropdown-menu">
		    <li><a href='http://cannacoin.cc/explorer'>Block Explorer</a></li>
		    <li><a href='http://cannacoin.cc/paperwallet'>Paper Wallets</a></li>
		    <li><a href='http://cannacoin.cc/faucet'>Faucet</a></li>
		    <li><a href=' http://sillypothead.com/ccnfaucet/'>Sillypothead's Faucet</a></li>
		   
		  </ul>
		</li>
		<li class='dropdown'>
		  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Pools<b class='caret'></b></a>
		  <ul class='dropdown-menu'>
		    <li><a href='http://ccn.suremine.com' target='_new'>Suremine</a></li>
		    <li><a href='http://ccn.youngwebsolutions.com' target='_new'>Youngwebsolutions</a></li>
		    <li><a href='http://cnn.mine-coin.de' target='_new'>Mine-Coin.de</a></li>
		    <li><a href='http://ccn.obfuscode.net/' target='_new'>Obfuscode.net</a></li>
		    <li><a href='http://rejectmining.com/' target='_new'>Rejectmining.com</a></li>
		    <li class="divider"></li>
		    <li class="dropdown-header">P2P Pools</li>
		    <li><a href='coming...soon...'target='_new'>Coming soon...</a></li>
		  </ul>
		</li>
		<li class='dropdown'>
		  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Social<b class='caret'></b></a>
		  <ul class='dropdown-menu'>
		    <li><a href='http://reddit.com/r/cannacoin' target='_new'>/r/Cannacoin</a></li>
		    <li><a href='http://twitter.com/CCNProject' target='_new'>@CCNProject</a></li>
		    <li><a href='https://kiwiirc.com/client/irc.freenode.net/cannacoin/' target='_blank' onclick='window.open(this.href,this.target,'height=500, width=800');return false;'>IRC Chat</a></li>
		  </ul>
		</li>
	      </ul>
	  </div>
	      
	</div>
      </div>
    </div>
  </div>
