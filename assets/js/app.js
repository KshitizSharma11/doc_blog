/* Template Name: Doctris - Doctor Appointment Booking System
   Author: Shreethemes
   Website: https://shreethemes.in/
   Mail: support@shreethemes.in
   Version: 1.2.0
   Updated: July 2021
   File Description: Main JS file of the template
*/

/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Loader               *
 *     02.  Toggle Menus         *
 *     03.  Active Menu          *
 *     04.  Admin Menu           *
 *     05.  Clickable Menu       *
 *     05.  Sticky Menu          *
 *     06.  Back to top          *
 *     07.  Feather icon         *
 *     08.  DD Menu              *
 *     09.  Active Sidebar Menu  *
 *     10.  Validation For Shop  *
 *     11.  ToolTips             *
 *     12.  Switcher             *
 ================================*/

//Loader
 window.onload = function loader() {
    // Preloader
    setTimeout(() => {
        document.getElementById('preloader').style.visibility = 'hidden';
        document.getElementById('preloader').style.opacity = '0';
    }, 350);

    // Menus
    activateMenu();
    activateSidebarMenu();
}

//Menu
// Toggle menu
function toggleMenu() {
    document.getElementById('isToggle').classList.toggle('open');
    var isOpen = document.getElementById('navigation')
    if (isOpen.style.display === "block") {
        isOpen.style.display = "none";
    } else {
        isOpen.style.display = "block";
    }
};

//Menu Active
function getClosest(elem, selector) {

    // Element.matches() polyfill
    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function (s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) { }
                return i > -1;
            };
    }

    // Get the closest matching element
    for (; elem && elem !== document; elem = elem.parentNode) {
        if (elem.matches(selector)) return elem;
    }
    return null;

};

function activateMenu() {
    var menuItems = document.getElementsByClassName("sub-menu-item");
    if (menuItems) {

        var matchingMenuItem = null;
        for (var idx = 0; idx < menuItems.length; idx++) {
            if (menuItems[idx].href === window.location.href) {
                matchingMenuItem = menuItems[idx];
            }
        }

        if (matchingMenuItem) {
            matchingMenuItem.classList.add('active');
            var immediateParent = getClosest(matchingMenuItem, 'li');
            if (immediateParent) {
                immediateParent.classList.add('active');
            }

            var parent = getClosest(matchingMenuItem, '.parent-menu-item');
            if (parent) {
                parent.classList.add('active');
                var parentMenuitem = parent.querySelector('.menu-item');
                if (parentMenuitem) {
                    parentMenuitem.classList.add('active');
                }
                var parentOfParent = getClosest(parent, '.parent-parent-menu-item');
                if (parentOfParent) {
                    parentOfParent.classList.add('active');
                }
            } else {
                var parentOfParent = getClosest(matchingMenuItem, '.parent-parent-menu-item');
                if (parentOfParent) {
                    parentOfParent.classList.add('active');
                }
            }
        }
    }
}


//Admin Menu
function activateSidebarMenu() {
    var current = location.pathname.substring(location.pathname.lastIndexOf('/') + 1);
    if (current !== "" && document.getElementById("sidebar")){
        var menuItems = document.querySelectorAll('#sidebar a');
        for (var i = 0, len = menuItems.length; i < len; i++) {
            if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
                menuItems[i].parentElement.className += " active";
                if(menuItems[i].closest(".sidebar-submenu")) {
                    menuItems[i].closest(".sidebar-submenu").classList.add("d-block");
                }
                if(menuItems[i].closest(".sidebar-dropdown")) {
                    menuItems[i].closest(".sidebar-dropdown").classList.add("active");
                }
            }
        }
    }
}

if(document.getElementById("close-sidebar")){
    document.getElementById("close-sidebar").addEventListener("click", function() {
        document.getElementsByClassName("page-wrapper")[0].classList.toggle("toggled");
    });
}

// Clickable Menu
if(document.getElementById("navigation")){
    var elements = document.getElementById("navigation").getElementsByTagName("a");
    for(var i = 0, len = elements.length; i < len; i++) {
        elements[i].onclick = function (elem) {
            if(elem.target.getAttribute("href") === "javascript:void(0)") {
                var submenu = elem.target.nextElementSibling.nextElementSibling;
                submenu.classList.toggle('open');
            }
        }
    }
}

