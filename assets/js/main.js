window.addEventListener('load', function() {
    new FastClick(document.body);
}, false);

$(document).ready(function () {
  $('.nav-item a').tabindex = -1;
  $('.nav-trigger').focus($('.nav-item a').tabindex = 0);


  $('.nav-item a').focus(function() {
    $('.wrapper').css({
    'left':'200px'
    })
    $('.nav-trigger').css({
      'background-image':"url(" + "<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' width='30px' height='30px' viewBox='0 0 30 30' enable-background='new 0 0 30 30' xml:space='preserve'><rect width='30' height='6' fill='white'/><rect y='24' width='30' height='6' fill='white'/><rect y='12' width='30' height='6' fill='white'/></svg>" +")"
    })
  });

  $('.nav-trigger').click(function() {
    $('.wrapper').toggleClass('open');
  });

  $('.nav-item a').blur(function() {
    $('.wrapper').css({
    'left':'0'
    })
  });

  $('#register-btn').removeAttr('href');

  $('.register').click(function() {
    event.preventDefault();

    var emailreq = document.forms["registration"]["email"].value;
    var fname = document.forms["registration"]["fname"].value;
    var lname = document.forms["registration"]["lname"].value;
    var username = document.forms["registration"]["username"].value;
    var password = document.forms["registration"]["password"].value;
    var password2 = document.forms["registration"]["password2"].value;

    var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

    if(emailreq && fname && lname && username && password && password2) {
      /* console.log("Everything's filled in"); */
      if (emailreq.search(emailRegEx) == -1) {
          alert("Please enter a valid email address.");
      }
      else {
         $('#register-btn').attr('href');
         $('.email-confirmation').css({
             'display': 'block'
         });
         var email = document.getElementById("email").value;
         var check = document.getElementById("email-check");
         check.innerHTML = check.innerHTML + email;
      }
    } else {
      alert("Please fill in all required fields!");
      /* console.log("something's wrong."); */
    }
  });

  $('.cancel').click(function() {
    $('.email-confirmation').css({
        'display': 'none'
    });
  });

  $('.sendNew').click(function() {
    $('.hidden').css({
        'display': 'block'
    });
  });

  $('.notifications').click(function() {
    $('.notifications').toggleClass('active-action');
    $('.notification-flyout').toggleClass('hidden');
  });

  document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
  };

});

function resizeText() {
  var selectBox = document.getElementById("size");
  var multiplier = selectBox.options[selectBox.selectedIndex].value;
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "1.0em";
  }

  if (multiplier == '-1') {
    document.body.style.fontSize = 1 + "em";
  }
  if (multiplier == '1') {
    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + 0.3 + "em";
  }
  if (multiplier == '2') {
    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + 0.5 + "em";
  }
  if (multiplier == '3') {
    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + 0.7 + "em";
  }
}

function changeSpacing() {
  var selectBox = document.getElementById("spacing");
  var multiplier = selectBox.options[selectBox.selectedIndex].value;
  if (document.body.style.letterSpacing == "") {
    document.body.style.letterSpacing = "normal";
  }

  if (multiplier == '0') {
    document.body.style.letterSpacing = "normal";
  }
  if (multiplier == '1') {
    document.body.style.letterSpacing = "1px";
  }
  if (multiplier == '2') {
    document.body.style.letterSpacing = "1.5px";
  }
  if (multiplier == '3') {
    document.body.style.letterSpacing = "2px";
  }
}

var substringMatcher = function(strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substrRegex = new RegExp(q, 'i');

        // iterate through the pool of strings and for any string that
        // contains the substring `q`, add it to the `matches` array
        $.each(strs, function(i, str) {
          if (substrRegex.test(str)) {
            // the typeahead jQuery plugin expects suggestions to a
            // JavaScript object, refer to typeahead docs for more info
            matches.push({ value: str });
          }
        });

        cb(matches);
      };
    };

      var states = ['CindyLou', 'shereads', 'MentorJoe', 'nephiea', 'Zandig',
        'Voltron', 'Nunaa', 'Gnomonies', 'Zanyer', 'Vayren', 'Turelie',
        'Widget', 'robbiethegoose', 'Luna', 'Vehement', 'Zammyer', 'Velexia', 'LouLouWho',
        'Martha May', 'DrewLou', 'Junie', 'Tensho', 'Dia', 'Ashlee', 'Gargrosh', 'Garrosh', 'anonymouse23', 'MentorEmma', 'louis'
      ];

      $('#the-basics .typeahead').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
      },
      {
        name: 'states',
        displayKey: 'value',
        source: substringMatcher(states)
      });
