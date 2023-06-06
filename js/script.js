// Set the date we're counting down to

var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
var x = setInterval(function() {
  var conter = document.querySelector("#contdown") ;
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    conter.innerHTML = days + "يوم " + hours + "ساعة " +
        minutes + "دقيقة " + seconds + "ثانية ";
    if (distance < 0) {
        clearInterval(x);
        conter .innerHTML = "لقد وصلت متاخر";
    }
}, 1000);
// برمجة اختيار الرابح

const wid = document.querySelector('#winner');
window.addEventListener('click', function() {
});