if(document.getElementById("sidebar")){
    var elements = document.getElementById("sidebar").getElementsByTagName("a");
    for(var i = 0, len = elements.length; i < len; i++) {
        elements[i].onclick = function (elem) {
            if(elem.target.getAttribute("href") === "javascript:void(0)") {
                elem.target.parentElement.classList.toggle("active");
                elem.target.nextElementSibling.classList.toggle("d-block");
            }
        }
    }
}

// Menu sticky
function windowScroll() {
    var navbar = document.getElementById("topnav");
    if(navbar === null) {
        
    }else if( document.body.scrollTop >= 50 ||
    document.documentElement.scrollTop >= 50){
        navbar.classList.add("nav-sticky");
    }else {
        navbar.classList.remove("nav-sticky");
    }
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
})

// back-to-top
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var mybutton = document.getElementById("back-to-top");
    if(mybutton === null) {
        
    }else if( document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
        mybutton.style.display = "block";
    }else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//Feather icon
feather.replace();

// dd-menu
if(document.getElementsByClassName("dd-menu")) {
    var ddmenu = document.getElementsByClassName("dd-menu");
    for(var i = 0, len = ddmenu.length; i < len; i++) {
        ddmenu[i].onclick = function (elem) {
            elem.stopPropagation();
        }
    }
}

//ACtive Sidebar
(function () {
    var current = location.pathname.substring(location.pathname.lastIndexOf('/') + 1);;
    if (current === "") return;
    var menuItems = document.querySelectorAll('.sidebar-nav a');
    for (var i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].parentElement.className += " active";
        }
    }
})();


//Validation Shop Checkouts
(function () {
    'use strict'

    if(document.getElementsByClassName('needs-validation').length > 0) {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    }
})();

//Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});

//Switcher
try {
    function setTheme(theme) {
        document.getElementById('theme-opt').href = '../assets/css/' + theme + '.css';
    };
} catch (error) {
    
}


let register=()=>{
    let firstname=document.getElementById("fn").value;
    let lastname=document.getElementById("ln").value;
    let pronoun=pro();
    let gender=document.getElementById('inputState').value;
    let age=document.getElementById('a').value;
    let language=lan();
    let college=document.getElementById('cn').value;
    let mobile=document.getElementById('mn').value;
    let password=document.getElementById("ps").value;
        const patientregisterdata ={
            first:firstname,
            last:lastname,
            pronoun:pronoun,
            gender:gender,
            age:age,
            language:language,
            college:college,
            mobile:mobile,
            password:password
        }
        // let method="POST";
        // let url="http://localhost:1337/user/patientsregister";
        // let xhr=new XMLHttpRequest();
        // xhr.open(method,url,true);
        // xhr.setRequestHeader('Content-Type', 'application/json');
        // xhr.send(JSON.stringify(patientregisterdata));
    
        // xhr.onreadystatechange = function () {
        //     if (xhr.readyState == 4 && xhr.status == 200) {
        //         alert('U are Succesfully Registered !!');
        //         window.location.href="http://127.0.0.1:5500/HTML/landing/p-login.html";
        //     }
        // }
         
    fetch(' https://coheal-backend.herokuapp.com/user/pregamatepatientsregister', {
        method: 'POST', // or 'PUT'
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(patientregisterdata),
      })
      .then(response => response.json())
      .then((data) => {
          if(data.status==200)
          {
              alert('Succesfully registered !!')
              window.location.href="http://localhost/updatedpregatilldate/prega/landing/p-login.php";
          }
          else
          {
              alert('not registered');
          }
      })
      .catch((error) => {
        console.error('Error:', error);
      });

    }
    
    function lan(){
    let t="";
    var g=document.getElementsByName("language");
    g.forEach(radio => {
        if(radio.checked)
        {
             t=t+radio.value;
        }
    });
 return t;   
}

