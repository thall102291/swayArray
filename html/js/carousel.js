let carousel = document.getElementsByClassName("carousel"),
    master = document.getElementsByClassName("master");

[].forEach.call(master, function(c){
    let next = c.getElementsByClassName("next")[0],
        prev = c.getElementsByClassName("prev")[0],
        bubbleContainer = document.getElementsByClassName("bubbles")[0],
        inner = c.getElementsByClassName("inner")[0],
        iframes = inner.getElementsByTagName("iframe"),
        currentIndex = 0,
        width = 640,
        bubbles =[];

        for(let i = 0; i < iframes.length; i++){
            let b = document.createElement('span');
            b.classList.add('bubble');
            bubbleContainer.appendChild(b);
            bubbles[i] = b;

            b.addEventListener('click', function(){
                currentIndex = i;
                switchShowcase();
            });
        }

        function switchShowcase(){
            inner.style.left = -width * currentIndex + 'px';

            for(let i = 0; i < iframes.length; i++){
                let b = bubbles[i];
                if(i == currentIndex){
                    b.classList.add('active');     
                } else{
                    b.classList.remove('active');
                }
            }
        }

        next.addEventListener('click', function(){
            currentIndex++;

            if(currentIndex >= iframes.length){
                currentIndex = 0;
            }

            switchShowcase();
        });

        prev.addEventListener('click', function(){
            currentIndex--;

            if(currentIndex < 0){
                currentIndex = iframes.length - 1;
            }

            switchShowcase();
        });

        switchShowcase();
});
