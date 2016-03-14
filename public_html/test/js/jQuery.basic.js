;$(function(){

	$.fn.audio=function(x){
		//$("#sound-file2").get(0).play();
		$(document).on('click',"#charcter",function(){
			$("#sound-file .voice").remove();
			var rand = Math.floor( Math.random() * 3 ) +1;
			var voice = x + "_" + rand;
			$("#sound-file").append('<source class="voice" src="/Hero/sound/voice/'+voice+'.mp3" type="audio/mp3">');
			//$("#sound-file").get(0).play();
			var audio = new Audio("/Hero/sound/voice/"+voice+".mp3" );
			audio.play();
		});
		return this;
	};

	$.fn.removes=function(option){
		var x=option;
		$(this).click(function(){

		});
		return this;
	};

	$.fn.logins=function(x){
		var arr=x;
		var myArr=arr.split('/');
		if($("#flashMessage").is('.message')){
			$("#msg").fadeTo(200,1);
			$("#sound-file").append('<source class="bgm" src="/Hero/sound/bgm/buz.mp3" type="audio/mp3">');
			$("#sound-file").get(0).play();
		}

		if(myArr[6]=="PrivateHero"){
			$("#voice-file").append('<source class="bgm" src="/Hero/sound/voice/1_2.mp3" type="audio/mp3">');
			$("#voice-file").get(0).play();
			setTimeout(function(){
				$(location).attr("href", "/Hero/UserParams/index/"+myArr[7]);
			},1000);
		}

		return this;
	};

	$.fn.formation_sound=function(){
		//$("#sound-file").get(0).play();
	};

	$.fn.buttom=function(){
		this.mouseenter(function(){
			var id=$(this).text();
			$(id).stop().fadeTo(600,1);
		}).mouseleave(function(){
			var id=$(this).text();
			$(id).stop().fadeTo(600,0);
		});
		return this;

	};

	$.fn.flash=function(){
		this.mouseenter(function(){
			$(this).children(".opacityBox").addClass("over");
		}).mouseleave(function(){
			$(".opacityBox").removeClass("over");
		});
		return this;
	};

	$.fn.enterflash=function(user_id,formation_flag,none){
		var flag=0;
		if(formation_flag!=0 && none==null){
			$(this).children(".opacityBox").addClass("over2");
			$("#active-formation").text(formation_flag);
			return this;
		}
		if(formation_flag!=0 && none!=null){
			$(".noneBox").addClass("over2");
			$("#active-formation").text(formation_flag);
			return this;
		}
		if($("#num").text()==this.attr("id")){
			var id={};
			id["formation_flag"]=$("#active-formation").text();
			id["active_id"]=$(".over2").parent().get(0).id;
			id["char_id"]=$(this).attr("id");
			id["user_id"]=user_id;
			$.ajax({
				url:"/Hero/Heros/formationAjax",
				type:"POST",
				data:{post:id},
				dataType:"html",

			})
			.done(function(data){
				console.log(data);
				$("#left").html(data);
			})
			.fail(function(textStatus){
				$("#error").append("<p>"+textStatus+"</p>");
			});
		}else{
			$("#num").text(this.attr("id"));
		}
		return this;

	};

	$.fn.getFormation=function(user_id,option){
		this.click(function(){
			if(option==0){
				$(".switch").addClass("opa");
				$(this).children(".switch").removeClass("opa");
				$(".opacityBox").removeClass("over2");
			}
			$("#cardImg").stop(true,true).fadeOut(500);
			var id= {};
			if($(this).attr("id")){
				id["char_id"]=$(this).attr("id");
			}else{
				id["formation"]=$(this).children(".noneBox").attr("id");
			}
			id["user_id"]=user_id;
			id["change_char_id"] = $("#num").text();
			console.log(id);

			$.ajax({
				url:"/Hero/HerosUserParams/formationAjax",
				type:"POST",
				data:{post :id},
				dataType:"text",
			})
			.done(function(data){
				$("#XMLHttpRequest").html(data);
				$(".cont").empty();
				if(data!=0){
					$(this).subCharTable(data,id);
				}else{
					var formation=id.formation;
					$("#"+formation).enterflash(id.user_id,formation,1);
				}
			})
			.fail(function(XMLHttpRequest, textStatus, errorThrown){
				$(location).attr("href", "/Hero/Users/logout/");
				/*	$("#XMLHttpRequest").html("XMLHttpRequest : " + XMLHttpRequest.status);
					$("#textStatus").html("textStatus : " + textStatus);
					$("#errorThrown").html("errorThrown : " + errorThrown.message);*/
			});

		});
		return this;
	};

	$.fn.subCharTable=function(data,id){
		data=JSON.parse(data);
		var name=data.Character.name2;
		var lv=data.Hero.level;
		var n_hp=data.Hero.now_hp;
		var m_hp=data.Hero.max_hp;
		var nl=data.Hero.next_level;
		var at=data.Hero.atack;
		var df=data.Hero.difence;
		var sp=data.Hero.speed;
		var formation=data.Hero.formation_flag;
		console.log(name);
		$("#cardImg").stop(true,true)
			.attr("src","/Hero/img/icon/card/"+data.Character.id+".jpg")
			.fadeIn(500);
		$(".cont")
			.append(
					"<span class='cn'>Cn : <span class='color'>"
					+name+
					"</span></span>"+
					"<span class='lv'>Lv : <span class='color'>"
					+("000"+lv).substr(-3)+
					"</span></span><br>"+
					"<div class='paramBox2'><span class='hp'>Hp : <span class='damag'>"
					+("0000"+n_hp).substr(-4)+
					"</span>"+
					"/"+("0000"+m_hp).substr(-4)+
					"</span>"+
					"<span class='nl'>Next : <span class='color'>"
					+("0000"+nl).substr(-4)+
					"</span></span><br>"+
					"<span class='at'>At : <span class='color'>"
					+("0000"+at).substr(-3)+
					"</span></span>"+
					"<span class='df'>Df : <span class='color'>"
					+("0000"+df).substr(-3)+
					"</span></span>"+
					"<span class='sp'>Sp : <span class='color'>"
					+("0000"+sp).substr(-3)+
					"</span></span>"+
					"<div class='black'></div>"
					+"</div>"
					)
					.fadeIn(300);
		$(".color").css("color","#"+data.Character.color);
		$("#"+id.char_id).enterflash(id.user_id,formation);
	};

	$.fn.formationList=function(){
		this.on('click',function(){
			$("#down").css("position","relative").animate({ top:"303px"}, 300 );
			$("#sub-char").slideDown(300);
		});
		return this;
	};


	$.fn.subCharBox=function(){
		this.mouseenter(function(){
			$(this).stop().animate({
				opacity:1
			},300).mouseleave(function(){
				$(this).stop().animate({
					opacity:0.7
				},300);
			});
		});
		return this;
	};

	$.fn.pagenate=function(){
		/*this.on('click',function(){
		  var page= $(this).attr("class");
		  page=page.split('-');
		  $.ajax({
		  url:"/Hero/UserParams/formationPageAjax",
		  type:"POST",
		  data:{post:page[1]},
		  dataType:"text",
		  })
		  .done(function(data){
		  $("#XMLHttpRequest").html(data);
		  $(this).subCharTable(data);
		  })
		  .fail(function(textStatus,data){
		  $("#error").append("<p>"+textStatus+"</p>");
		  });
		  });
		  return this;*/
	};

	$.fn.debug=function(data){
		data=JSON.parse(data);
		$.each(data, function(i, value) {
		});
	};


})(jQuery);