function pro(){
    let t;
    var g=document.getElementsByName("pronoun");
    g.forEach(radio => {
        if(radio.checked)
        {
             t=radio.value;
        }
    });
 return t;   
}

     let login=()=>{
        let mobile=document.getElementById('lmn').value;
        let rpassword=document.getElementById('lpass').value;
        let patientlogdata={
            mobileno:mobile,
            password:rpassword
        }
        // let method="POST";
        // let url1="http://localhost:3000/user/login";
        // let xhr=new XMLHttpRequest();
        // xhr.open(method,url1,true);
        // xhr.setRequestHeader('Content-Type', 'application/json');
        // xhr.send(JSON.stringify(logdata));
    
        // xhr.onreadystatechange = function () {
        //     if (xhr.readyState == 4 && xhr.status == 200) {
        //         window.location.href="http://127.0.0.1:5500/Doctris_v1.2/HTML/landing/doctor-dashboard.html?email=pratiksehjpal2000%40gmail.com";
        //     }
            
        // }
        
    
    fetch(' https://coheal-backend.herokuapp.com/user/pregamatepatientlogin', {
      method: 'POST', // or 'PUT'
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(patientlogdata),
    })
    .then(response => response.json())
    .then((data) => {
        if(data.status==200)
        {
            window.location.href="http://localhost/updatedpregatilldate/prega/landing/patient-dashboard.php";
        }
        else
        {
            alert('wrong password');
        }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
    }


    let doctorregister = ()=>{
        let name = document.getElementById('dn').value;
        let mobile = document.getElementById('dmn').value;
        let email = document.getElementById('de').value;
        let password = document.getElementById('dp').value;
        let age = document.getElementById('da').value;
        let city = document.getElementById('cp').value;
        let gender = document.getElementById('inputState-d').value;
        let language = document.getElementById('inputState-l').value;
        let lgbt = decision();
        let experties = document.getElementById('ae').value;
        let daysavailable = document.getElementById('inputStatedays').value;
        let timeavailable = document.getElementById('inputStatetime').value;
        let specialization = document.getElementById('s-d').value;
        let education = document.getElementById('eq').value;
        let experience = document.getElementById('ye').value;
        let noofpatients = document.getElementById('nt').value;
        let charges = document.getElementById('cc').value;
        let coordination = document.getElementById('nn').value;
        let image = document.getElementById('image').value;
        let signature = document.getElementById('sign').value;
        let degree = document.getElementById('degree').value;
        const doctordata = {
            name:name,
            mobile:mobile,
            email:email,
            password:password,
            age:age,
            city:city,
            gender:gender,
            language:language,
            lgbt:lgbt,
            experties:experties,
            daysavailable:daysavailable,
            timeavailable:timeavailable,
            specialization:specialization,
            degree:education,
            experience:experience,
            noofpatients:noofpatients,
            charges:charges,
            coordination:coordination,
            image:image,
            signature:signature,
            degreecertificate:degree
        }
        fetch(' https://coheal-backend.herokuapp.com/user/pregamatedoctorsregister', {
            method: 'POST', // or 'PUT'
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(doctordata),
          })
          .then(response => response.json())
          .then((data) => {
              if(data.status==200)
              {
                  alert('Succesfully registered !!')
                  window.location.href="http://localhost/updatedpregatilldate/prega/landing/d-login.php";
              }
              else
              {
                  alert('not registered');
              }
          })
          .catch((error) => {
            console.error('Error:', error);
          });
    
    
    }
    
    let decision=()=>{
        let t;
        var g=document.getElementsByName("lgbt");
        g.forEach(radio => {
            if(radio.checked)
            {
                 t=radio.value;
            }
        });
     return t;   
    }

    let doctorlogin = () =>{
        let mobile = document.getElementById('dlm').value;
        let password = document.getElementById('dlp').value;
        const doclog = {
          mobileno:mobile,
          password:password
        }
        fetch(' https://coheal-backend.herokuapp.com/user/pregamatedoctorlogin', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(doclog),
          })
          .then(response => response.json())
          .then((data) => {
              if(data.status==200)
              {
                  window.location.href="http://localhost/updatedpregatilldate/prega/landing/doctor-dashboard.php";
              }
              else
              {
                  alert('wrong password');
              }
          })
          .catch((error) => {
            console.error('Error:', error);
          }); 
      
          
      }
