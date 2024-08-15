
function togglePasswordVisibility(inputId, buttonId) {
    var x = document.getElementById(inputId);
    var y = document.getElementById(buttonId);
  
    if (x.type === "password") {
      x.type = "text";
      y.innerHTML = "Hide";
    } else {
      x.type = "password";
      y.innerHTML = "Show";
    }
  }
  
  
  function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
  
    
    if (username === "" || email === "" || password === "") {
      alert("Please fill in all fields.");
      return false;
    }
  
    
  
    return true;
  }
  
  
  function addDHTMLEffects() {
   
    var navItems = document.querySelectorAll("nav ul li");
    navItems.forEach(function(item) {
      item.addEventListener("mouseover", function() {
        this.style.backgroundColor = "#007bff";
        this.style.color = "#fff";
      });
      item.addEventListener("mouseout", function() {
        this.style.backgroundColor = "";
        this.style.color = "";
      });
    });
  }
  
 
  function addJQueryEffects() {
    
    $(".container").fadeIn(1000);
  }
  
 
  document.addEventListener("DOMContentLoaded", function() {
    addDHTMLEffects();
    addJQueryEffects();
  });
  
  
  


 
function validateProjectForm() {
    var projectName = document.getElementById("projectName").value;
    var projectDescription = document.getElementById("projectDescription").value;
    var isValid = true;
  
    
    if (!projectName.trim()) {
      document.getElementById("projectNameError").innerText = "Please enter project name.";
      isValid = false;
    } else {
      document.getElementById("projectNameError").innerText = "";
    }
  
    
    if (!projectDescription.trim()) {
      document.getElementById("projectDescriptionError").innerText = "Please enter project description.";
      isValid = false;
    } else {
      document.getElementById("projectDescriptionError").innerText = "";
    }
  
    return isValid;
  }
  
  
  document.getElementById("addProjectForm").addEventListener("submit", function(event) {
    if (!validateProjectForm()) {
      event.preventDefault(); 
    }
  });
  


  



  