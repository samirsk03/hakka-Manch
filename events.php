<?PHP
	function custom_echo($x, $length)
	{
	  if(strlen($x)<=$length)
	  {
		echo $x;
	  }
	  else
	  {
		$y=substr($x,0,$length) . '...';
		echo $y;
	  }
	}
?>
<!-- courses -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- event -->
      <?php
		$query=select("tbl_highlights_master","*","fld_highlights_id!=0","");
		    $numRow=numrow($query);
		    if($numRow>0)
		    {
		        while($rs_query=fetch($query)){
				?>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="admin/images/highlights_img/<?php echo $rs_query['fld_image']; ?>" alt="event thumb" height="300">
            <!--<div class="card-date"><?php echo $rs_query['fld_postdate']; ?></div>-->
          </div>
          <div class="card-body">
            <!-- location -->
            <h4 class="card-title"><?php echo custom_echo($rs_query['fld_title'],100); ?></h4>
              <p><i class="ti-location-pin text-primary mr-2"></i><?php echo custom_echo($rs_query['fld_description'],300); ?></p>
          </div>
        </div>
      </div>
  <?php 
  }
  }?>
<?php /*?>      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-2.jpg" alt="event thumb">
            <div class="card-date"><span>21</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-3.jpg" alt="event thumb">
            <div class="card-date"><span>23</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
            <div class="card-date"><span>18</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-2.jpg" alt="event thumb">
            <div class="card-date"><span>21</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/events/event-3.jpg" alt="event thumb">
            <div class="card-date"><span>23</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
            <a href="event-single.html">
              <h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4>
            </a>
          </div>
        </div>
      </div><?php */?>
    </div>
  </div>
</section>
<!-- /courses -->
