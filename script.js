// Validate form inputs
function validateForm() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const passType = document.getElementById("pass-type").value;
    const startDate = document.getElementById("start-date").value;
    const endDate = document.getElementById("end-date").value;
    
    if (name === "" || email === "" || passType === "" || startDate === "" || endDate === "") {
    alert("Please fill in all fields.");
    return false;
    }
    
    return true;
    }
    
    // Attach event listener to form submit button
    const form = document.querySelector("form");
    form.addEventListener("submit", (event) => {
    event.preventDefault();
    
    if (validateForm()) {
    form.submit();
    }
    });
    