	<!--JQUERY-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    
    <!--EFEITO SCROLL MENU-->
    <script src="js/Scrool-Top/script.js"></script>
        
    <!--SELECT-->   	
	<script type="text/javascript">  
        function MostraCampos(value) {  
            for(i=2; i<=3; i++)  
                document.getElementById("div" + i).style.display='none';  
              
            if (value >= 2 && value <= 3)  
                document.getElementById("div" + value).style.display='block';  
        }  
          
        function EnviaForm() {  
            document.getElementById("form1").submit();  
        }  
    </script>
    
    <!--GALERIA-->
    <link rel="stylesheet" href="js/colorbox-master/example1/colorbox.css" />
    <script src="js/colorbox-master/jquery.colorbox.js"></script>
    <script>
        $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements
            $(".group1").colorbox({rel:'group1'});
            $(".group2").colorbox({rel:'group2'});
            $(".group3").colorbox({rel:'group3'});
            $(".group4").colorbox({rel:'group4'});
            $(".group5").colorbox({rel:'group5'});
            $(".group6").colorbox({rel:'group6'});
            $(".group7").colorbox({rel:'group7'});
            $(".group8").colorbox({rel:'group8'});
            $(".group9").colorbox({rel:'group9'});
            $(".group10").colorbox({rel:'group10'});
            $(".group11").colorbox({rel:'group11'});
			$(".group12").colorbox({rel:'group12'});
			$(".group13").colorbox({rel:'group13'});
            
            
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
            $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
            $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
            $(".inline").colorbox({inline:true, innerWidth:800});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });
    
            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
            
            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function(){ 
                $('#click').css({"background-color":"#FC0", "color":"#FC0", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>
    
    <!--FORMULARIO-->
    <script src="js/formulario.js"></script>  
