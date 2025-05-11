        var loc = 0;
		var loaded_loc = 0;

		if (loc == 0){
			$("#back").css("opacity",".5");
			$("#continue").css("opacity",".5");
		}

        //
        //      ICONS
        //

        $("#rushdown").click(function() {
			if (loc==0){
				$("#rushdown").attr("src","images/Icons_Rushdown Selected.png");
				$("#zoning").attr("src","images/Icons_Zoning.png");
				$("#flexible").attr("src","images/Icons_Flexible.png");
				$("#baitpunish").attr("src","images/Icons_Bait and Punish.png");
				$("#custom").attr("src","images/Icons_Custom.png");
				loaded_loc = "A";
				$("#continue").css("opacity","1");
			}
        });
		$("#zoning").click(function() {
			if (loc==0){
				$("#zoning").attr("src","images/Icons_Zoning Selected.png");
				$("#rushdown").attr("src","images/Icons_Rushdown.png");
				$("#flexible").attr("src","images/Icons_Flexible.png");
				$("#baitpunish").attr("src","images/Icons_Bait and Punish.png");
				$("#custom").attr("src","images/Icons_Custom.png");
				loaded_loc = "B";
				$("#continue").css("opacity","1");
			}
        });
		$("#flexible").click(function() {
			if (loc==0){
				$("#flexible").attr("src","images/Icons_Flexible Selected.png");
				$("#rushdown").attr("src","images/Icons_Rushdown.png");
				$("#zoning").attr("src","images/Icons_Zoning.png");
				$("#baitpunish").attr("src","images/Icons_Bait and Punish.png");
				$("#custom").attr("src","images/Icons_Custom.png");
				loaded_loc = "C";
				$("#continue").css("opacity","1");
			}
        });
		$("#baitpunish").click(function() {
			if (loc==0){
				$("#baitpunish").attr("src","images/Icons_Bait and Punish Selected.png");
				$("#rushdown").attr("src","images/Icons_Rushdown.png");
				$("#zoning").attr("src","images/Icons_Zoning.png");
				$("#flexible").attr("src","images/Icons_Flexible.png");
				$("#custom").attr("src","images/Icons_Custom.png");
				loaded_loc = "D";
				$("#continue").css("opacity","1");
			}
        });
		$("#custom").click(function() {
			if (loc==0){
				$("#custom").attr("src","images/Icons_Custom Selected.png");
				$("#rushdown").attr("src","images/Icons_Rushdown.png");
				$("#zoning").attr("src","images/Icons_Zoning.png");
				$("#flexible").attr("src","images/Icons_Flexible.png");
				$("#baitpunish").attr("src","images/Icons_Bait and Punish.png");
				loaded_loc = "E";
				$("#continue").css("opacity","1");
			}
        });

        //
        //  QUIZ OPTIONS
        //

        $(".A").click(function() {
            loaded_loc = loc;
			loaded_loc += "A";
			$("#continue").css("opacity","1");
        });
        $(".B").click(function() {
            loaded_loc = loc;
            loaded_loc += "B";
            $("#continue").css("opacity","1");
        });
        $(".C").click(function() {
            loaded_loc = loc;
            loaded_loc += "C";
            $("#continue").css("opacity","1");
        });
        $(".D").click(function() {
            loaded_loc = loc;
            loaded_loc += "D";
            $("#continue").css("opacity","1");
        });
        $(".E").click(function() {
            loaded_loc = loc;
            loaded_loc += "E";
            $("#continue").css("opacity","1");
        });

        //
        //  ARROWS
        //

		$("#continue").click(function() {
            if (loaded_loc != 0){
            loc = loaded_loc;

			//$(".intro").css("display","none");
            //const intro = document.querySelector('.intro');
            //intro.classList.add('animate__animated', 'animate__fadeOut');
            //$(".intro").fadeOut(1500);

            //$(".quizsection").css("display","none");
            //const quizsection = document.querySelector('.quizsection');
            //quizsection.classList.add('animate__animated', 'animate__fadeOut');
            //$(".quizsection").fadeOut(1500);
            
            //setTimeout(locLoader,1500);
            locLoader();
            function locLoader(){
            $(".intro").css("display","none");
            //intro.classList.remove('animate__animated', 'animate__fadeOut');

            $(".quizsection").css("display","none");
            //quizsection.classList.remove('animate__animated', 'animate__fadeOut');

            $("#"+loc).css("display","initial");
            const locloader = document.querySelector("#"+loc);
            locloader.classList.add('animate__animated', 'animate__fadeInUp');
        }

			$("#back").css("opacity","1");
			$("#continue").css("opacity",".5");
        }

            if (loc == "AAA" || loc == "AABC" || loc == "AABAA" || loc == "AABAB" || loc == "AABBA" || 
            loc == "AABBB" || loc == "AABBC" || loc == "ABC" || loc == "ABAAA" || loc == "ABAAB" ||
            loc == "ABAAC" || loc == "ABABAA" || loc == "ABABAB" || loc == "ABABBA" || loc == "ABABBBA" ||
            loc == "ABABBBB" || loc == "ABBBA" || loc =="ABBBB" || loc == "ABBBC" || loc == "ABBBD" ||
            loc == "ABBAA" || loc == "ABBAB" || loc == "BEA" || loc == "BEB" || loc == "BD" || loc == "BAAA"
            || loc == "BAAB" || loc == "BABA" || loc == "BABBB" || loc =="BABBA" || loc =="BCA" || loc =="BCCA"
            || loc == "BCCB" || loc == "BCBA" || loc == "BCBB" || loc == "BBA" || loc == "BBB" || loc == "BBCC"
            || loc == "BBCBA" || loc == "BBCBB" || loc == "BBCBC" || loc == "BBCBD" || loc == "BBCAA" || loc == "BBCAB"
            || loc == "BBCAC" || loc == "BBCADA" || loc == "BBCADB" || loc == "BBCADC" || loc == "CAAA" || loc == "CAAB"
            || loc == "CABA" || loc == "CABB" || loc == "CBA" || loc == "CBB" || loc == "CBC" || loc == "CCB"
            || loc == "CCC" || loc == "CCD" || loc == "CCAA" || loc == "CCAB" || loc == "CCAC" || loc == "CDB"
            || loc == "CDAA" || loc == "CDAB" || loc == "CDC" || loc == "CDDB" || loc == "CDDC" || loc == "CDDAA"
            || loc == "CDDAB" || loc == "DAAB" || loc == "DAAA" || loc == "DAC" || loc == "DABB" || loc == "DABC"
            || loc == "DABAA" || loc == "DABAB" || loc == "DBAA" || loc == "DBAB" || loc == "DBAC" || loc == "DBBA"
            || loc == "DBBB" || loc == "DBBC" || loc == "DBBD" || loc == "E") {
                $(".intro").css("display","none");
                $(".quizsection").css("display","none");
                $(".iconrow").css("display","none");
			    $("#"+loc).css("display","flex");
			    $("#back").css("opacity","0");
			    $("#continue").css("opacity","0");
            }
        });

		$("#back").click(function() {
            if (loc.length>1){
                loc = loc.slice(0,-1);
                loaded_loc = loaded_loc.slice(0,-1);
                $(".intro").css("display","none");
                $(".quizsection").css("display","none");
			    $("#"+loc).css("display","initial");
			    $("#back").css("opacity","1");
			    $("#continue").css("opacity",".5");
            }
            else if (loc.length==1) {
                loc = 0;
                loaded_loc = 0;
                $(".intro").css("display","initial");
                $(".quizsection").css("display","none");
			    $("#back").css("opacity",".5");
			    $("#continue").css("opacity",".5");
                $("#custom").attr("src","images/Icons_Custom.png");
				$("#rushdown").attr("src","images/Icons_Rushdown.png");
				$("#zoning").attr("src","images/Icons_Zoning.png");
				$("#flexible").attr("src","images/Icons_Flexible.png");
				$("#baitpunish").attr("src","images/Icons_Bait and Punish.png");
            }
        });
        $(".diagram").attr("data-aos","fade-up");
        $(".custom_diagram").attr("data-aos","fade-up");