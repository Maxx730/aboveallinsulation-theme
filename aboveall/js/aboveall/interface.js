window.onload = function() {
    document.getElementById('top-contact').addEventListener('click',function() {
        document.getElementById('popup-frame').classList.add('show');
        document.getElementById('popup-mask').classList.add('show');
    });

    window.onscroll = function(e) {
        console.log(window.scrollY);

        if(window.scrollY > 150) {
            document.querySelector('#masthead').classList.add('fixed-masthead');

            setTimeout(function() {
                document.querySelector('#masthead').classList.add('show-masthead');
            },0);
        } else {
            document.querySelector('#masthead').classList.remove('fixed-masthead');
            document.querySelector('#masthead').classList.remove('show-masthead');
        }
    }
}

