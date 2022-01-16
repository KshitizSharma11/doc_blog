

// counter
const counter = document.querySelectorAll('.counter-value');
const speed = 2500; // The lower the slower

counter.forEach(counter_value => {
	const updateCount = () => {
		const target = +counter_value.getAttribute('data-target');
		const count = +counter_value.innerText;

		// Lower inc to slow and higher to slow
        var inc = target / speed;

        if(inc < 1){
            inc = 1;
        }
        
		// Check if target is reached
		if (count < target) {
            // Add inc to count and output in counter_value
			counter_value.innerText = (count + inc).toFixed(0);
			// Call function every ms
			setTimeout(updateCount, 1);
		} else {
			counter_value.innerText = target;
		}
	};

	updateCount();
});

$(window).scroll(testScroll);
var viewed = false;

function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function testScroll() {
  if (isScrolledIntoView($(".numbers")) && !viewed) {
    viewed = true;
    $('.value').each(function() {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function(now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  }
}
