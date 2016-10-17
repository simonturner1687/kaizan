<?php
include 'model/m_events.php';





function display_lotto($ball_1, $ball_2, $ball_3, $ball_4, $ball_5, $ball_6)
{
	if (!isset($_POST['lotto']))
    {
	   echo '
        <span class="sep"></span>

	    <section id="section-two">
	        <h2>
	            <strong>Enter your lucky numbers</strong>
	        </h2>
		   <form id="lotto" action="index.php" method="post" novalidate="novalidate">
			    <ul class="list-inline numbers clearfix">
			        <li>
			            <input type="number" class="form-control tooltipstered" name="ball_1" aria-required="true">
			        </li>
			        <li>
			            <input type="number" class="form-control tooltipstered" name="ball_2" aria-required="true">
			        </li>
			        <li>
			            <input type="number" class="form-control tooltipstered" name="ball_3" aria-required="true">
			        </li>
			        <li>
			            <input type="number" class="form-control tooltipstered" name="ball_4" aria-required="true">
			        </li>
			        <li>
			            <input type="number" class="form-control tooltipstered" name="ball_5" aria-required="true">
			        </li>
			        <li>
			            <input type="number" class="form-control tooltipstered" name="ball_6" aria-required="true">
			        </li>
			    </ul>
			    <button type="submit" class="btn btn-primary" name="lotto">Show me the money</button>
			</form>';
    }	
    else
    {  

    $Lotto = new Lotto();
    $lotto = $Lotto->get_lotto_numbers($ball_1, $ball_2, $ball_3, $ball_4, $ball_5, $ball_6); 

    $item = '';

    foreach ($lotto as $win)
	{
		$item .= $win['jackpot'].',';
	}
	
	$total = array_sum(explode( ',',$item));

    
    	if(empty($lotto))
    	{
    		echo'
    		<section id="section-three">
    			<h2><strong>Your lucky numbers are</strong></h2>
    			<ul class="list-inline numbers lucky-numbers clearfix">
    				<li>
    					<input type="text" class="form-control" value="'.$ball_1.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="2'.$ball_2.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_3.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_4.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_5.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_6.'" readonly="">
    				</li>
    			</ul>
    		</section>
           <span class="sep"></span>       
            <section id="section-five">
            	<h2><strong>Results</strong></h2>
            	<img src="img/no.png"></img>
            		<div class="row">
                		<div class="col-sm-9 col-centered prize-money">
                    		<p>YOU WOULD HAVE WON</p>
                    		<h1>£0</h1>
                    		<p>BUT DON\'T WORRY, YOU\'RE NOT ALONE!</p>
                		</div>
            		</div>
        	</section>
        	<span class="sep"></span>';
    	}
    	else
    	{
    	    echo'
    		<section id="section-three">
    			<h2><strong>Your lucky numbers are</strong></h2>
    			<ul class="list-inline numbers lucky-numbers clearfix">
    				<li>
    					<input type="text" class="form-control" value="'.$ball_1.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="2'.$ball_2.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_3.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_4.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_5.'" readonly="">
    				</li>
    				<li>
    					<input type="text" class="form-control" value="'.$ball_6.'" readonly="">
    				</li>
    			</ul>
    		</section>
           <span class="sep"></span>       
            <section id="section-five">
            	<h2><strong>Results</strong></h2>
            	<img src="img/yes.png"></img>
                		<div class="col-sm-9 col-centered">
                    		<p>YOU WOULD HAVE WON</p>
                    		<div id="prize-money">
                    		<h1>&pound; '.number_format($total).'</h1>	
                    		</div>
					  		<div class="table">
                    		<table class="col-centered" style="width: 250px;">
							    <tr>
							      <th>Date</th>
							      <th>Amount</th>
							    </tr>';

		                    		foreach ($lotto as $result)
		                    		{
									    echo '
									    <tr>
									      <td>'.$result['Draw date'].'</td>
									      <td>&pound;'.number_format($result['jackpot']).'</td>
									    </tr>';
		                    		};

								echo '
							</table>
							</div>
                		</div>
                		</section>

        	</section>';
        }
    }
}
