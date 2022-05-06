<html>

<head>
    <title>Slider4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container">
        <div class="veiw-box">
            <div id="testimonials">
                
                <div class="user">
                    <img src="images/user1.jpg" alt="">
                    <p>Many people feel that there is a limited amount of abundance, wealth, or chance to succeed in life. Furthermore, there is a solid beleif that if one person succeeds, another must fail.</p>
                    <h3>Riley Olie</h3>
                </div>
                
                <div class="user space">
                    <img src="images/user2.jpg" alt="">
                    <p>Many people feel that there is a limited amount of abundance, wealth, or chance to succeed in life. Furthermore, there is a solid beleif that if one person succeeds, another must fail.</p>
                    <h3>Steve McCurry</h3>
                </div>
                
                <div class="user">
                    <img src="images/user1.jpg" alt="">
                    <p>Many people feel that there is a limited amount of abundance, wealth, or chance to succeed in life. Furthermore, there is a solid beleif that if one person succeeds, another must fail.</p>
                    <h3>Merlin Nguyen</h3>
                </div>
                
                
            </div>
            
            <div class="controls">
                <span id="control1"></span>
                <span id="control2" class="active"></span>
                <span id="control3"></span>
            </div>
            
        </div>
    </div>
    


    <script>
    
        var testimonials = document.getElementById('testimonials');
        var control1 = document.getElementById('control1');
        var control2 = document.getElementById('control2');
        var control3 = document.getElementById('control3');
        
        
        control1.onclick=function(){
            testimonials.style.transform = "translateX(870px)";
            control1.classList.add("active");
            control2.classList.remove("active");
            control3.classList.remove("active");
        }
        
        control2.onclick=function(){
            testimonials.style.transform = "translateX(0px)";
            control1.classList.remove("active");
            control2.classList.add("active");
            control3.classList.remove("active");
        }
        
        control3.onclick=function(){
            testimonials.style.transform = "translateX(-870px)";
            control1.classList.remove("active");
            control2.classList.remove("active");
            control3.classList.add("active");
        }
        
        
        
        
    
    </script>
    
    
    
    
    

</body>

</html>
