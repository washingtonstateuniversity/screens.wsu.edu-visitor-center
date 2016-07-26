(function($) {
	$(document).on('ready mouseup touchend', function(){

		var maxmenu = function() {
			var menu_width = $('#featured').width();
			var menu_height = $('#featured').height();
			var menu_height = menu_height + 105;
			$(this).removeClass('closed').addClass('opened');
			$(this).animate({height: menu_height}, 200);
			$(this).width(menu_width);
			$(this).unbind("click", maxmenu).bind("click", minmenu);
		};

		var minmenu = function() {
			$(this).removeClass('opened').addClass('closed');
			$(this).animate({height: '105'}, 100);
			$(this).width('100px');
			$(this).unbind("click", minmenu).bind("click", maxmenu);
		};

		$("button#menu.closed").bind("click", maxmenu);

		$('button#reload').click(function() {
			location.reload();
		});

		if ($('video').length) {
			$("#pauseplay.play").click(function() {
				$("video").get(0).pause();
				$(this).removeClass('play').addClass('pause');
				$(this).unbind("click");
				$("#pauseplay.pause").click(function() {
					$("video").get(0).play();
					$(this).removeClass("pause").addClass("play");
				});
			});

			$("#mute.unmuted").click(function() {
				$("video").prop('muted', true);
				$(this).removeClass('unmuted').addClass('muted');
				$(this).unbind("click");
				$("#mute.muted").click(function() {
					$("video").prop('muted', false);
					$(this).removeClass("muted").addClass("unmuted");
				});
			});

			var video = 'mark';
			var video = $('video');
			var video = video.get(0);
			window.setInterval(function(){
				if (video.paused) {
					window.setInterval(function(){
						if (video.paused) {
							window.location = '/walls/';
						}
					}, 10000);
				}
			}, 1000);
		}
	});
}(jQuery));
