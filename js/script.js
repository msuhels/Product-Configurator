$(function(){
	var pic_X=$('.list').offset().left;
	var pic_Y=$('.list').offset().top;
	var pic_W=$('.list').width()/2;
	var pic_H=$('.list').height()/2;
	var center_X=pic_X+pic_W;
	var center_Y=pic_Y+pic_H;
	var movestop=pic_W/10;
	$('.list').mousemove(function(event){
		var mouse_X=event.pageX;
		var mouse_Y=event.pageY;
		if(mouse_X-center_X<=0){
			moveImg(mouse_X,mouse_Y,'left')
		}else{
			moveImg(mouse_X,mouse_Y)
		}
	});
	function moveImg(m_X,m_Y,dir){
		var index=Math.ceil(Math.abs(m_X-center_X)/movestop);
		if(dir){
			$('.list li').eq(index).show().siblings().hide();
		}else{
			$('.list li').eq(18-index).show().siblings().hide();
		}
	}
})

<script type="text/javascript">
$( document ).ready(function() {
	setTimeout(function(){
		hideloder();
		},4000);
});
	$(".court_checkbox").click(function(){ 
		$(".lodder").show();
		$(".mainCourtDiv").show();

		var dataValue = $(this).attr("dataValue");
		var dataClass = $(this).attr("dataClass");		
		var img_old_dataValue = $('.'+dataClass).attr("dataValue");
	    $('.'+dataClass).each(function(){ 
	    	var src =''; 
	    	var res = '';
			$(this).attr("dataValue", dataValue);
			src = $(this).attr("src");
			res = src.replace(img_old_dataValue, dataValue);
			$(this).attr("src", res);
		});
		hideloder();

	});

	function hideloder() {
			$(".lodder").hide();
			$(".mainCourtDiv").hide();
	}

</script>