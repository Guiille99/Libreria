$(document).ready(function(){$(".play-btn").click(a);let t=new SpeechSynthesisUtterance,l=!1;function a(){let e=$(".play-btn"),s=e.attr("aria-checked"),i=$(".post__content-body").html(),n=$("<div/>");n.html(i);let c=n.text();s=="false"?(e.attr("aria-checked","true"),e.removeClass("bi-volume-down-fill"),e.addClass("bi-pause-fill"),t.text=c,speechSynthesis.speak(t),l=!0):(e.attr("aria-checked","false"),e.removeClass("bi-pause-fill"),e.addClass("bi-volume-down-fill"),speechSynthesis.cancel(),l=!1)}t.onend=function(e){speechSynthesis.cancel(),$(".play-btn").removeClass("bi-pause-fill"),$(".play-btn").addClass("bi-volume-down-fill")},$(window).on("beforeunload",function(){l&&speechSynthesis.cancel()})});
