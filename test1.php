<?php
$name="jooyeok";
$age=25;
?>
<html>
    <head>
        <title> test1 </title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Orbitron:wght@800&family=Raleway&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href="css1.css">
    </head>
    <body>
        <img src="https://jooyeokkim.github.io/web1/hcj.png" width = "10%"><br>
        naver 링크 
        <a href="https://www.naver.com/"> 여기에 </a><br>
        youtube 링크
        <a href="https://www.youtube.com/"> 여기에 </a><br>
        index2 링링크
        <a href="https://jooyeokkim.github.io/web1/index2.html"> 여기에 </a><br>
        <?php echo $age; ?>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZrmTGLuSLi4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p>
            <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://index1-1.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </p>
    </body>
</html>