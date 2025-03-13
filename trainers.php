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
<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Our Trainers</h2>
      </div>
      <!-- teacher -->
      <?php
		$query=select("tbl_teacher_info","*","fld_teacher_id!=0","");
			$numRow=numrow($query);
			if($numRow>0)
			{
				while($rs_query=fetch($query)){
				?>
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="admin/images/teachers/<?php echo $rs_query['fld_image']; ?>" alt="trainers" height="400">
          <div class="card-body">
            <a href="#">
              <h4 class="card-title"><?php echo custom_echo($rs_query['fld_designation'],200); ?></h4>
            </a>
            <p style="margin-bottom:0px;"><?php echo custom_echo($rs_query['fld_name'],200); ?></p>
            <p><i style="font-size:10px;"><?php echo custom_echo($rs_query['fld_qualification'],200); ?></i></p>
            <!--<ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i class="ti-linkedin"></i></a></li>
            </ul>-->
          </div>
        </div>
      </div>
      <?php 
	  }
	  }?>
      <!-- teacher -->
      <?php /*?><div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="admin/images/teachers/<?php echo $rs_query['fld_image']; ?>" alt="teacher">
          <div class="card-body">
            <a href="#">
              <h4 class="card-title"><?php echo custom_echo($rs_query['fld_designation'],200); ?></h4>
            </a>
            <p><?php echo custom_echo($rs_query['fld_name'],200); ?></p>
            <p><?php echo custom_echo($rs_query['fld_qualification'],200); ?></p>
            <!--<ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i class="ti-linkedin"></i></a></li>
            </ul>-->
          </div>
        </div>
      </div><?php */?>
      <!-- teacher -->
      <?php /*?><div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
          <div class="card-body">
            <a href="#">
              <h4 class="card-title">John Doe</h4>
            </a>
            <p>Teacher</p>
            <!--<ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i class="ti-linkedin"></i></a></li>
            </ul>-->
          </div>
        </div>
      </div><?php */?>
    </div>
  </div>
</section>
<!-- /teachers -->