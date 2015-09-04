<div class="inno">
	<h2 class="text-center"><?php echo $contents['stat']['head1'] ?></h2>	
	<div class="stat-pic">
		 <div  >
          	<div id="circle-1" class="circle-graph circle-old" 
          		data-dimension="105" 
          		data-text="<?=$graph['0']['head']?>" 
          		data-info="<?=$graph['0']['detail']?>" 
          		data-width="15" 
          		data-fontsize="20" 
          		data-percent="40" 
          		data-fgcolor="#F63B55" 
          		data-bgcolor="#eee" 
          		data-fill="#ddd" 
          		data-total="<?=$graph['0']['totalValue']?>" 
                    data-part="<?=$graph['0']['value']?>"></div>
          	<div id="circle-1" class="circle-graph circle-old" 
          		data-dimension="105" 
          		data-text="<?=$graph['1']['head']?>" 
          		data-info="<?=$graph['1']['detail']?>" 
          		data-width="15" 
          		data-fontsize="20" 
          		data-percent="40" 
          		data-fgcolor="#6891EF" 
          		data-bgcolor="#eee" 
          		data-fill="#ddd" 
          		data-total="<?=$graph['1']['totalValue']?>" data-part="<?=$graph['1']['value']?>"></div>
          		<div class="text-center"><h4 class="text-center"><strong>Power</strong></h4>	</div>
        </div>
        <div  >
          	<div id="circle-1" class="circle-graph circle-old" 
          		data-dimension="105" 
          		data-text="<?=$graph['2']['head']?>" 
          		data-info="<?=$graph['2']['detail']?>" 
          		data-width="15" 
          		data-fontsize="20" 
          		data-percent="40" 
          		data-fgcolor="#F63B55" 
          		data-bgcolor="#eee" 
          		data-fill="#ddd" 
          		data-total="<?=$graph['2']['totalValue']?>" data-part="<?=$graph['2']['value']?>"></div>
          	<div id="circle-1" class="circle-graph circle-old" 
          		data-dimension="105" 
          		data-text="<?=$graph['3']['head']?>" 
          		data-info="<?=$graph['3']['detail']?>" 
          		data-width="15" 
          		data-fontsize="20" 
          		data-percent="40" 
          		data-fgcolor="#6891EF" 
          		data-bgcolor="#eee" 
          		data-fill="#ddd" 
          		data-total="<?=$graph['3']['totalValue']?>" data-part="<?=$graph['3']['value']?>"></div>
          	<h4 class="text-center"><strong>PayBack</strong></h4>	
        </div>
        <div  >
          	<div id="circle-1" class="circle-graph circle-old" 
          		data-dimension="105" 
          		data-text="<?=$graph['4']['head']?>" 
          		data-info="<?=$graph['4']['detail']?>" 
          		data-width="15" 
          		data-fontsize="20" 
          		data-percent="40" 
          		data-fgcolor="#F63B55" 
          		data-bgcolor="#eee" 
          		data-fill="#ddd" 
          		data-total="<?=$graph['4']['totalValue']?>" data-part="<?=$graph['4']['value']?>"></div>
          	<div id="circle-1" class="circle-graph circle-old" 
          		data-dimension="105" 
          		data-text="<?=$graph['5']['head']?>" 
          		data-info="<?=$graph['5']['detail']?>" 
          		data-width="15" 
          		data-fontsize="20" 
          		data-percent="40" 
          		data-fgcolor="#6891EF" 
          		data-bgcolor="#eee" 
          		data-fill="#ddd" 
          		data-total="<?=$graph['5']['totalValue']?>" data-part="<?=$graph['5']['value']?>"></div>
          	<h4 class="text-center"><strong>Prize</strong></h4>	
        </div>
	</div>
	<div class="inno-detail text-right clear">
		<h2><?php echo $contents['stat']['head2'] ?></h2>
		<div class="inno-detail-text text-left">
		<p class="text-right">
			<?php echo $contents['stat']['content'] ?>
		</p>
		</div>
	</div>
</div>
<div class="map">
	
</div>