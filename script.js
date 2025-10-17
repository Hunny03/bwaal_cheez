// Navigate to a destination page with query or hash if needed (simplified)
function goToDestination(dest) {
    alert("Please visit the Destinations page and click on the destination to get details."); 
    // Or you can implement URL parameters for details page in more advanced version
}

// Destination details for Destinations page
const details = {
    manali: {
        title: "Manali",
        description:
            "Manali offers adventure sports like skiing and paragliding, surrounded by snow-capped peaks and lush green valleys.",
    },
    shimla: {
        title: "Shimla",
        description:
            "Shimla is famous for its colonial architecture, vibrant markets, and pleasant climate year-round.",
    },
    dalhousie: {
        title: "Dalhousie",
        description:
            "Dalhousie is loved for its scenic pine forests, Victorian-era buildings, and tranquil environment.",
    },
    spiti: {
        title: "Spiti Valley",
        description:
            "Spiti Valley is a remote desert mountain valley known for its monasteries, rugged terrain, and starlit skies.",
    },
    kasol: {
        title: "Kasol",
        description:
            "Kasol is a small village popular for trekking, scenic landscapes, and a vibrant backpacker community.",
    },
};

function showDetails(destination) {
    const detailContent = document.getElementById("detail-content");
    if (details[destination]) {
        detailContent.innerHTML =
            `<h3>${details[destination].title}</h3><p>${details[destination].description}</p>`;
        detailContent.scrollIntoView({ behavior: 'smooth' });
    } else {
        detailContent.innerHTML = "<p>Details not available.</p>";
    }
}

// Contact form validation & submission simulation
function validateForm(e) {
    e.preventDefault();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const formMessage = document.getElementById("formMessage");

    if (name === "" || email === "" || message === "") {
        formMessage.style.color = "red";
        formMessage.textContent = "Please fill all fields.";
        return false;
    }

    // Simple email format check
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        formMessage.style.color = "red";
        formMessage.textContent = "Please enter a valid email.";
        return false;
    }

    formMessage.style.color = "#d4af37";
    formMessage.textContent = `Thank you, ${name}! Your message has been sent.`;
    document.getElementById("contactForm").reset();
    return false; // Prevent actual form submission
}
