	<script type="text/javascript">
	
		//PAGE NAVIGATION
	
		$(".page-2").hide();
		$(".blockinfo").hide();
		
		var user;
		var userinfo;
	
		$(document).ready(function() {
			$(".account").hide();
			$(".hasAccount-yes").click(function() {
				$(".account-yes").show();
				$(".account-no").hide();
			});
			$(".hasAccount-no").click(function() {
				$(".account-yes").hide();
				$(".account-no").show();
			});
			
			
			var card_id = 0;
				
			$(".page").each(function() {
				$(this).hide();
				$(".page-0").show()
			});
		
			$(".prev").click(function() {
				new_val = $(this).data("page");
				movePage(new_val);
			});
						
			$(".next").click(function() {
				new_val = $(this).data("page");
				movePage(new_val);
			});
			
			function movePage(page) {
				$(".page-" + card_id).fadeOut("slow", function() {
					card_id = page;
					width = card_id * 20;
					$(".progress-bar").css("width", width + "%").text(width + "%");
					$(".page-" + card_id).fadeIn("slow");
					$("#page-nav").val(card_id);
					scrollToAnchor("panel-progress");
					cardSpecificFunctions(card_id);
				});
			}
			
			//CARD FUNCTIONS
			
			function cardSpecificFunctions(card_id) {
				switch (card_id) {
					
					case 5:
						gatherBlockInfo();
						break;
					case 3:
						reviewOptions();
						break;
				}
			}
			
			//PAGE 2 - LOOKUP.BLADE.PHP
			
			$(".lookup").click(function() {
			
				el = $(".page-1 input");
			
				$(el).parent().find("span").remove();
				
				if ($(el).val() == "") {
					
					$("<span>").html("Please input an IP address or username").css("color", "#FF0000").appendTo($(el).parent());
				
				} else {
								
					movePage(2);
								
					$.ajax({
						method: "GET",
						url: "/blockinfo/" + $(el).val().trim(),
						success: function(data) {
						
								user = data;
								userinfo = $.parseJSON(data.cache);
								
								movePage(3);
						
								
								
						},
						error: function(data) {
							alert("Error: " + data);
						},
					});
				
				}

			
			
			});
			
			function gatherBlockInfo() {
			
				
			}
			
			function reviewOptions() {
			
				$(".process-username").text(user.username);
				$("#wikiAccountName").val(user.username);
				$(".process-edits").text(userinfo["edits"]);
				$(".process-registration").text(userinfo["registration"]);
				var blocked = (userinfo["blockinfo"]) ? '<span class=\"color: red;\">Blocked</span>' : '<span class=\"color: green;\">Unblocked</span>';
				$(".process-status").html('<strong>' + blocked + '</strong>');
				if (userinfo["blockinfo"]) {
					$(".process-blocked-for").html('<strong>' + userinfo["blockinfo"]["blockreason"] + '</strong>');
					$(".process-blocked-by").html('<strong>' + userinfo["blockinfo"]["blockedby"] + '</strong>');
					$(".process-blocked-timestamp").html('<strong>' + userinfo["blockinfo"]["blockedtimestamp"] + '</strong>');
					$(".process-blocked-expiry").html('<strong>' + userinfo["blockinfo"]["blockexpiry"] + '</strong>');
					$(".blockinfo").show();
				} else {
					$(".blockinfo").hide();
				}
				blockType = parseBlock(userinfo["blockinfo"]["blockreason"]);
			
			}
			
			function parseBlock(blockreason) {
				blockTypes = [
					{
						tag: "@{{anonblock}}",
						type: "Anonymous Proxy Block",
						advice: "/block/notices/anon",
						submit: 1,
					},
					{
						tag: "@{{arbcomblock}}",
						type: "Anonymous Proxy Block",
						advice: "/block/notices/arbcom",
						submit: 1,
					},
					{
						tag: "@{{checkuserblock}}",
						type: "Anonymous Proxy Block",
						advice: "/block/notices/checkuser",
						submit: 1,
					},
					{
						tag: "@{{oversightblock}}",
						type: "Anonymous Proxy Block",
						advice: "/block/notices/oversight",
						submit: 1,
					},
					{
						tag: "@{{uw-aeblock}}",
						type: "Anonymous Proxy Block",
						advice: "/block/notices/arbenf",
						submit: 1,
					},
					{
						tag: "@{{webhostblock}}",
						type: "Anonymous Proxy Block",
						advice: "/block/notices/webhost",
						submit: 1,
					},
				]
				
				for (i=0; i < blockTypes.length; i++) {
					tag = blockTypes[i].tag;
					if (blockreason.indexOf(tag) > -1) {
						if (blockTypes[i].submit == 1) {
							getAdvice(blockTypes[i].advice);
						}
					}
				}
			}
			
			function getAdvice(url) {
				$.ajax({
					method: "GET",
					url: url,
					success: function(data) {
						$(".process-advice").html(data);
					},
					error: function(data) {
							alert("Error: " + data);
					}
				});
			}
			
			function scrollToAnchor(aid){
				var aTag = $("#" + aid);
				$('html,body').animate({scrollTop: aTag.offset().top - 55},'slow');
			}
			
		});
		
	
	</script>