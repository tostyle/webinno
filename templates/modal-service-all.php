<?php for ($serviceNo =1; $serviceNo  <= $totalService; $serviceNo ++) :
  $normalPic = $contents['modalService']['service'.$serviceNo]['service'.$serviceNo.'-normal'];
  $hoverPic  = $contents['modalService']['service'.$serviceNo]['service'.$serviceNo.'-over'];
?>
<div id="modal-service-<?=$serviceNo?>" class="modal" role="dialog">
  <div class="modal-dialog modal-lg modal-background">
  <div class="modal-content modal-award">
      <div style="position:relative">
         <a class="boxclose box-award" id="boxclose" data-dismiss="modal"></a>
         <div id="carousel-generic-service-<?=$serviceNo?>" class="carousel carousel-service4 slide" data-ride="carousel">
         
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img src="<?=$normalPic?>" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div>
            <div class="item">
               <img src="<?=$hoverPic?>" alt="...">
              <div class="carousel-caption">
                ...
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control modal-slider-control" href="#carousel-generic-service-<?=$serviceNo?>" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control modal-slider-control" href="#carousel-generic-service-<?=$serviceNo?>" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
      </div>
  </div>
</div>
<?php endfor;?>