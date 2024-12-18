<div style="display:flex; justify-content:space-between; align-items:center; padding: 5px 10px; background-color: #495f47; background-image: radial-gradient(#2b3a14 2px, #495f47 2px); background-size: 40px 40px; flex-wrap: wrap;">
    <div style="display: flex; align-items: center; flex-wrap: wrap;">
        <img src="images/logomain.jpg" alt="Website Logo" style="width: 100px; border-radius:30px; height: auto; margin-right: 10px;">
        <div>
            <h1 id="nyxify-title" style="margin: 0; color: #e8ebe4; font-size: 2rem;">Nyxify Collection</h1>
            <h3 id="klein-subtitle" style="margin: 0; color: #e8ebe4; font-size: 1.2rem;">By: Klein F. Lavina BSIT 3-T</h3>
        </div>
    </div>
    <?php session_start(); ?>
    <div>
    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === 'yes'): ?>
        <!-- If the user is logged in, show the Log Out link -->
        <button class="logout-btn" style="background-color:#7e9f81; color: #e8ebe4; padding: 15px 30px; font-size: 18px; font-weight: bold; border: none; cursor: pointer; border-radius: 8px; transition: background-color 0.3s ease, transform 0.2s ease;">
            <li style="list-style:none;"><a href="?page=logout" style="text-decoration:none; color:inherit;">Log Out</a></li>
        </button>
    <?php else: ?>
        <button class="signup-btn" style="background-color:#7e9f81; color: #e8ebe4; padding: 15px 30px; font-size: 18px; font-weight: bold; border: none; cursor: pointer; border-radius: 8px; transition: background-color 0.3s ease, transform 0.2s ease;">
            <li style="list-style:none;"><a href="?page=signup" style="text-decoration:none; color:inherit;">Sign Up</a></li>
        </button>
        <button class="login-btn" style="background-color:#7e9f81; color: #e8ebe4; padding: 15px 30px; font-size: 18px; font-weight: bold; border: none; cursor: pointer; border-radius: 8px; transition: background-color 0.3s ease, transform 0.2s ease;">
            <li style="list-style:none;"><a href="?page=login" style="text-decoration:none; color:inherit;">Log In</a></li>
        </button>
    <?php endif; ?>
    </div>
</div>

<style>
/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    div[style*="display:flex; justify-content:space-between;"] {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    div[style*="display: flex; align-items: center;"] {
        flex-direction: column;
        margin-bottom: 20px;
    }

    img {
        width: 80px;
        margin-bottom: 10px;
    }

    h1 {
        font-size: 1.5rem;
    }

    h3 {
        font-size: 1rem;
    }

    button {
        font-size: 16px;
        padding: 10px 20px;
    }
}

/* Hover effect for the Log In button */
.login-btn:hover {
    background-color: #b7bfa9; /* Change background color on hover */
    transform: scale(1.05); /* Slight scaling effect */
    transition: background-color 0.3s ease, transform 0.2s ease;
}
.signup-btn:hover {
    background-color: #b7bfa9; /* Change background color on hover */
    transform: scale(1.05); /* Slight scaling effect */
    transition: background-color 0.3s ease, transform 0.2s ease;
}
.logout-btn:hover {
    background-color: #b7bfa9; /* Change background color on hover */
    transform: scale(1.05); /* Slight scaling effect */
    transition: background-color 0.3s ease, transform 0.2s ease;
}
</style>

<script>
// Array of colors to cycle through
const colors = ['#ff6347', '#4682b4', '#32cd32', '#ffd700', '#8a2be2', '#ff4500', '#00ced1'];

// Function to change color of text every 2 seconds
let currentColorIndex = 0;
setInterval(() => {
    const titleElement = document.getElementById("nyxify-title");
    const subtitleElement = document.getElementById("klein-subtitle");
    
    titleElement.style.color = colors[currentColorIndex];
    subtitleElement.style.color = colors[currentColorIndex];
    
    // Move to next color in the array
    currentColorIndex = (currentColorIndex + 1) % colors.length;
}, 2000); // 2000ms = 2 seconds
</script>
