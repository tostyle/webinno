<div id="aboutUsModal" class="modal" role="dialog">
  <div class="modal-dialog modal-lg modal-background modal-aboutUs">
    <!-- Modal content-->
    <div class="modal-content">
    <a class="boxclose box-aboutUs" id="boxclose" data-dismiss="modal"></a>
         <div class="aboutUs-picture">
        <!--   -->
         	  <?php foreach ($contents['modalAboutUs']['mainContent'] as $key => $aboutUs):?>
                <img data-toggle="modal" href="#aboutUsDetailModal" class="team-detail" id="pic-0<?=$aboutUs['sequence']?>" src="<?=$aboutUs['detail']?>" alt="">
            <?php endforeach;?>
         </div>
    </div>
  </div>
</div>

<div id="aboutUsDetailModal" class="modal" role="dialog">
  <div class="modal-dialog modal-lg modal-background modal-aboutUs">
    <!-- Modal content-->
    <div class="modal-content aboutUs-detail-picture">
       
    </div>
  </div>
</div>