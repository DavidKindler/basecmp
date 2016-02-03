	var NXP = NXP || {}; // Do not redefine NXP if already defined.
	NXP.returnDate = function(dateString) {
	        var temp = new Date(dateString);
	        var dateStr = temp.getDate().toString() + " " + NXP.month[temp.getMonth()].toString() + " " + temp.getFullYear().toString();
	        return dateStr;
	    }
	    //Build news ticker
	NXP.month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	NXP.NEWS = NXP.NEWS || {};
	NXP.NEWS.load = function(newsItems) {
	    var htmlStr = "";
	    if (typeof newsItems != 'undefined') {
	        for (var i = 0; i < newsItems.channel.item.length; i++) {
	            var title = newsItems.channel.item[i].title;
	            var link = newsItems.channel.item[i].link;
	            var pubdate = NXP.returnDate(newsItems.channel.item[i].pubDate);
	            htmlStr += '<div class="newsItem"><h5>NEWS&nbsp;&nbsp;<span class="newsdate">'
													+pubdate+'</span></h5><p>'+title+'</p><a href="'+link
													+'" class="readmore" target="_blank" data-content-finding="Footer" data-content-subfinding="NEWS">READ MORE</a></div>';
	        }
	    }
	    if (!jQuery.fn.carouFredSel) {
	        jQuery.getScript("//cache.freescale.com/files/js/jquery.carouFredSel-6.2.1-packed.js", function() {
	            jQuery('#news').html(htmlStr).carouFredSel({
	                auto: {
	                    timeoutDuration: 8000
	                },
	                prev: {
	                    button: "#newsLeft"
	                },
	                next: {
	                    button: "#newsRight"
	                },
	                scroll: {
	                    fx: "crossfade",
	                    easing: "quadratic",
	                    duration: 500
	                }
	            });
	        });
	    } else {
	        jQuery('#news').html(htmlStr).carouFredSel({
	            auto: {
	                timeoutDuration: 8000
	            },
	            prev: {
	                button: "#newsLeft"
	            },
	            next: {
	                button: "#newsRight"
	            },
	            scroll: {
	                fx: "crossfade",
	                easing: "quadratic",
	                duration: 500
	            }
	        });
	    }
	};
	if (typeof NXP.NEWS != 'undefined') {
	    NXP.NEWS.load(NXP.NEWS.items);
	}